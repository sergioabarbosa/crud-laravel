<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelAddress extends Model
{
    protected $table='address';
    public function relUsers()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
