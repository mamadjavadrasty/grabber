<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastCategory extends Model
{
    use HasFactory;
    
    protected $table = 'podcast_category';

    protected $fillable = [
        'podcast_id' ,
        'category_id'
    ];
}
