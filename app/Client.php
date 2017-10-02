<?php

namespace App;

class Client extends Base
{
    //
    protected $table = 'clients';
    protected $guarded = [];

    public function jobs() {
        return $this->hasMany(Job::class, 'client_id', 'id');
    }
}
