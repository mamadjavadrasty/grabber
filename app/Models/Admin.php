<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory;

    /**
     * @var string $guard_name
     */
    protected $guard_name = 'admin';

    /**
     * @var array $fillable
     */

    protected $fillable = ['name', 'email', 'password', 'phone'];

}
