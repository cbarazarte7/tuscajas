@extends('layouts.general')
@section('content')

<div class="container">
    <div class="jumbotron gracias">
        <h1>Gracias!</h1>
        <p>Ya hemos registrado su orden, por favor proceda al pago en línea y un representante lo contactará una vez sea aprobada la transacción.</p>

        <form method="post" action="{{ $datos['urlPost'] }}">
            <input name="merchantId"    type="hidden"  value="{{ $datos['merchantId'] }}"   >
            <input name="accountId"     type="hidden"  value="{{ $datos['accountId'] }}" >
            <input name="description"   type="hidden"  value="{{ $datos['description'] }}"  >
            <input name="extra1"   type="hidden"  value="{{ $datos['extra1'] }}"  >
            <input name="extra2"   type="hidden"  value="{{ $datos['extra2'] }}"  >
            <input name="payerFullName"   type="hidden"  value="{{ $datos['payerFullName'] }}"  >
            <input name="buyerFullName"   type="hidden"  value="{{ $datos['payerFullName'] }}"  >
            <input name="telephone"   type="hidden"  value="{{ $datos['telephone'] }}"  >
            <input name="shippingAddress"   type="hidden"  value="{{ $datos['shippingAddress'] }}"  >
            <input name="referenceCode" type="hidden"  value="{{ $datos['referenceCode'] }}" >
            <input name="amount"        type="hidden"  value="{{ $datos['amount'] }}"   >
            <input name="tax"           type="hidden"  value="{{ $datos['tax'] }}"  >
            <input name="taxReturnBase" type="hidden"  value="{{ $datos['taxReturnBase'] }}" >
            <input name="currency"      type="hidden"  value="{{ $datos['currency'] }}" >
            <input name="signature"     type="hidden"  value="{{ $datos['signature'] }}"  >
            <input name="test"          type="hidden"  value="{{ $datos['test'] }}" >
            <input name="buyerEmail"    type="hidden"  value="{{ $datos['email'] }}" >
            <input name="responseUrl"    type="hidden"  value="{{ $datos['responseUrl'] }}" >
            <input name="confirmationUrl"    type="hidden"  value="{{ $datos['confirmationUrl'] }}" >
            <input name="lng"    type="hidden"  value="{{ $datos['lng'] }}" >
            <input type="image" border="0" alt="" src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
            <!--input name="Submit"        type="submit"  value="Pagar" -->
        </form>
    </div>
</div>
@endsection

