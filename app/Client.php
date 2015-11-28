<?php

namespace Scar;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    public function orders()
    {
        return $this->hasMany(Order::class, 'client_id');
    }
}
