<?php


namespace Modules\Admin\Http\Controllers\gym;

use View;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController as Controller;
use Modules\Admin\Entities\Gym\Venta;
use Auth;
class VentaController  extends Controller
{

    public  function index(){
        
        $ventas= Venta::with('usuario')->with('detalleVenta')->get(); 
        $view = View::make('admin::gym.ventas.listVentas', array('ventas'=>$ventas,
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
        ));
        $this->layoutData['content'] = $view->render();
    }
    
    public function detalleVentaFactura($idVenta){
        
          $venta= Venta::find($idVenta);
    
              $view = View::make('admin::gym.ventas.detalle_venta_factura', array('venta'=>$venta,
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
        ));
              
        $this->layoutData['content'] = $view->render();
    }
    
    public function addVenta(){
                   $view = View::make('admin::gym.ventas.addVenta', array(
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
        ));
              
        $this->layoutData['content'] = $view->render();
    }
            
}
