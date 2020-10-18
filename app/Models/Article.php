<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'detail',
        'thumbnail',
        'status',
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
