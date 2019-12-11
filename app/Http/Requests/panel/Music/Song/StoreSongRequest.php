<?php

namespace App\Http\Requests\panel\Music\Song;

use Illuminate\Foundation\Http\FormRequest;

class StoreSongRequest extends FormRequest
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
            'name' => 'required',
            'duration'  => 'required',
            'lyrics'  => 'required',
            'music' => 'required|file|max:100000|min:100',
        ];
    }
}
