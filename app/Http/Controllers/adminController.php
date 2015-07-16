<?php

namespace App\Http\Controllers;

use App\product;

use App\Http\Requests;

class adminController extends Controller
{
    public function login(){
        return view('backoffice.login');
    }

    public function dashboard(){
        return view('backoffice.cart_dashboard');
    }

    public function add_Product(){
        return view('backoffice.cart_add_Products');
    }

    public function add_Category(){
        return view('backoffice.cart_add_category');
    }

    public function add_slider(){
        return view('backoffice.add_slider');
    }

    public function cart_Settings(){
        return view('backoffice.cart_Settings');
    }

    public function view_product(){
        return view('backoffice.cart_view_products');
    }

    public function view_orders(){
        return view('backoffice.cart_orders');
    }

    public function cart_customers(){
        return view('backoffice.cart_customers');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function product_create(){

//        product::create(Request::all());
//        return redirect('add-product');
        $Product=product::all();
        return $Product;
    }

}
