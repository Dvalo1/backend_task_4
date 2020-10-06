<?php

namespace App\Http\Controllers;

use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
	public function __construct() {
		$this->middleware('CheckUser');
	}
    public function index() {
    	return view("post.index", ["posts"=>Products::get()]);
    	return Products::get();
    }
    public function create() {
    	return view("post.create");
    }
    public function store(Request $request) {
    	Products::create([
    		"title"=>$request->input("title"),
    		"text"=>$request->input("cust_text"),
    		"short_description"=>$request->input("short_desc"),
    	]);
    }
}
