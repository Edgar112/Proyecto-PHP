<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\CreateClienteRequest;

class ClienteController extends Controller
{
    public function index_GET() 
    {
        //Obtener listado de clientes
        $clientesDb=Cliente::all();

        //mostrar listado de clientes
        //return $clientesDb;

        return view('clientes.index',compact('clientesDb'));
    }

    public function create_GET() {
        return view('clientes.create');
    }

    public function store_POST(CreateClienteRequest $request) 
    {
        Cliente::create($request->All());
        return redirect('/menu/clientes/index');
    }

    public function edit_GET(Cliente $cliente) 
    {
        return view('clientes.edit',compact('cliente'));
    }

    public function update_PUT(Cliente $cliente, CreateClienteRequest $request)
    {
        $cliente->update($request->All());
        return redirect('/menu/clientes/index');
    }

    public function delete_GET(Cliente $cliente) 
    {
        return view('clientes.delete',compact('cliente'));
    }

    public function destroy_DELETE(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('/menu/clientes/index');
    }
}