<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorlibro extends FormRequest
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
            'txtISBN' => 'required|numeric|digits:13',
            'txtTitulo' => 'required|min:5|max:150',
            'txtAutor' => 'required|min:5|max:70',
            'txtPaginas' => 'required|numeric' ,
            'txtAño' => 'required|numeric|',
            'txteditorial' => 'required|min:3|max:255',
            'txtemail' => 'required|email:rfc,dns',
            
        ];
    }
}
