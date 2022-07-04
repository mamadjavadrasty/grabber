<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PodcasterRequest extends FormRequest
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
            'wrapper_type'=>'nullable|string',
            'artist_type'=>'nullable|string',
            'artist_id'=>'nullable|numeric',
            'artist_name'=>'nullable|string',
            'artist_link_url'=>'nullable|url',
            'artwork_url30'=>'required|url',
            'artwork_url60'=>'required|url',
            'artwork_url100'=>'required|url',
            'primary_genre_name'=>'nullable|string',
            'artwork_url_600'=>'required|url',
            'primary_genre_id'=>'nullable',
        ];
    }
}
