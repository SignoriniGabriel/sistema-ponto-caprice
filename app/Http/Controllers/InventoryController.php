<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('nivel-adm');
        $inventories = DB::table('inventories')
            ->join('products', 'product_id', '=', 'products.id')
            ->select('inventories.*', 'products.name')
            ->paginate(5);

        return view('inventory.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::whereNotIn('id', Inventory::select('product_id')->get()->pluck('product_id'))->get();
        return view('inventory.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $data = $request->validate([
                'amount' => 'required',
                'product_id' => 'required'
            ]);
            Inventory::create($data);
            return redirect()->action([InventoryController::class, 'index'])->with('sucesso', 'Registro Salvo');
        } catch (Exception $e){
            return redirect()->action([InventoryController::class, 'index'])->with('erro', 'Erro ao salvar o registro!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::all()->find($id);
        $product = Product::all()->find($inventory->product_id);
        return view('inventory.show', compact('inventory', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::all();
        $inventory = Inventory::findOrFail($id);
        return view('inventory.edit', compact('inventory', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $data = $request->validate([
                'amount' => 'required',
                'product_id' => 'required'
            ]);
            Inventory::whereId($id)->update($data);
            return redirect()->action([InventoryController::class, 'index'])->with('sucesso', 'Registro Salvo');
        } catch (Exception $e){
            return redirect()->action([InventoryController::class, 'index'])->with('erro', 'Erro ao salvar o registro!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Inventory::destroy($id);
            return redirect()->action([InventoryController::class, 'index'])->with('sucesso', 'Registro Excluído');
        } catch (Exception $e){
            return redirect()->action([InventoryController::class, 'index'])->with('erro', 'Erro ao excluir o registro!');
        }
    }

    public function delete($id){
        $inventory = Inventory::findOrFail($id);
        return view('inventories.delete', compact('inventory'));
    }

    public function search(Request $request){
        $filter = $request->query('filter');
        $search = $request->query('search');
        $inventories = Inventory::where($filter, 'like', '%'.$search.'%')->orderBy($filter)->paginate(5);
        return view('inventories.index', compact('inventories','filter','search'));
    }
}
