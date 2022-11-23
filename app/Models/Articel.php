<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Publish()
    {
        return $this->belongsTo(Publish::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, array $searchs)
    {
        $query->when($searchs['search'] ?? false, function($query, $search){
            return $query->where('title','like', '%' . $search. '%')
                        ->orwhere('body','like', '%' . $search. '%');
        });

        $query->when($searchs['category'] ?? false, function($query, $category){
            return $query->whereHas('Category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }

    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
