<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [
    'as' => 'index',
    'uses' => 'IndexController@index'
]);


Route::get('catalog/{id}/products', [
    'as' => 'products',
    'uses' => 'ProductController@indexById'
]);

// Admin

Route::get('/admin', 'admin\AdminController@index');

/**
 * admin brand
 */

Route::get('/admin/brands', [
    'as' => 'admin.brands',
    'uses' => 'BrandController@index'
]);

Route::get('/admin/brands/brand', [
    'as' => 'create.brand',
    'uses' => 'BrandController@create'
]);

Route::post('/admin/brands/brand', [
    'as' => 'store.brand',
    'uses' => 'BrandController@store'
]);

/**
 * admin catalog
 */

Route::get('/admin/catalogs', [
    'as' => 'admin.catalogs',
    'uses' => 'CatalogController@index'
]);

Route::get('/admin/catalogs/catalog', [
    'as' => 'create.catalog',
    'uses' => 'CatalogController@create'
]);

Route::post('/admin/catalogs/catalog', [
    'as' => 'store.catalog',
    'uses' => 'CatalogController@store'
]);

// Load Image
Route::get('images/{filename}', function ($filename)
{
    $path = storage_path() . '/' . $filename;
//	echo $path;
    if(!File::exists($path)) abort(404);

    $file = File::get($path);
//	$type = File::mimeType($path);

    $response = Response::make($file, 200);
//	$response->header("Content-Type", $type);

    return $response;
});