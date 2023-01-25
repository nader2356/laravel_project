<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_Commande extends Model
{
    use HasFactory;
    protected $fillable= ['name' ,'quantite', 'prix' ,'id_commande', 'id_produit'];

    public function commande()
    {
        //jointure  
        return $this->belongTo(Commande::class , 'id_commande');
    }

    public function produit()
    {
        //jointure  
        return $this->belongTo(Produit::class , 'id_produit');
    }
}
