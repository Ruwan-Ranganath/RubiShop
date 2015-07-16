<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name'=>'required',
            'product_description'=>'required',
            'price'=>'required',
            'promo_price'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
        ];
    }
}
