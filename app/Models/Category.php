<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Articel()
    {
        return $this->hasMany(Articel::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
