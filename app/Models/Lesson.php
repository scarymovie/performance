<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' => 'string',
        'description' => 'string',
        'comment' => 'string',
        'rang' => 'int',
    ];

    public function part()
    {
        return $this->hasMany(Part::class);
    }
}
