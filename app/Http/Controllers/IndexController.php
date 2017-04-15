<?php
/**
 * @author trungtt
 */

namespace App\Http\Controllers;


use App\Catalog;
use App\Product;

class IndexController extends Controller
{
	public function index() {
		$catalogs = Catalog::all();
		foreach ($catalogs as $catalog) {
			$catalogId = $catalog -> id;
			$products = Product::where('catalog_id', $catalogId)->inRandomOrder()->get();
			$catalog -> products = $products;
		}

		return view('index')->with("catalogs", $catalogs);
	}
}