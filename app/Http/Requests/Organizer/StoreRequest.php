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
            'orgGroupName'=>'required|string',
            'orgGroupLink'=>'string|nullable',
            'orgName'=>'string|nullable',
            'orgLink'=>'string|nullable',
            'orgphoto'=>'string|nullable',
            'rotationTechnique'=>'nullable',
            'warTechnique'=>'nullable',
            'peoplesCars'=>'nullable',
            'medicine'=>'nullable',
            'engeneer'=>'nullable',
            'description'=>'longText|nullable'
        ];
    }



    protected function failedValidation(Validator $validator)
    {

        dd($this->all(),$validator->errors());
    }
}
