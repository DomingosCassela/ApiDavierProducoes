<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelos extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome',
        'altura',
        'manequim',
        'busto',
        'cintura',
        'quadril',
        'cor_dos_olhos',
        'cor_do_cabelo',
        'calcado',
        'cidade',
        'categoria',
        'seccao',
        'genero'
        ];
}
