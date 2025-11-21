<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TacheRequest extends FormRequest
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
            'titre' => ['string', 'max:200', 'required'],
            'description' => ['string', 'max:500', 'required']
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'titre.required' => 'Remplissez bien tous les champs.',
    //         'titre.string' => 'Remplissez bien tous les champs.',
    //         'description.required' => 'Remplissez bien tous les champs.',
    //         'description.string' => 'Remplissez bien tous les champs.',
    //     ];
    // }
}
