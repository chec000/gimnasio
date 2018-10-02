<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Webservices REST (Shopping)</title>
</head>

<body>
<h1>Webservices REST (Shopping)</h1>
<h3>
    País: {{ $country }}<br/>
    Idioma: {{ $lang }}<br/>
    URL: {{ $urlWs }}
</h3>
<p>
<ul>
    <li><a href="{{ url('rest/getCountryConfiguration') }}">getCountryConfiguration</a></li>
    <li><a href="{{ url('rest/getZipCode') }}">getZipCode</a></li>
    <li><a href="{{ url('rest/getState') }}">getState</a></li>
    <li><a href="{{ url('rest/getCity') }}">getCity</a></li>
    <li><a href="{{ url('rest/getAvailableWH') }}">getAvailableWH</a></li>
    <li><a href="{{ url('rest/getCarrerTitle') }}">getCarrerTitle</a></li>
    <li><a href="{{ url('rest/getShippingCompanies') }}">getShippingCompanies</a></li>
    <li><a href="{{ url('rest/getDocumentsId') }}">getDocumentsId</a></li>
    <li><a href="{{ url('rest/validateLogin') }}">validateLogin</a></li>
    <li><a href="{{ url('rest/getDataPassword') }}">getDataPassword</a></li>
    <li><a href="{{ url('rest/resetPassword') }}">resetPassword</a></li>
    <li><a href="{{ url('rest/validateSponsor') }}">validateSponsor</a></li>
    <li><a href="{{ url('rest/getShipmentAddress') }}">getShipmentAddress</a></li>
    <li><a href="{{ url('rest/addShipmentAddress') }}">addShipmentAddress</a></li>
    <li><a href="{{ url('rest/updateShipmentAddress') }}">updateShipmentAddress</a></li>
    <li><a href="{{ url('rest/deleteShipmentAddress') }}">deleteShipmentAddress</a></li>
    <li><a href="{{ url('rest/addFormSalesTransaction') }}">addFormSalesTransaction</a></li>
    <li><a href="{{ url('rest/addFormEntrepreneur') }}">addFormEntrepreneur</a></li>
    <li><a href="{{ url('rest/addEntrepreneur') }}">addEntrepreneur</a></li>
    <li><a href="{{ url('rest/addSalesWeb') }}">addSalesWeb</a></li>
</ul>
</p>
<h4>Procesos</h4>
<p>
<ul>
    <li><a href="{{ url('rest/proccessSales') }}">proccessSales</a></li>
    <li><a href="{{ url('rest/proccessInscription') }}">proccessInscription</a></li>
    <li><a href="{{ url('rest/proccessCustomer') }}">proccessCustomer</a></li>
</ul>
</p>
</body>

</html>
