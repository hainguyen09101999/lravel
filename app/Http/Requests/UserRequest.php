<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|unique:users',
            'password' => 'required',
            'name'=> 'required|unique:users',
        ];
    }
    public function messages():array
    {
        return[

            'email.required'=> 'Vui lòng điền Email',
            'email.unique'=>"$this->email đã tồn tại",
            'password.required'=> 'Vui lòng điền Password',
            'name.required'=> 'Vui lòng điền Tên người dùng',
            'name.unique'=>"$this->name đã tồn tại",
        ];
        
    }
}
