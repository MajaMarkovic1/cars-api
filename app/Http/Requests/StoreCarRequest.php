<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
        return [
            'brand' => 'required|min:2|max:255',
            'model' => 'required|min:2|max:255',
            'year' => 'required',
            'maxSpeed' => 'integer|between:20,300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numberOfDoors' => 'required|integer|between:2,5'
        ];
    }
}
