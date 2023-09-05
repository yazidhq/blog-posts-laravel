<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // this method fillable, rest is notable
    // protected $fillable = ['title', 'excerpt', 'body'];
    // and this method notfillable, rest is fillable
    protected $guarded = ['id'];
    // 'with' for solve n+1 problem
    protected $with = ['category', 'user'];

    // filter for searching
    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query
        //         ->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // condition method in laravel
        // null coalescing operator php
        // search all post
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        // search from category
        $query->when($filters['category'] ?? false, function ($query, $search) {
            // join table post and category for search category
            return $query
                ->whereHas('category', function ($query) use ($search) {
                    $query
                        ->where('slug', $search);
                });
        });

        // search from user :: arrow function
        $query->when(
            $filters['user'] ?? false,
            fn ($query, $search) =>
            $query->whereHas(
                'user',
                fn ($query) => $query
                    ->where('username', $search)
            )
        );
    }

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

    // create default otomatis route with slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    // automatic creating slug from title with cviebrock
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
