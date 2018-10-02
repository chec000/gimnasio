<?php

namespace Modules\Mockup\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller;
use Response;
use View;

class MockupController extends Controller
{
    public $brand;

    public function __construct()
    {
        $this->brand = 'omnilife';
    }

    public function generateMockup($name)
    {
        if (Session::has('portal.main.brand.name')) {
            $this->brand = Session::get('portal.main.brand.name');
        }
        $view = View::make('mockup::frontend.' . $name, ['brand' => $this->brand]);
        return $view;
    }
}
