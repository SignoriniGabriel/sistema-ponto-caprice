<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name')->paginate(5);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            $category = new Category();
            $data = $request->only($category->getFillable());
            $category = Category::create($data);
            $photo = $category->id.'.'.$request->image->extension();
            $request->image->storeAs('public/categories/', $photo);
            $category->image = $photo;
            $data = $category->only($category->getFillable());
            Category::whereId($category->id)->update($data);
            return redirect()->
            action([CategoryController::class, 'index'])->with('sucesso', 'Registro salvo com sucesso!');
        } catch (Exception $e){
            return redirect()->
            action([CategoryController::class, 'index'])->with('erro', 'Erro ao salvar o registro!');
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
        $category = Category::findOrFail($id);
        $quantity = Product::where('category_id', $id)->count();
        return view('categories.show', compact('category', 'quantity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
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
            $category = new Category();
            $data = $request->only($category->getFillable());
            if ($request->hasFile('new_photo')){
                Storage::delete('public/categories/'.$data['image']);
                $photo = $category->id.'.'.$request->new_photo->extension();
                $request->new_photo->storeAs('public/categories/', $photo);
                $data['image']=$photo;
            }
            Category::whereId($id)->update($data);
            return redirect()->action([CategoryController::class, 'index'])->
            with('sucesso', 'Registro alterado!');
        } catch(\Exception $e){
            return redirect()->action([CategoryController::class, 'index'])->
            with('erro', 'Não foi possível alterar o registro!');
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
            Category::destroy($id);
            return redirect()->action([CategoryController::class, 'index'])->with('sucesso', 'Registro excluído!');
        } catch (\Exception $e){
            return redirect()->action([CategoryController::class, 'index'])->with('erro', 'Não foi possível excluir o registro!');
        }
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        return view('categories.delete', compact('category'));
    }

    public function search(Request $request){
        $filter = $request->query('filter');
        $search = $request->query('search');
        $categories = Category::where($filter, 'like', '%'.$search.'%')->orderBy($filter)->paginate(5);
        return view('categories.index', compact('categories','filter','search'));
    }
}
