<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                 'name'=>'required|unique:products',
                 'price'=>'required',
                 'photo'=>'required',
        ];
    }

    public function messages():array
    {
        return[

            'name.required'=> 'Vui lòng điền tên sản phẩm',
            'name.unique'=>"$this->name đã tồn tại",
            'price.required'=> 'Vui lòng điền giá sản phẩm',
            'photo.required'=> 'Vui lòng Chọn ảnh sản phẩm',
          
        ];
        
    }
}
