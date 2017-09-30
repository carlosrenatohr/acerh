<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientsForm;


class ClientsController extends Controller
{
    //
    protected $bc = ['Clientes' => '/clients'];
    public function __construct(Client $client)
    {
        $this->model = $client;
    }

    public function index() {
        return view('clients.index', [
            'clients' => Client::all(),
            'breadcrumbs' => $this->getBreadCrumbs($this->bc)
        ]);
    }



    public function create()
    {
        $breadcrumbs = $this->getBreadCrumbs($this->bc, ['Activas' => '-']);
        return view('clients.create');
    }

    public function store(ClientsForm $request)
    {
        $input = array_except($request->all(), ['_token']);
        $input['slug'] = $this->slugify($input['name']);
        $created = $this->model->create($input);
        if ($created) {
            return redirect('clients')->with('success', 'Tu cliente fue agregada a la lista de activas.');
        } else {
            return redirect()->withInput($input)->with('error', 'It was not possible to create the new client.');
        }
    }

    public function edit($id)
    {
        $client = $this->model->find( $id);
        return view('clients.edit', compact('client'));
    }

    public function update($id, ClientsForm $request)
    {
        $client = $this->model->find($id);
        $input = array_except($request->all(), ['_token']);
        $input['slug'] = $this->slugify($input['name']);
        $updated = $client->update($input);
        if ($updated) {
            return redirect('clients')->with('success', 'Tu cliente fue actualizada.');
        } else {
            return redirect()->withInput($input)->with('error', 'It was not possible to update the client.');
        }
    }

    public function delete($id) {
        $client = $this->model->find($id);
        if ($client) {
            $client->delete();
            return redirect('clients')->with('success', 'El cliente fue eliminado.');
        } else {
            return redirect('clients')->with('error', 'Ocurrio un error tratando de eliminar esta cliente.');
        }
    }
}
