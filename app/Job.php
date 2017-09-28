<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = 'jobs';
    protected $guarded = [];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
