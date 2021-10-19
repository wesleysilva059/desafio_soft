<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Book extends Model
{

    public $table = 'books';

    protected $dates = [
        'created_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'author',
        'number_page',
        'created_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
