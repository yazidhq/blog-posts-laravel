<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // this method fillable, rest is notable
    // protected $fillable = ['title', 'excerpt', 'body'];
    // and this method notfillable, rest is fillable
    protected $guarded = ['id'];

    // relation with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relation with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
