<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtcorreo' => 'required|email:rfc,dns' ,
            'txtcontrasña' => 'required|min:3|max:50',
            'txtedad' => 'required|min:3|max:255',
        ];
    }
}
