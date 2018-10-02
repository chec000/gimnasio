<?php namespace Modules\DistributorArea\Http\Controllers;

use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use PageBuilder;
use Request;
use Response;
use View;

class MaquetaDAController extends Controller
{
    public $brand;

    public function __construct()
    {
    $this->brand = 'omnilife';
    }

    public function index()
    {
    return View::make('distributorarea::frontend.index', ['brand' => $this->brand]);
    }

    public function empresario()
    {
        return View::make('distributorarea::frontend.empresario', ['brand' => $this->brand]);
    }

    public function bono()
    {
        return View::make('distributorarea::frontend.bono', ['brand' => $this->brand]);
    }

    public function bonos_detalle()
    {
        return View::make('distributorarea::frontend.bonos_detalle', ['brand' => $this->brand]);
    }

    public function centros_negocio()
    {
        return View::make('distributorarea::frontend.centros_negocio', ['brand' => $this->brand]);
    }

    public function centro_negocio_detalle()
    {
        return View::make('distributorarea::frontend.centro_negocio_detalle', ['brand' => $this->brand]);
    }

    public function eventos()
    {
        return View::make('distributorarea::frontend.eventos', ['brand' => $this->brand]);
    }

    public function eventos_detalle()
    {
        return View::make('distributorarea::frontend.eventos_detalle', ['brand' => $this->brand]);
    }

    public function herramientas()
    {
        return View::make('distributorarea::frontend.herramientas', ['brand' => $this->brand]);
    }

    public function invitar_amigo()
    {
        return View::make('distributorarea::frontend.invitar_amigo', ['brand' => $this->brand]);
    }

    public function noticias_detalle()
    {
        return View::make('distributorarea::frontend.noticias_detalle', ['brand' => $this->brand]);
    }

    public function plan_compensacion()
    {
        return View::make('distributorarea::frontend.plan_compensacion', ['brand' => $this->brand]);
    }

    public function plataforma_aprendizaje()
    {
        return View::make('distributorarea::frontend.plataforma_aprendizaje', ['brand' => $this->brand]);
    }

    public function viajes()
    {
        return View::make('distributorarea::frontend.viajes', ['brand' => $this->brand]);
    }

    public function viajes_detalle()
    {
        return View::make('distributorarea::frontend.viajes_detalle', ['brand' => $this->brand]);
    }

}
