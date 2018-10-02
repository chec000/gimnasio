<?php

namespace Modules\DistributorArea\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Helpers\SoapWrapper;

class NfuerzaController extends Controller
{
    public function index(){
        echo "<a href='".url('nfuerza/products')."'>Productos NFuerza</a>";
        dd('MARCA: NFUERZA');
    }

    public function products(){
        dd('Estoy en la marca de Nfuerza en la ruta /products');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('distributorarea::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('distributorarea::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('distributorarea::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
