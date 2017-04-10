<?php
/**
 * @author trungtt
 */

namespace App\Http\Controllers;


use App\Brand;
use App\Http\Requests\BrandFormRequest;
use Illuminate\Contracts\Validation\Validator;

class BrandController extends Controller
{
    public function index() {
    	$brands = Brand::all();
    	return view("admin.brand.index")->with("brands", $brands);
	}

	public function create() {
		return view('admin.brand.create');
    }

    public function store(BrandFormRequest $request) {
    	$brand = new Brand();
    	$brand->name = $request->name;
		$brand -> save();
		return redirect() -> route("admin.brands");
	}

	public function checkExist($name, $validator) {
        if ($name.equalTo("a")) {
            $validator->errors()->add('name', 'Something is wrong with this field!');
        }

    }
}