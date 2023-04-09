<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'comment'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

