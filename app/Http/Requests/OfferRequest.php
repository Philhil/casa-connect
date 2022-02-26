<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'title' => 'required|string|min:3',
            'postcode' => 'required|regex:/^\d{5}(?:-\d{4})?$/',
            'country' => 'required|string|max:200',
            'amount' => 'required|integer',
            'description' => 'required'
        ];
    }
}
