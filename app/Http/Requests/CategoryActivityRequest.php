<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryActivityRequest extends FormRequest
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
                    'category_id' => 'required|integer|exists:categories,id',
                    'name' => 'required',
                    'image' => 'required|image|file'
                ];
                break;
            default:
                return [
                    'category_id' => 'required|integer|exists:categories,id',
                    'name' => 'required',
                    'image' => 'image|file'
                ];
                break;
        }
    }
}
