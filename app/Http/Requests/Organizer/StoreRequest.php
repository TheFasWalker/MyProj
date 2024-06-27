<?php

namespace App\Http\Requests\Organizer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;


class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    // public function prepareForValidation() {
    //     dd($this->all());
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'org_group_name'=>'required|string',
            'org_group_link'=>'string|nullable',
            'org_name'=>'string|nullable',
            'org_link'=>'string|nullable',
            'org_group_photo'=>'file|nullable',
            'description'=>'string|nullable'
        ];
    }



    protected function failedValidation(Validator $validator)
    {

        dd($this->all(),$validator->errors());
    }
}
