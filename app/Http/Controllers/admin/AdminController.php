<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{
	public function index() {
		return view("admin.brand.index");
	}
}