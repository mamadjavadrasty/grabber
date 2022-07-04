<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EpisodeRequest extends FormRequest
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
            'episode_file_extension'=>'required|string',
            'episode_content_type'=>'required|string',
            'preview_url'=>'required|url',
            'episode_url'=>'required|url',
            'track_time_millis'=>'nullable|numeric',
            'artist_ids'=>'nullable',
            'closed_captioning'=>'nullable|string',
            'short_description'=>'nullable|string',
            'description'=>'required|string',
            'kind'=>'required|string',
            'artist_id'=>'nullable|numeric',
            'collection_id'=>'required|numeric',
            'track_id'=>'nullable|numeric',
            'artist_name'=>'nullable|string',
            'collection_name'=>'nullable|string',
            'track_name'=>'required|string',
            'artist_view_url'=>'nullable|url',
            'collection_view_url'=>'required|url',
            'feed_url'=>'nullable|url',
            'track_view_url'=>'nullable|url',
            'artwork_url_60'=>'nullable|url',
            'artwork_url_160'=>'required|url',
            'release_date'=>'required|date',
            'country'=>'nullable|string',
            'artwork_url_600'=>'nullable|url',
            'genres'=>'nullable',
            'podcast_id'=>'required|numeric',
            'podcaster_id'=>'required|numeric',
        ];
    }
}
