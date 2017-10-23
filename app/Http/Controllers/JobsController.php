<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsForm;
use App\Job;

class JobsController extends Controller
{
    protected $model;
    protected $bc = ['Vacantes' => '/jobs'];

    /**
     * JobsController constructor.
     * @param Job $job
     */
    public function __construct(Job $job)
    {
        $this->model = $job;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $jobs = $this->model->load('client')->paginate(15);

        /**
         *
         */
        return view(
            'jobs.index',
            [
                'jobs' => $jobs,
                'breadcrumbs' => $this->getBreadCrumbs($this->bc, ['Activas' => '-'])
            ]
        );
    }

    /**
     * @return mixed
     */
    public function create()
    {
        $breadcrumbs = $this->getBreadCrumbs($this->bc, ['Activas' => '-']);

        return view('jobs.create', compact('breadcrumbs'));
    }

    /**
     * @param JobsForm $request
     * @return mixed
     */
    public function store(JobsForm $request)
    {
        $input = array_except($request->all(), ['_token']);
        $created = $this->model->create($input);

        if ($created) {
            return redirect('jobs')->with('success', 'Tu vacante fue agregada a la lista de activas.');
        } else {
            return redirect()->withInput($input)->with('error', 'It was not possible to create the new job.');
        }
    }

    /**
     * @param $client
     * @param $id
     * @return mixed
     */
    public function edit($client, $id)
    {
        $job = $this->model->find( $id);

        return view('jobs.edit', compact('job'));
    }

    /**
     * @param $id
     * @param JobsForm $request
     * @return mixed
     */
    public function update($id, JobsForm $request)
    {
        $job = $this->model->find($id);
        $input = array_except($request->all(), ['_token']);
        $updated = $job->update($input);

        if ($updated) {
            return redirect('jobs')->with('success', 'Tu vacante fue actualizada.');
        } else {
            return redirect()->withInput($input)->with('error', 'It was not possible to update the job.');
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        $job = $this->model->find($id);

        if ($job) {
            $job->delete();
            return redirect('jobs')->with('success', 'Tu vacante fue eliminado.');
        } else {
            return redirect('jobs')->with('error', 'Ocurrio un error tratando de eliminar esta vacante.');
        }
    }
}
