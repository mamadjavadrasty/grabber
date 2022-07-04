<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePodcastRequest extends FormRequest
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
            "id" => ['required'],
            "track_id" => ['required'],
            "collection_view_url" => ['required'],
            "feed_url" => ['required'],
            "track_view_url" => ['required'],
            "artwork_url30" => ['required'],
            "artwork_url60" => ['required'],
            "artwork_url100" => ['required'],
            "category_id" => ['required'],
            "primary_genre_name" => ['required'],
            "track_price" => ['required'],
            "track_rental_price" => ['required'],
            "collection_hd_price" => ['required'],
            "track_hd_price" => ['required'],
            "track_hd_rental_price" => ['required'],
            "release_date" => ['required'],
            "podcast_count" => ['required'],
            "country" => ['required'],
            "currency" => ['required'],
            "content_advisory_rating" => ['required'],
        ];
    }
}
