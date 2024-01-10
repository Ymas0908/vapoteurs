<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['nom', 'description', 'image', 'prix'];
    public function getPrice()
    {
        $prix = $this->attributes['prix'] / 1000; // Convertit le prix en XOF
        return number_format($prix, 2, ',', ' ') . ' XOF';
    }
}
