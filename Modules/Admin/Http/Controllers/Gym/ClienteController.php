<?php

namespace Modules\Admin\Http\Controllers\gym;

use Illuminate\Http\Request;
use App\User;
use View;
use Modules\Admin\Entities\Gym\UsuarioCliente;
use Modules\Admin\Entities\Gym\Pais;
use Modules\Admin\Entities\Gym\Membresia;
use Modules\Admin\Http\Controllers\gym\Auth\RegisterController;
use Modules\Admin\Http\Controllers\AdminController as Controller;
use Modules\Admin\Http\Controllers\gym\GymController;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Modules\CMS\Libraries\Builder\FormMessage;
use Illuminate\Support\Facades\Mail;
use Modules\Admin\Entities\Gym\Articulo;
use Validator;
use Auth;

class ClienteController extends Controller {
public $total_pagar;
    public function index() {

        $clientes = $this->getClientes();
        $view = View::make('admin::gym.cliente.listClientes', array('clientes' => $clientes,
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
        ));
        $this->layoutData['content'] = $view->render();
    }

    public function getClientes() {
        $cliente = UsuarioCliente::with('usuario')->get();

        return $cliente;
    }

    public function saveMembresia(Request $request) {

        $membresia_existente = $this->verificarMembresia($request->id_membresia);
        if ($membresia_existente == null) {
            $membresia = Membresia::find($request->id_membresia);
            $membresia['cantidad'] = $request->cantidad;
            $membresia['subtotal'] = $request->cantidad * $membresia->precio;
              $this->total_pagar=$this->total_pagar+ $membresia['subtotal'];
            session()->push('portal.main.gym.cliente.membresias', $membresia);
           $this->cotizarMembresia();
            $view = View::make('admin::gym.ventas.add_membresia', array("membresia" => $membresia))->render();
            $array = array(
                "data" => $view,
                "code" => 100
            );
            return $array;
        } else {
            $cantidad = $membresia_existente['cantidad'] + $request->cantidad;
            $subtotal = $membresia_existente['cantidad'] * $membresia_existente['precio'];
            $this->total_pagar=$subtotal;
            $index = $this->getIndex($membresia_existente->id);
            $this->updateMembresiaSession($subtotal, $index, $cantidad);
            return $membresia_existente;
        }
    }

    private function updateMembresiaSession($subtotal, $index, $cantidad) {        
        session()->get('portal.main.gym.cliente.membresias')[$index]->cantidad = $cantidad;
        session()->get('portal.main.gym.cliente.membresias')[$index]->subtotal = $subtotal;
    }

    private function getIndex($id) {
        $membresias = session()->get('portal.main.gym.cliente.membresias');
        if ($membresias != null) {
            foreach ($membresias as $key => $m) {
                if ($m->id == $id) {
                    return $key;
                }
            }
        }
        return null;
    }

    public function addMembresiaCliente(Request $request) {

        $membresia_existente = $this->verificarMembresia($request->id_membresia);
        if ($membresia_existente != null) {

            $index = $this->getIndex($membresia_existente->id);
            if ($request->tipo == 1) {
                $cantidad = $membresia_existente['cantidad'] + 1;
                $subtotal = $cantidad * $membresia_existente['precio'];
                $index = $this->getIndex($membresia_existente->id);
                    $this->total_pagar= $this->total_pagar+$membresia_existente['precio'];                    
                $this->updateMembresiaSession($subtotal, $index, $cantidad);
            } else {
                $cantidad = $membresia_existente['cantidad'] - 1;
                $subtotal = $cantidad * $membresia_existente['precio'];
                $this->total_pagar= $this->total_pagar+$membresia_existente['precio'];
                $index = $this->getIndex($membresia_existente->id);
                $this->updateMembresiaSession($subtotal, $index, $cantidad);
            }
        }

        $this->cotizarMembresia();
        return array(
            'subtotal'=>$subtotal,
            'cantidad'=>$cantidad,
            'total_pagar'=>session()->get('portal.main.gym.cliente.total_pagar')
        );
    }

    public function cotizarMembresia() {
        $total = 0;
        $membresias = session()->get('portal.main.gym.cliente.membresias');
       if($membresias!=null){
           foreach ($membresias as $m) {
            $total = $total + $m->subtotal;
        }
        session()->put('portal.main.gym.cliente.total_pagar', $total);
       }
        
    }

