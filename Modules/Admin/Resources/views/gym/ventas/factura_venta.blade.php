<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{!! asset('/themes/omnilife2018/css/reporte.css') !!}" rel="stylesheet">
        <title>Laravel y data en PDF | Rimorsoft Online</title>
         </head>
    <body>
     <div class="container">
            <div class="row">
                <div class="receipt-main">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md6">
                                <div class="receipt-left">
                                    <img class="img-responsive" alt="iamgurdeeposahan" src="{{ URL::to(config('admin.config.public')) }}/app/img/logo.png" style="width: 71px; border-radius: 43px;">
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="receipt-right">
                                    <h5>Gym v1</h5>
                                    <p>+91 12345-6789 <i class="fa fa-phone"></i></p>
                                    <p>gym@gmail.com <i class="fa fa-envelope-o"></i></p>
                                    <p>México <i class="fa fa-location-arrow"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="receipt-header receipt-header-mid">
                            <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                <div class="receipt-right">
                                    <h5>Nombre del cliente <small>  |   Lucky Number : 156</small></h5>
                                    <p><b>Mobile :</b> +91 12345-6789</p>
                                    <p><b>Email :</b> info@gmail.com</p>
                                    <p><b>Address :</b> Australia</p>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="receipt-left">
                                    <h1>Factura</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-9">Payment for August 2016</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Payment for June 2016</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> 6,00/-</td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Payment for May 2016</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> 35,00/-</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <p>
                                            <strong>Total Amount: </strong>
                                        </p>
                                        <p>
                                            <strong>Late Fees: </strong>
                                        </p>
                                        <p>
                                            <strong>Payable Amount: </strong>
                                        </p>
                                        <p>
                                            <strong>Balance Due: </strong>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 65,500/-</strong>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 500/-</strong>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 1300/-</strong>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 9500/-</strong>
                                        </p>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                    <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> 31.566/-</strong></h2></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="receipt-header receipt-header-mid receipt-footer">
                            <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                <div class="receipt-right">
                                    <p><b>Fecha :</b> {{$date}} </p>
                                    <h5 style="color: rgb(140, 140, 140);">¡Gracias por su compra!</h5>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="receipt-left">
                                    <h1>Firma</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>    
            </div>
        </div>

    </body>
</html>


<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
    <body>
        <div class="container">
            <div class="row">

                <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                    <div class="row">
                        <div class="receipt-header">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="receipt-left">
                                    <img class="img-responsive" alt="iamgurdeeposahan" src="{{ URL::to(config('admin.config.public')) }}/app/img/logo.png" style="width: 71px; border-radius: 43px;">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                <div class="receipt-right">
                                    <h5>Gym v1</h5>
                                    <p>+91 12345-6789 <i class="fa fa-phone"></i></p>
                                    <p>gym@gmail.com <i class="fa fa-envelope-o"></i></p>
                                    <p>México <i class="fa fa-location-arrow"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="receipt-header receipt-header-mid">
                            <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                <div class="receipt-right">
                                    <h5>Nombre del cliente <small>  |   Lucky Number : 156</small></h5>
                                    <p><b>Mobile :</b> +91 12345-6789</p>
                                    <p><b>Email :</b> info@gmail.com</p>
                                    <p><b>Address :</b> Australia</p>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="receipt-left">
                                    <h1>Factura</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-9">Payment for August 2016</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Payment for June 2016</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> 6,00/-</td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Payment for May 2016</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> 35,00/-</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <p>
                                            <strong>Total Amount: </strong>
                                        </p>
                                        <p>
                                            <strong>Late Fees: </strong>
                                        </p>
                                        <p>
                                            <strong>Payable Amount: </strong>
                                        </p>
                                        <p>
                                            <strong>Balance Due: </strong>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 65,500/-</strong>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 500/-</strong>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 1300/-</strong>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-inr"></i> 9500/-</strong>
                                        </p>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                    <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> 31.566/-</strong></h2></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="receipt-header receipt-header-mid receipt-footer">
                            <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                <div class="receipt-right">
                                    <p><b>Fecha :</b> {{$date}} </p>
                                    <h5 style="color: rgb(140, 140, 140);">¡Gracias por su compra!</h5>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="receipt-left">
                                    <h1>Firma</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>    
            </div>
        </div>


    </body>-->

<!--    
</html>-->


