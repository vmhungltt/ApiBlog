<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footer';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'meta_title',
        'slug',
        'content',
        'created_at',
        'updated_at'
    ];
}
