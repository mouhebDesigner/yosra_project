<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules =  [
            "titre" => "required | string",
            "description" => "required | string",
            "image" => "required | mimes:png,jpg,jpeg",
            "date" => "required",
        ];
        if($this->categorie_id == null){
            $rules['categorie_label'] = "required";
        } else {
            $rules['categorie_id'] = "required";
        }

        return $rules;
    }
}
