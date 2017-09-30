<?php
/**
 * Created by PhpStorm.
 * User: carlosrenato
 * Date: 09-30-17
 * Time: 03:33 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{

    public function getCreatedAttribute() {
        return date('d-m-Y h:iA', strtotime($this->created_at));
    }
}