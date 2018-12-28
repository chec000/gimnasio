<?php

namespace Modules\Admin\Http\Controllers\gym;

use Modules\Admin\Http\Controllers\AdminController as Controller;
use Modules\Admin\Http\Controllers\gym\ClienteController;
use Modules\Admin\Http\Controllers\gym\DeporteController;
use Modules\Admin\Entities\Gym\ClienteMembresia;
use Modules\Admin\Entities\Gym\DetalleVenta;
use Modules\Admin\Entities\Gym\Membresia;
use Modules\Admin\Entities\Gym\Articulo;
use Modules\Admin\Entities\Gym\Venta;
use Modules\Admin\Entities\Gym\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
use Auth;

class VentaController extends Controller {

    public function index() {
       
        $ventas = Venta::with('usuario')->with('detalleVenta')->get();
        $view = View::make('admin::gym.ventas.listVentas', array('ventas' => $ventas,
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
        ));
        $this->layoutData['content'] = $view->render();
    }



    public function detalleVentaFactura($idVenta) {
        $venta = Venta::find($idVenta);
        $view = View::make('admin::gym.ventas.detalle_venta_factura', array('venta' => $venta,
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
        ));

        $this->layoutData['content'] = $view->render();
    }

    public function addVenta() {
        $modal = View::make('admin::gym.modals.actualizar_pago_membresia')->render();

        $view = View::make('admin::gym.ventas.addVenta', array(
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
                    'modal' => $modal
        ));
        $this->layoutData['content'] = $view->render();
    }

    public function updateMembresiaClienteVenta(Request $request) {
        try {
            $usr= User::find($request->cliente_id);
        $membresia = Membresia::find($request->membresia_id);
        $date = Carbon::now();
        $actual = $date->format('Y-m-d');
       $venta = new Venta();
        $venta->fecha = $actual;
        $venta->id_cliente = $request->cliente_id;
        $venta->id_empleado = Auth::user()->id;
        $venta->nombre_cliente=$usr->name.' '.$usr->apellido_paterno;
        $venta->tipo_pago = $request->tipo_pago;
        $venta->total = $membresia->precio;
        $venta->estatus = "Renovado";
        $venta->descuento_id = 2;
        $venta->save();
        $resultado=$this->detailShopp($venta, $membresia, $request, $date,$actual);
                 return $resultado;    
        } catch (Exception $ex) {
        return null;    
        }
        return true;
    }
    
    private function detailShopp($venta, $membresia, $request, $fecha,$fecha_actual) {
        $diferencia=0;
        if ($request->tipo_pago == 'pago_efectivo') {
            if (session()->get('portal.main.gym.cliente.total_pagar') >= $request->dinero_cliente) {
                $diferencia = $request->pago_cliente - $venta->total;
            }
        }
        $detalle = new DetalleVenta();
        $detalle->venta_id = $venta->id;
        $detalle->producto_id = $membresia->id;
        $detalle->producto = $membresia->nombre;
        $detalle->cantidad = 1;
        $detalle->subtotal = $membresia->precio;
        $venta->detalleVenta()->save($detalle);
        $cm = ClienteMembresia::find($request->cliente_membresia);
        $cm->cliente_id = $venta->id_cliente;
        $cm->membresia_id = $membresia->id;
        $cm->nombre_membresia = $membresia->nombre;
        $cm->precio = $membresia->precio;
        $cm->compra_id = $venta->id;
        $cm->fecha_compra = $fecha_actual;
        $cm->fecha_proximo_pago = $fecha->addMonth($membresia->duracion_meses);
        $cm->save();        
        $clienteController = new ClienteController();
        $user = User::find($venta->id_cliente);
        $membresias = [];        
        $m=  new Articulo;
        $m->setCantidad(1);
        $m->setDescripcion($membresia->descripcion);
        $m->setNombre($membresia->nombre);        
        $m->setSubtotal($membresia->precio);
        $m->setImagen($membresia->imagen);
        array_push($membresias, $m);
        $ruta = $clienteController->generateReport($membresias, $user, $request->getSchemeAndHttpHost());
        $venta->factura = $ruta['archivo'];
        $venta->save();
        if ($clienteController->sendEmailFill($membresias, $user, "Recibo de pago", $ruta['archivoEmail'])) {
           $this->addAlert('success', 'Compra finalizada con exito');
            return array(
                "data" => "Compra finalizada con exito",
                'code' => 200,
                'total'=>$venta->total,
                'diferencia'=>$diferencia
            );
            }else{
                      $this->addAlert('success', 'Compra finalizada con exito');
                return array(
                "data" => "Existio un error al finalizar la compra",
                'code' => 500,
            );
                }
        
    }

    public function checkoutVentaMembresia(){
         if (session()->has('portal.main.gym.cliente.membresias')) {
                $mc= new ClienteController();
              $articulos = $mc->buidCheckout( session()->get('portal.main.gym.cliente.membresias'), 2);
              $total=$mc->total_pagar; 
               $confirmacion_modal = View::make('admin::gym.modals.confirmar_pago_modal')->render();
                 $view = View::make('admin::gym.ventas.detalle_venta', array(
                  'membresias'=>$articulos,
                  'total'=>$total,
                   'modal'=>$confirmacion_modal                         
        ));     
        $this->layoutData['content'] = $view->render();
         }else{             
             return redirect()->route('admin.venta.venta');
         }
    }


    public function shoppMembresia($idCliente){
   $mc= new ClienteController();
    $membresias=$mc->listMembresias();   
        $modal = View::make('admin::gym.modals.actualizar_pago_membresia')->render();    
        $view = View::make('admin::gym.ventas.venta_cliente_membresia', array(
                    'membresias'=>$membresias,
                    'modal' => $modal,
                    'cliente_id'=>$idCliente,
             "venta_aside" => $mc->getCarrito()
        ));
        
        $this->layoutData['content'] = $view->render();
           
    }    
    public function shoppActividad($idCliente){
//        $modal = View::make('admin::gym.modals.actualizar_pago_membresia')->render();
       $dc= new DeporteController();       
       $mc= new ClienteController();
         $list_deportes=     View::make('admin::gym.deporte.list_item_deporte',array('deportes'=>$dc->getListDeportes()))->render();     
         $view = View::make('admin::gym.ventas.venta_evento', array(            
           'actividades'=>$list_deportes,
            'venta_aside' => $mc->getCarrito(),
            'cliente_id'=>$idCliente

        ));
        $this->layoutData['content'] = $view->render();                   
    }
    
    }
