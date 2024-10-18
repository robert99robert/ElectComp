<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlmacenarDevice extends FormRequest
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
        return 
            [
                'tipo' => ['required', 'alpha:ascii', 'max:50'],
                'marca' => ['required', 'alpha:ascii', 'max:50'],
                'modelo' => ['required', 'string', 'max:50'],
                'potencia_Kw' => ['required', 'integer', 'max:999'],
            ]
        ;
    }

    public function messages(): array
    {
        return [
            'tipo.required' => 'El tipo es obligatorio'
        ];
    }
}
