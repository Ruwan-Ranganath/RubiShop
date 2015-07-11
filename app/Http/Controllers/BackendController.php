<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function AddProduct(){
        return view('Pages.backoffice.dashboard');
    }

    public function NewCategory(){
        return view('Pages.index');
    }

    public function ChangeSlider(){
        return view('Pages.index');
    }
}
