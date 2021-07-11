<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['titel', 'beschrijving', 'tekst'];

    public function path()
    {
        return route('articles.show', $this);
    }
}
