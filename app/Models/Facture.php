<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable= [ 'etat' , 'id_commnade', 'id_client'];

    public function commande()
    {
        //jointure  
        return $this->belongTo(Commande::class, 'id_commande');
    }

    public function client()
    {
        //jointure  
        return $this->belongTo(Client::class , 'id_client');
    }
}
