<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PodcastStoreRequest extends FormRequest
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
            'wrapper_type'=>'required|string',
            'kind'=>'required|string',
            'artist_id'=>'nullable|numeric',
            'collection_id'=>'required|numeric',
            'track_id'=>'required|numeric',
            'artist_name'=>'nullable|string',
            'collection_name'=>'required|string',
            'track_name'=>'required|string',
            'collection_censored_name'=>'required|string',
            'track_censored_name'=>'required|string',
            'artist_view_url'=>'nullable|url',
            'collection_view_url'=>'required|url',
            'feed_url'=>'nullable|url',
            'track_view_url'=>'required|url',
            'artwork_url30'=>'required|url',
            'artwork_url60'=>'required|url',
            'artwork_url100'=>'required|url',
            'collection_price'=>'required|numeric',
            'track_price'=>'required|numeric',
            'track_rental_price'=>'required|numeric',
            'collection_hd_price'=>'required|numeric',
            'track_hd_price'=>'required|numeric',
            'track_hd_rental_price'=>'required|numeric',
            'release_date'=>'required|date',
            'collection_explicitness'=>'required|string',
            'track_explicitness'=>'required|string',
            'track_count'=>'required|numeric',
            'country'=>'required|string',
            'currency'=>'required|string',
            'primary_genre_name'=>'nullable|string',
            'content_advisory_rating'=>'nullable|string',
            'artwork_url_600'=>'required|url',
            'genre_ids'=>'required',
            'genres'=>'required',
            'categories'=>'required'
        ];
    }
}
