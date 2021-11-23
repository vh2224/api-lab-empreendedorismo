<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadesComplementar extends Model
{
    use HasFactory;

    protected $table = 'atividades_complementares';

    protected $guarded = ['id'];
}
