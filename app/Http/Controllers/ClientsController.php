<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

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
}
