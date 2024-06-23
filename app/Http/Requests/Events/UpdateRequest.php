<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string',
            'timeStart'=>'string|nullable',
            'dateStart'=>'date|nullable',
            'timeStop'=>'string|nullable',
            'dateStop'=>'date|nullable',
            'eventLink'=>'string|nullable',
            'rotationTechnique'=>'',
            'warTechnique'=>'nullable',
            'peoplesCars'=>'nullable',
            'medicine'=>'nullable',
            'engeneer'=>'nullable',
            'sqb'=>'nullable',
            'liveCamp'=>'nullable',
            'descriptionShort'=>'string|nullable',
            'script'=>'string|nullable',
            'previewPhoto'=>'file|nullable',
            'organizator_id'=>'nullable|exists:organizers,id',
            'mechanics'=>'array|nullable',
            'mechanics.*'=>'nullable|integer|exists:mechanics,id'


        ];
    }
}
