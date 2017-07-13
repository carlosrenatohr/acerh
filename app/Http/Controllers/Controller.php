<?php

namespace App\Http\Controllers;

use App\Http\Traits\TemplateTrait;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    protected $model;
    protected $breadcrumbs = ['Inicio' => '/'];
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use TemplateTrait;
}
