<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelatoriosController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'welcome'])->name('home');
/**/
//Route::get('/home',[SaleController::class, 'home'])->middleware(['auth'])->name('home');


Route::get('/dashboard', function () {
    if (\Illuminate\Support\Facades\Gate::allows('nivel-adm'))
        return view('dashboard');
    else
        abort(403);
    })->middleware(['auth'])->name('dashboard');

Route::get('/pcadm', function () {
    return view('auth/admin');
})->middleware(['auth'])->name('auth/admin');

Route::get('/client', function () {
    return view('auth/client');
})->middleware(['auth'])->name('auth/client');

require __DIR__.'/auth.php';


Route::resources([
    'products' => ProductController::class,
    'suggestions' => SuggestionController::class,
    'inventories' => InventoryController::class,
    'categories' => CategoryController::class,
]);

Route::get('/product/search', [ProductController::class, 'search'])->name('product.search');

Route::get('/product/delete/{id}', [ProductController::class,'delete'])->name('products.delete');

Route::get('/category/search', [CategoryController::class, 'search'])->name('category.search');

Route::get('/category/delete/{id}', [CategoryController::class,'delete'])->name('categories.delete');

Route::get('/inventory/search', [CategoryController::class, 'search'])->name('inventory.search');

Route::get('/inventory/delete/{id}', [CategoryController::class,'delete'])->name('inventories.delete');



Route::get('/sale/', [SaleController::class, 'index'])->name('sale.index');

Route::get('/sale/add/{id}', [SaleController::class, 'add'])->name('sale.add');

Route::get('/sale/remove/{id}',[SaleController::class, 'remove'])->name('sale.remove');

Route::get('/sale/cart/{id}', [SaleController::class, 'cart'])->name('sale.cart');

Route::get('/sale/checkout', [SaleController::class, 'checkout'])->name('sale.checkout');

Route::get('/sale/finish', [SaleController::class, 'finish'])->name('sale.finish');

Route::get('/sale/view', [SaleController::class, 'view'])->name('sale.view');

Route::get('/sale/receive/{id}', [SaleController::class, 'receive'])->name('sale.receive');


Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');

Route::post('/user/update', [UserController::class, 'update'])->name('user.update');


Route::get('/sale/payment', function () {
    return view('sale/payment');
})->middleware(['auth'])->name('sale.payment');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

//Route::get('/registrar', function () {
//    return view('registrar');
//});

Route::get('/relatorios/products', [RelatoriosController::class, 'products'])->name('product_reports');
Route::get('/relatorios/categories', [RelatoriosController::class, 'categories'])->name('category_reports');
Route::get('/relatorios/inventories', [RelatoriosController::class, 'inventories'])->name('inventory_reports');

Route::get('/catalogo/{id}', [\App\Http\Controllers\CatalogoController::class,'ExibirProduto'])->name('catalogo');
