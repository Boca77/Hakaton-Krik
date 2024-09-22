<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function favouritedBy()
{
    return $this->belongsToMany(User::class, 'favourites');
}


    protected $fillable = ['name', 'description', 'price', 'image', 'image2', 'image3', 'image4'];
}
