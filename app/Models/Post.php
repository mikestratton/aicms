<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function Category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function Subject(): HasOne
    {
        return $this->hasOne(Subject::class);
    }
}
