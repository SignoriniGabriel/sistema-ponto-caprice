<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use PDF;

class RelatoriosController extends Controller
{
    public function products()
    {
        $products = Product::all();
        $pdf = PDF::loadView('relatorios.products', compact('products'));
        return $pdf->stream();
        //return $pdf->download('nome_documento.pdf');
    }
    public function categories()
    {
        $categories = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->selectRaw('count(products.id) as quantity, categories.name, categories.id')
            ->groupBy('categories.id', 'categories.name')
            ->get();

        $pdf = PDF::loadView('relatorios.categories', compact('categories'));
        return $pdf->stream();
    }
    public function inventories()
    {
        $inventories = DB::table('inventories')
            ->join('products', 'inventories.product_id', '=', 'products.id')
            ->select('inventories.*', 'products.*')
            ->get();

        $pdf = PDF::loadView('relatorios.inventories', compact('inventories'));
        return $pdf->stream();
    }
}
