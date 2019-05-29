<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    protected $table = 'tamanhos';
    protected $fillable = ['tamanho'];
    protected $primaryKey = 'id_tamanho';
    public $timestamps = false;
}
