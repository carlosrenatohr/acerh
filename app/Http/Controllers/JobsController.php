<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsForm;
use App\Job;

class JobsController extends Controller
{
    protected $model;
    protected $bc = ['Vacantes' => '/jobs'];

    public function __construct(Job $job)
    {
        $this->model = $job;
    }

    //
    public function index()
    {
        $jobs = $this->model->load('client')->paginate(15);
        return view(
            'jobs.index',
            [
                'jobs' => $jobs,
                'breadcrumbs' => $this->getBreadCrumbs($this->bc, ['Activas' => '-'])
            ]
        );
    }

    public function create()
    {
        $breadcrumbs = $this->getBreadCrumbs($this->bc, ['Activas' => '-']);
        return view('jobs.create', compact('breadcrumbs'));
    }

    public function store(JobsForm $request)
    {
        $input = array_except($request->all(), ['_token']);
        $created = $this->model->create($input);

        if ($created) {
            return redirect('jobs')->with('success', 'Tu vacante fue agregada a la lista de activas.');
        }

        return redirect()->withInput($input)->with('error', 'It was not possible to create the new job.');
    }

    public function edit($client, $id)
    {
        $job = $this->model->find( $id);

        return view('jobs.edit', compact('job'));
    }

    public function update($id, JobsForm $request)
    {
        $job = $this->model->find($id);
        $input = array_except($request->all(), ['_token']);
        $updated = $job->update($input);

        if ($updated) {
            return redirect('jobs')->with('success', 'Tu vacante fue actualizada.');
        }

        return redirect()->withInput($input)->with('error', 'It was not possible to update the job.');
    }

    public function delete($id)
    {
        $job = $this->model->find($id);

        if ($job) {
            $job->delete();
            return redirect('jobs')->with('success', 'Tu vacante fue eliminado.');
        }

        return redirect('jobs')->with('error', 'Ocurrio un error tratando de eliminar esta vacante.');
    }


}
