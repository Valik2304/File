<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadPhotoReques extends FormRequest
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
            'name_file' => 'required|file|max:10000,mimes:csv'
        ];
    }
    public function messages()
    {
        return [
            'name_file.required' => 'You haven\'t choose a photo.',
            'name_file.max' => 'Your photo is too large, must be less than :max kb.',
            'name_file.mimes' => 'We only accept :values.',
        ];
    }
}
