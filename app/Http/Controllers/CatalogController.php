<?php
/**
 * @author trungtt
 */

namespace App\Http\Controllers;


use App\Catalog;

class CatalogController extends Controller
{
	public function index() {
		$catalogs = Catalog::all();
		return view("index")->with("catalogs", $catalogs);
	}
}