<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            "name"=>"required|string",
            "surname"=>"required|string",
        ];
    }

    public function message()
    {
        return [
            "name.required"=>"Il nome è obbligatorio",
            "name.string"=>"Il nome deve essere di tipo stringa",
            "surname.required"=>"Il cognome è obbligatorio",
            "surname.string"=>"Il cognome deve essere di tipo stringa",
        ];
    }
}