    private function verificarMembresia($id_membresia) {

        $membresias = session()->get('portal.main.gym.cliente.membresias');
        if ($membresias != null) {
            foreach ($membresias as $m) {
                if ($m->id == $id_membresia) {
                    return $m;
                }
            }
        }

        return null;
    }
    public function getSendMail()
    {
        $code       = Session::get('portal.register_customer.code');
        $customer   = Session::get('portal.register_customer.data');
        $emailsSend = Config::get('cms.email_send');
        $emailSend  = $emailsSend[Session::get('portal.main.country_corbiz')];

        Mail::send('shopping::frontend.customer.mails.code', ['customer' => $customer, 'code' => $code], function($m) use ($customer, $emailSend) {
            $m->from($emailSend, trans('shopping::register_customer.mail_address.title'));
            $m->to($customer['email'], $customer['name'] . ' ' . $customer['lastname'])->subject(trans('shopping::register_customer.mail_address.subject'));
        });

        return response()->json([
            'success'   => true,
        ]);
    }
    
     public function sendEmailReminder($membresias)
    {
        $user = \Modules\Admin\Entities\Gym\User::find(5);
    
             $articulos= $this->buidCheckout($membresias,1);                                       
        try {      
               Mail::send('admin::gym.emails.registro', ['user' => $user,"membresias"=>$articulos,'total'=> 0], function ($m) use ($user) {
            $m->from('sergiogalindo2010@hotmail.com', 'gym');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
        } catch (Exception $ex) {
            dd($ex);
        } 
        
     
    }

    
    public function detalleVenta() {
        
         $membresias = session()->get('portal.main.gym.cliente.membresias');                
//          $view = View::make('admin::gym.ventas.detalle_venta',["membresias"=>$membresias]);
       
         $this->sendEmailReminder($membresias);

          
//        $this->layoutData['content'] = $this->getDetalleVenta();
    }

    public function getDetalleVenta(){
         $membresias = session()->get('portal.main.gym.cliente.membresias');     
        $articulos= $this->buidCheckout($membresias,1);                           
         
          $view = View::make('admin::gym.ventas.detalle_venta',["membresias"=>$articulos,"total"=>$this->total_pagar]);
   return $view->render();      
    }
    
    private function buidCheckout($membresias,$tipo){
    $articulos= [];
        if($tipo==1){
            $articulo=new Articulo();
            $articulo->setCantidad(1);
            $articulo->setDescripcion("Inscripcion a gimansio");
            $articulo->setId(0);
            $articulo->setNombre("Inscripcion");
            $articulo->setPrecio(12);
            $articulo->setSubtotal(12);
            $articulo->setTipo(0);
            $this->total_pagar= $this->total_pagar+$articulo->getPrecio();
            $articulo->setImagen("http://www.congresouniversidad.cu/sites/default/files/bloques/inscripcion.png");
            array_push($articulos, $articulo);
        }
        foreach ($membresias as $m){                 
             $articulo=new Articulo();
            $articulo->setNombre($m->nombre);
            $articulo->setDescripcion($m->descripcion);
            $articulo->setId($m->id);
            $articulo->setPrecio($m->precio);     
            $articulo->setSubtotal($m->subtotal);
            $articulo->setCantidad($m->cantidad);
            $articulo->setImagen($m->imagen);
            $articulo->setTipo($m->tipo_id);
            $this->total_pagar= $this->total_pagar+$articulo->getSubtotal();
            array_push($articulos, $articulo);           
        }
return $articulos;
        
    }
    
    
    
    public function generateReport() {
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
         * */
        $directorio = public_path() . '\uploads\facturas';

        if (file_exists($directorio)) {
            $date = new \DateTime();
            $pdf = PDF::loadView('admin::gym.ventas.factura_venta', ['date' => $date->format('d-M-Y')]);

            file_put_contents($directorio . '/' . "archivo.pdf", $pdf->stream());
        } else {
            mkdir($directorio, 7777, true);
            $pdf = PDF::loadView('admin::gym.ventas.factura_venta', ['date' => $date->format('d-M-Y')]);
            file_put_contents($directorio . "archivo.pdf", $pdf->stream());
        }

        return $pdf->download('listado.pdf');
    }

    public function getClientesAtrasados() {
        $cliente = UsuarioCliente::where([['activo', '=', 1], ['estado_cliente', '=', 'Atrasado']])->get();
        return $cliente;
    }

    private function getUsers() {
        $clientes = User::where('activo', '=', 1)->get();
        return $clientes;
    }

    public function  getCheckout(){
    $view = View::make('admin::gym.ventas.detalle_venta',["membresias"=>session()->get('portal.main.gym.cliente.membresias')]);
     return $view->render();
    }   


    public function addClienteGet() {

        $cliente = session()->get('portal.main.gym.cliente');
        $paises = Pais::where('activo', '=', 1)->get();
        $membresias = Membresia::where('activo', '=', 1)->get();
         $membresias_view="";
         
        if(session()->has('portal.main.gym.cliente.membresias')){
            
          //    $view = View::make('admin::gym.ventas.detalle_venta',["membresias"=>$membresias]);
            foreach (session()->get('portal.main.gym.cliente.membresias') as $membresia){                
            $view = View::make('admin::gym.ventas.add_membresia', array("membresia" => $membresia));
        
         $membresias_view .= $view;
            }            
            }
         
        $venta_aside = View::make('admin::gym.ventas.venta_aside', array("membresias" => $membresias_view))->render();

        $view = View::make('admin::gym.cliente.addCliente'
                        , array('paises' => $paises, 'membresias' => $membresias, "venta_aside" => $venta_aside,
                    'cliente' => ($cliente != null) ? $cliente : array()
                        )
        );

        $this->layoutData['content'] = $view->render();
    }

    public function getClienteUsuario(Request $request) {
        $users = User::where('nombre', 'like', $request->nombre)->get();
        if (count($users) > 0) {
            return $users;
        } else {
            return null;
        }
    }

    public function saveCliente(Request $request) {

        $v = Validator::make($request->all(), array(
                    'name' => 'required',
                    'apellido_paterno' => 'required',
                    'apellido_materno' => 'required',
                    'telefono' => 'required',
                    'telefono_celular' => 'required',
                    'fecha_nacimiento' => 'required',
                    'estado_civil' => 'required',
                    'pais' => 'required',
                    'estado' => 'required',
                    'direccion' => 'required',
                    'email' => 'required',
                    'password' => 'required'
                        )
        );

        if ($v->passes()) {
            session()->put('portal.main.gym.cliente', $request->all());
            $this->confirmarGuardado($request);
            $result = array(
                "status" => true,
                'data' => session()->get('portal.main.gym.cliente')
            );
        } else {
            $result = array(
                "status" => false,
                'data' => $v->messages()
            );
        }
        return $result;
    }

    public function confirmarGuardado($request) {
        $date = new \DateTime();

        if ($request->tipo_inscripcion == 1) {
            $userController = new RegisterController();

            $user = $userController->createUser($request->all());

            if ($user != null) {
                $cliente = new UsuarioCliente();
                $cliente->fecha_inscripcion = $date->format('Y-M-d');
                $cliente->id_usuario = $user->id;
                $cliente->estado_cliente = "Al dia";
                $cliente->activo = 1;
                $cliente->save();
                return $cliente;
            } else {
                return null;
            }
        } else {
            $cliente = new UsuarioCliente();
            $cliente->fecha_inscripcion = $date->format('Y-M-d');
            $cliente->id_usuario = $request->user_id;
            $cliente->estado_cliente = "Al dia";
            $cliente->activo = 1;
            $cliente->save();
            return $cliente;
        }
    }

    public function deleteCliente(Request $request) {
        $cliente = UsuarioCliente::find($request->id);
        if ($cliente != null) {
            if ($cliente->activo == 1) {
                $cliente->activo = 0;
                $cliente->save();
                return 0;
            } else {
                $cliente->activo = 1;
                $cliente->save();
                return 1;
            }
        }
    }

    public function updateCliente($id) {
        $cliente = UsuarioCliente::find($id);

        $indexController = new GymController();

        $pais = $indexController->getCountryById($cliente->usuario->pais);
        $estado = $indexController->getStateById($cliente->usuario->estado);
        $view = View::make('admin::gym.cliente.updateCliente', array("cliente" => $cliente, 'pais' => $pais
                    , "estado" => $estado,
                    'can_add' => Auth::action('brand.add'),
                    'can_delete' => Auth::action('bread.activeBrand'),
                    'can_edit' => Auth::action('brand.editBrand'),
        ));

        $this->layoutData['content'] = $view->render();
    }

    public function saveUpdateCliente(Request $request) {

        try {
            DB::beginTransaction();
            $cliente = UsuarioCliente::find($request->cliente_id);
            $cliente->usuario->name = $request->name;
            $cliente->usuario->apellido_paterno = $request->apellido_paterno;
            $cliente->usuario->apellido_materno = $request->apellido_materno;
            $cliente->usuario->telefono = $request->telefono;
            $cliente->usuario->telefono_celular = $request->telefono_celular;
            $cliente->usuario->estado_civil = $request->estado_civil;
            $cliente->usuario->direccion = $request->direccion;
            $cliente->usuario->email = $request->email;
            $cliente->usuario->save();
            $cliente->usuario->activo = ($request->has('activo')) ? 1 : 0;
            $cliente->save();
            DB::commit();

            return redirect()->action('ClienteController@index');
        } catch (Exception $e) {
            
        }
    }

}
