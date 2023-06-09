<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:150|min:3',
            'image' => 'nullable',
            'type_id' => 'nullable',
            'description' => 'nullable',


        ];
    }
    public function messages()
    {
        return [
            'title.required' => "Il campo Title è obbligatorio",
            'title.min' => "Il campo Title deve contenere almeno :min caratteri",
            'title.max' => "Il campo Title deve contenere al massimo :max caratteri",
            'image' => "Il campo Image deve essere un'immagine valida",
            'description' => "Il campo Descriptions deve essere una descrizione valida",

        ];
    }
}
