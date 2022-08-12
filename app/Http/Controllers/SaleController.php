<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\ProductSale;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sales_closed = Sale::where(['status' => 'closed', 'user_id'=>Auth::id()])->get();
        $sales_opened = Sale::where(['status' => 'opened', 'user_id'=>Auth::id()])->get();
        $sales_processing = Sale::where(['status' => 'processing', 'user_id'=>Auth::id()])->get();
        return view('sale.index', compact('sales_closed', 'sales_opened', 'sales_processing'));
    }

    public function add(int $id)
    {
        try{
            $product = Product::findOrFail($id);
            $sale = Sale::where(['status' => 'opened'])->first();
            if ($sale == null){
                //método que cria um novo registro de sale no bd
                $this->newSale($product);
            } else {
                $product_sale = ProductSale::where(['sale_id' => $sale->id, 'product_id' => $product->id])->first();
                if ($product_sale == null){
                    //método para adicionar o novo carro nessa compra
                    $this->newProductSale($product, $sale);
                } else {
                    //método para alterar o registro já existente no banco de dados
                    $this->updateProductSale($product, $product_sale, $sale);
                }
            }
            return redirect()->action([SaleController::class, 'index'])->with('sucesso', 'Produto adicionado!');
        } catch (Exception $e){
            return redirect()->action([SaleController::class, 'index'])->with('erro', 'Erro ao inserir o produto');
        }
    }

    private function newSale($product)
    {
        $storeData = [
            'status' => 'opened',
            'user_id' => Auth::id(),
            'total' => $product->price
        ];
        $sale = Sale::create($storeData);
        $storeData = [
            'sale_id' => $sale->id,
            'product_id' => $product->id,
            'total' => $product->price,
            'quantity' => 1
        ];
        ProductSale::create($storeData);
    }

   private function newProductSale(Product $product, Sale $sale)
    {
        $storeData = [
            'sale_id' => $sale->id,
            'product_id' => $product->id,
            'total' => $product->price,
            'quantity' => 1
        ];
        ProductSale::create($storeData);
        $storeData = [
            'status' => 'opened',
            'user_id' => Auth::id(),
            'total' => $sale->total + $product->price
        ];
        Sale::whereId($sale->id)->update($storeData);
    }

    private function updateProductSale(Product $product, ProductSale $product_sale, Sale $sale)
    {
        $storeData = [
            'sale_id' => $product_sale->sale_id,
            'product_id' => $product_sale->product_id,
            'total' => $product_sale->total + $product->price,
            'quantity' => $product_sale->quantity + 1
        ];
        ProductSale::whereId($product_sale->id)->update($storeData);
        $storeData = [
            'status' => 'opened',
            'user_id' => Auth::id(),
            'total' => $sale->total + $product->price
        ];
        Sale::whereId($sale->id)->update($storeData);
    }

    public function remove(int $id)
    {
        try{
            $product_sale = ProductSale::findOrFail($id);
            $product = Product::findOrFail($product_sale->product_id);
            if ($product_sale->quantity == 1)
                ProductSale::destroy($id);
            else {
                $storeData = [
                    'sale_id' => $product_sale->sale_id,
                    'product_id' => $product_sale->product_id,
                    'total' => $product_sale->total - $product->price,
                    'quantity' => $product_sale->quantity - 1
                ];
                ProductSale::whereId($product_sale->id)->update($storeData);
            }
            $sale = Sale::findOrFail($product_sale->sale_id);
            if ($sale->product_sale->isEmpty()){
                Sale::destroy($sale->id);
            } else {
                $storeData = [
                    'status' => 'opened',
                    'user_id' => $sale->user_id,
                    'total' => $sale->total - $product->price
                ];
                Sale::whereId($sale->id)->update($storeData);
            }
            return redirect()->action([SaleController::class, 'index'])->with('sucesso', 'Produto removido!');
        } catch (Exception $e){
            return redirect()->action([SaleController::class, 'index'])->with('erro', 'Erro ao remover produto!');
        }
    }

    public function cart(int $id)
    {
        try{
            $sale = Sale::findOrFail($id);
            $storeData = [
                'status' => 'closed',
                'user_id' => $sale->user_id,
                'total' => $sale->total,
            ];
            Sale::whereId($sale->id)->update($storeData);
            $status = "Venda realizada com sucesso!";
            return view('sale.payment', compact('sale', 'status'));
        } catch (Exception $e){
            return redirect()->action([SaleController::class, 'index'])
                ->with('erro', 'Erro ao finalizar a venda!');
        }
    }

    public function checkout()
    {
        $sales_opened = Sale::where(['status' => 'opened'])->get();
        return view('sale.checkout', compact('sales_opened'));
    }

    public function finish()
    {
        $sales = Sale::where(['status' => 'opened'])->first();
        Sale::whereId($sales->id)->update(['status' => 'processing']);
        return redirect()->action([SaleController::class,'index'])->with('sucesso','Venda Finalizada');
    }

    public function view()
    {
       $sales = Sale::orderBy("created_at")->get();
       return view('sale.view',compact('sales'));
    }

    public function receive($id)
    {
        Sale::whereId($id)->update(['status' => 'closed']);
        return redirect()->action([SaleController::class,'view'])->with('sucesso','Venda Finalizada');
    }
}

