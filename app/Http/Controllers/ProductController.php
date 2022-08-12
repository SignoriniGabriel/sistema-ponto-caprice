<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
        $products = Product::orderBy('name')->paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $product = new Product();
            $data = $request->only($product->getFillable());
            $product = Product::create($data);
            $photo = $product->id.'.'.$request->image->extension();
            $request->image->storeAs('public/products/', $photo);
            $product->image = $photo;
            $data = $product->only($product->getFillable());
            Product::whereId($product->id)->update($data);
            return redirect()->action([ProductController::class, 'index'])->with('sucesso', "Registro salvo!");
        }catch (Exception $e){
            return redirect()->action([ProductController::class, 'index'])->with('erro', "Erro ao salvar registro!");
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
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.show', compact('products','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.edit', compact('products','categories'));
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
        try {
            $product = new Product();
            $data = $request->only($product->getFillable());
            if ($request->hasFile('new_photo')){
                Storage::delete('public/products/'.$data['image']);
                $photo = $product->id.'.'.$request->new_photo->extension();
                $request->new_photo->storeAs('public/products/', $photo);
                $data['image']=$photo;
            }
            Product::whereId($id)->update($data);
            return redirect()->action([ProductController::class, 'index'])->with('sucesso', "Registro salvo!");
        }catch (Exception $e){
            return redirect()->action([ProductController::class, 'index'])->with('erro', "Erro ao salvar registro!");
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
        try {
            $products = Product::findOrFail($id);
            Storage::delete('public/products'.$products->image);
            Product::destroy($id);
            return redirect()->action([ProductController::class, 'index'])->with('sucesso', "Produto Excluído!");
        }catch (Exception $e){
            return redirect()->action([ProductController::class, 'index'])->with('erro',"Erro ao excluir o produto!");
        }
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.delete', compact('products','categories'));
    }

    public function search(Request $request){
        $filter = $request->query('filter');
        $search = $request->query('search');
        $products = Product::where($filter, 'like', '%'.$search.'%')->orderBy($filter)->paginate(5);
        return view('product.index', compact('filter', 'search', 'products'));
    }
}
