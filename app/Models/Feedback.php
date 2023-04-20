<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function getBlogFeedbacks() {
        return DB::select('SELECT * FROM feedback WHERE blog_ID IS NOT NULL ORDER BY created_at DESC');
    }

    public function getProductFeedbacks() {
        return DB::select('SELECT * FROM feedback WHERE product_ID IS NOT NULL ORDER BY created_at DESC');
    }

    public function getFeedbackByID($id) {
        return DB::select('SELECT * FROM feedback WHERE id = ?', [$id]);
    }

    public function deleteFeedbackByID($id) {
        return DB::delete('DELETE FROM feedback WHERE id = ?', [$id]);
    }
}

