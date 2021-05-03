<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordRequest extends FormRequest
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
            $rules = [
                'word' => 'required',
                'picture_name' => 'required',
                'word_time' => 'required|integer',
                'word_score' => 'required|integer',
                'hardness_level' => 'required',
            ];
            return $rules;
    }
}
