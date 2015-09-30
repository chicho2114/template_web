<?php

namespace Tienda\Http\Requests;

use Tienda\Http\Requests\Request;

class UserUpdateRequest extends Request
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
            'name' => 'required',
            'apellido' => 'required',
            'email'  => 'required|email',
            'password'   => 'required|min:8',
        ];
    }
}