<?php

namespace App\Http\Controllers;

use App\Job;
use App\Http\Traits\TemplateTrait;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    use TemplateTrait;
    protected $model;
    protected $bc = ['Vacantes' => '/jobs'];
    public function __construct(Job $job)
    {
        $this->model = $job;
    }

    //
    public function index() {
        $jobs = $this->model->get();

        return view('jobs.index', [
            'jobs' => $jobs,
            'breadcrumbs' => $this->getBreadCrumbs($this->bc, ['Activas' => '-' ])
        ]);
    }
}
