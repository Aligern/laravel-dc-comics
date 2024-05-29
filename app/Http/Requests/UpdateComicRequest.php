<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:2',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable|max:255',
            'price' => 'required|numeric|max:50',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:20',
        ];
    }
    
    public function messages() 
    {
        return [
            'title.required ' => 'Il campo title è obbligatorio',
            'title.min' => 'Il campo title deve avere almeno :min caratteri',
            'title.max' => 'Il campo title non deve superare i :max caratteri',
            'description.max' => 'Il campo description non deve superare i :max caratteri',
            'thumb.max' => 'Il campo thumb non deve superare i :max caratteri',
            'price.required' => 'Il campo price è obbligatorio',
            'series.required' => 'Il campo series è obbligatorio',
        ];
    }
}
