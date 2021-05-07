<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderValidation extends FormRequest
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
            'product_id' => 'required|exists:skateboards,id',
            'color_id' => 'required|exists:colors,id',
            'amount' => 'required|integer|min:1|max:10',
            'custom_print_photo' => 'image|max:2000',
            'email' => 'required_without:phone|email|max:255',
            'phone' => 'required_without:email|regex:/^\+?[\d\(\)\-+]+$/|max:100|min:3',
            'adress' => 'required|max:255'
        ];
    }
}
