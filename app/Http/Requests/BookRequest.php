<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [ 
            "title" => "required|string",
            "author" => "required|string",
            "pages" => "required|numeric",
            "year" => "required|numeric",
        ];
    }

    public function message(){
        return [
            'title.required'=>"Il titolo è obbligatorio",
            'title.string'=>"Il titolo deve essere di tipo stringa",
            'author.required'=>"L'autore è obbligatorio",
            'author.string'=>"L'autore deve essere di tipo stringa",
            'pages.required'=>"Il numero di pagine è obbligatorio",
            'pages.numeric'=>"Il numero di pagine deve essere di tipo numerico",
            'year.required'=>"L'anno di pubblicazione è obbligatorio",
            'year.numeric'=>"L'anno di pubblicazione deve essere di tipo numerico",
            'image'=>'mimes:jpg,bmp,jpeg,webp',
        ];
    }
}
