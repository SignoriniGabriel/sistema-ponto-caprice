<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function ExibirProduto($id)
    {
        $product = Product::findOrFail($id);
        return view("catalogo.index",compact('product'));
    }
}
