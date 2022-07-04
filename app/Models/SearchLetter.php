<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchLetter extends Model
{
    use HasFactory;

    protected $fillable = [
        'language' ,
        'current_letter',
        'current_page'
    ];
}
