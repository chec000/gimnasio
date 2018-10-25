<?php

namespace Modules\Admin\Http\Controllers\gym;

use View;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController as Controller;
use Modules\Admin\Entities\Gym\Venta;
use Modules\Admin\Entities\Gym\DetalleVenta;
use Modules\Admin\Http\Controllers\gym\ClienteController;
use Modules\Admin\Entities\Gym\User;
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
            'modal'=>$modal
        ));
        $this->layoutData['content'] = $view->render();
    }

    public function updateMembresiaCliente(Request $request) {
        $date = new \DateTime();
        $venta = new Venta();
        $venta->fecha = $date;
        $venta->id_cliente = $request->id;
        $venta->id_empleado = 1;
        $venta->tipo_pago = $request->tipo_pago;
        $venta->total = $request->total;
        $venta->estatus = "Actualizado";
        $venta->descuento_id = 2;
        $venta->save();

        $detalle = new DetalleVenta();
        $detalle->venta_id = $venta->id;
        $detalle->producto_id = $request->product_id;
        $detalle->producto = $request->nombre_producto;
        $detalle->cantidad = 1;
        $detalle->subtotal = $request->subtotal_producto;
        $venta->detalleVenta()->save($detalle);

        $clienteController = new ClienteController();
      $user= User::find($request->id);
        $ruta = $clienteController->generateReport($request->membresias, $user->usuario, $request->getSchemeAndHttpHost());
        $venta->factura = $ruta['archivo'];
        $venta->save();
    }

}
