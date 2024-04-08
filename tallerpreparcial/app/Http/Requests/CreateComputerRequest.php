<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateComputerRequest extends FormRequest
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
            
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'processor' => 'required|string|max:255',
            'ram' => 'required|integer|min:1',
            'storage' => 'required|integer|min:1',
            'description' => 'required|string',
            'date_of_purchase' => 'required|date',
        ];
        
    }
    public function messages()
    {
        return [
            'brand.required' => 'El campo marca es obligatorio.',
            'model.required' => 'El campo modelo es obligatorio.',
            'processor.required' => 'El campo procesador es obligatorio.',
            'ram.required' => 'El campo RAM es obligatorio.',
            'storage.required' => 'El campo almacenamiento es obligatorio.',
            'description.required' => 'El campo descripción es obligatorio.',
            'date_of_purchase.required' => 'El campo fecha de compra es obligatorio.',
        ];
}

}