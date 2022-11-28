<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'details',
        'price',
        'description',
        'featured',
        'created_at',
        'updated_at'

    ];

    public function presentPrice()
    {
        return '$'.number_format($this->price / 100, 2);
    }



}

?>
