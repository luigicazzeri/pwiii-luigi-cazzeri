<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = 'Cadastro';

    protected $fillable = ['id', 'nome', 'sobrenome'];

    public $timestamps = false;
}
