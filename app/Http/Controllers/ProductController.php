<?php
/**
 * @author trungtt
 */

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
	public function indexById($_id) {
		$products = Product::where('catalog_id', $_id)->get();
		return view("product.index")->with("products", $products);
	}
}