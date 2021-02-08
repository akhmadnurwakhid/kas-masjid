<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $table = 'saldo';

    protected $guarded = [];

    public function transaksi()
    {
        return $this->hasOne('App\Transaksi');
    }
}
