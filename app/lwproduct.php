<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lwproduct extends Model
{
    protected $tabel = 'lwproducts';
     protected $fillable = [
         'motorcycle_title',
         'stock',
         'color',
         'condition',
         'milage',
         'price',
         'motorcycle_image',
         'year'
         ];
}
