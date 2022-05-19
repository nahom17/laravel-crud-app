<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentStoreRequest extends FormRequest
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
            'FirstName' => 'required|unique:students|max:10',
            'LastName' => 'required|unique:students|max:15',
            'BirthDate' => 'required|date',
            'Address' => 'required',
            'HouseNumber' => 'required',
            'Postcode' => 'required',
            'City' => 'required',
            'Mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Email' => 'required|email|unique:students',
        ];
    }
}
