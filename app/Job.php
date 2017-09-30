<?php

namespace App;
class Job extends Base
{
    //
    protected $table = 'jobs';
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
