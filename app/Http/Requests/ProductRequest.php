<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'subcategory_id' => 'required|integer|exists:subcategories,id',
                    'ean' => [
                        'required',
                        //Rule::unique('products')->ignore($this->route('product')),
                    ],
                    'name' => 'required',
                    'price' => 'required|integer',
                    'description' => 'required',
                    'specification' => 'required',
                    'image' => 'image|file'
                ];
                break;
            default:
                return [
                    'subcategory_id' => 'required|integer|exists:subcategories,id',
                    'ean' => [
                        'required',
                        //Rule::unique('products')->ignore($this->route('product')),
                    ],
                    'name' => 'required',
                    'price' => 'required|integer',
                    'description' => 'required',
                    'specification' => 'required'
                ];
                break;
        }
    }
}
