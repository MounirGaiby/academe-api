<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ];

        if ($this->role === 'student') {
            $rules['major'] = 'required|string|max:255';
            $rules['graduation_year'] = 'required|integer|min:2000|max:2100';
        }

        return $rules;
    }
}
