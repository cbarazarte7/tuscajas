<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection as Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\Orders;
use DB;


class OrderController extends Controller {




    public function __construct() {
        $this->middleware('web');
    }


    public function store(Request $request) {


        $this->validate($request, [
            'name' => 'required|max:150',
            'email' => 'required|email|max:150',
            'tel' => 'required|max:150',
            'city' => 'required',
            'neighborhood' => 'required',
            'kit_id' => 'required',
            'address' => 'required',
            'payment' => 'required',
            ]);
        $total = 0;
        $order = \App\Orders::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'city' => $request->city,
            'neighborhood' => $request->neighborhood,
            'kit_id' => $request->kit_id,
            'extra_id' =>0,
            'payment' => $request->payment,
            'date' => date('Y-m-d H:i:s'),
            'code' => str_random(20),
            'state' => 'Hemos recibido tu pedido',


            ]);

        if(isset($request->extra_id[0])){

            $order = \App\Orders::create([
                'name' => $request->name,
                'email' => $request->email,
                'tel' => $request->tel,
                'city' => $request->city,
                'neighborhood' => $request->neighborhood,
                'kit_id' => $request->kit_id,
                'extra_id' =>$request->extra_id[0],
                'payment' => $request->payment,
                'date' => date('Y-m-d H:i:s'),
                'code' => str_random(20),
                'state' => 'Hemos recibido tu pedido',


                ]);
            $total = $total + 15000;

        }
        if(isset($request->extra_id[1])){
            $order = \App\Orders::create([
                'name' => $request->name,
                'email' => $request->email,
                'tel' => $request->tel,
                'city' => $request->city,
                'neighborhood' => $request->neighborhood,
                'kit_id' => $request->kit_id,
                'extra_id' =>$request->extra_id[1],
                'payment' => $request->payment,
                'date' => date('Y-m-d H:i:s'),
                'code' => str_random(20),
                'state' => 'Hemos recibido tu pedido',


                ]);
            $total = $total + 12000;
        }
        if(isset($request->extra_id[2])){
            $order = \App\Orders::create([
                'name' => $request->name,
                'email' => $request->email,
                'tel' => $request->tel,
                'city' => $request->city,
                'neighborhood' => $request->neighborhood,
                'kit_id' => $request->kit_id,
                'extra_id' =>$request->extra_id[2],
                'payment' => $request->payment,
                'date' => date('Y-m-d H:i:s'),
                'code' => str_random(20),
                'state' => 'Hemos recibido tu pedido',


                ]);

            $total = $total + 10000;
        }
        if(isset($request->extra_id[3])){
            $order = \App\Orders::create([
                'name' => $request->name,
                'email' => $request->email,
                'tel' => $request->tel,
                'city' => $request->city,
                'neighborhood' => $request->neighborhood,
                'kit_id' => $request->kit_id,
                'extra_id' =>$request->extra_id[3],
                'payment' => $request->payment,
                'date' => date('Y-m-d H:i:s'),
                'code' => str_random(20),
                'state' => 'Hemos recibido tu pedido',


                ]);
            $total = $total + 10000;
        }


        if ($order->payment == 'Contra entrega') {
            Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                $m->from('grimorum@grimorum.com', 'TusCajas');


                $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

            });
            return view('gracias');
        }else {
            $order_result = strtoupper($order->city);
            if(strcmp($order_result, "BOGOTA")==0 || strcmp($order_result, "BOGOTá")==0 || strcmp($order_result, "BOGOTÁ")==0 || strcmp($order_result, "BOGOTA D.C")==0){
                $ApiKey = config('payu.ApiKey');
                $merchantId = config('payu.merchantId');
                $accountId = config('payu.accountId');
                $aux = $order->kit->price;
                $aux = $aux + $total;
                $datos = [
                'merchantId' => $merchantId,
                'accountId' => $accountId,
                'description' => $order->kit->name,
                'extra1' => $order->kit->description,
                'extra2' => $order->kit->contents,
                'payerFullName' => $order->name,
                'telephone' => $order->tel,
                'email' => $order->email,
                'shippingAddress' => $order->address,
                'referenceCode' => $order->code,
                'amount' => $aux,
                'tax' => 0,
                'taxReturnBase' => 0,
                'currency' => 'COP',
                'signature' => md5($ApiKey . '~' . $merchantId . '~' . $order->code . '~' . $aux . '~COP'),
                'test' => config('payu.test'),
                'urlPost' => config('payu.urlPost'),
                'buyerEmail' => $order->email,
                'responseUrl' => url('/order/payment'),
                'confirmationUrl' => url('/order/response'),
                'lng' => 'es',

                ];  

                return view('pago', ['datos' => $datos]);

            }else{

                $aux = $order->kit->price;
                $aux = $aux + 12000 + $total;
                $ApiKey = config('payu.ApiKey');
                $merchantId = config('payu.merchantId');
                $accountId = config('payu.accountId');
                $datos = [
                'merchantId' => $merchantId,
                'accountId' => $accountId,
                'description' => $order->kit->name,
                'extra1' => $order->kit->description,
                'extra2' => $order->kit->contents,
                'payerFullName' => $order->name,
                'telephone' => $order->tel,
                'email' => $order->email,
                'shippingAddress' => $order->address,
                'referenceCode' => $order->code,
                'amount' => $aux,
                'tax' => 0,
                'taxReturnBase' => 0,
                'currency' => 'COP',
                'signature' => md5($ApiKey . '~' . $merchantId . '~' . $order->code . '~' . $aux . '~COP'),
                'test' => config('payu.test'),
                'urlPost' => config('payu.urlPost'),
                'buyerEmail' => $order->email,
                'responseUrl' => url('/order/payment'),
                'confirmationUrl' => url('/order/response'),
                'lng' => 'es',
                ];

                return view('pago', ['datos' => $datos]);
            }
        }

        // Create The Task...
    }

    public function payment(Request $request) {
        $ApiKey = config('payu.ApiKey');
        $merchantId = config('payu.merchantId');
        $accountId = config('payu.accountId');        
        $newValue = number_format(round($request->TX_VALUE,1,PHP_ROUND_HALF_EVEN),1,".","");
        $signature = md5($ApiKey . '~' . $merchantId . '~' . $request->referenceCode . '~' . $newValue . '~' . $request->currency . '~' .  $request->transactionState);
        //return "<pre>" . print_r(array("nuestro"=>$signature, "suyo"=>$request->signature, "newValue"=> $newValue),true) . "</pre>";
        if ($signature == $request->signature) {
          $order = Orders::where("code", "=", $request->referenceCode)->first();
          if ($order) {
            if ($request->transactionState == 4) {
                $order->state = 'Pagado';
                $order->response = json_encode($request);
                $order->response_code = $request->response_code_pol;
                $order->response_date = date('Y-m-d H:i:s');
                $order->save();
                Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                    $m->from('grimorum@grimorum.com', 'TusCajas');



                    $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                    $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                    $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                    $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                    $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                    $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

                });
                return view('aceptado', ['order' => $order]);
            } else {
                $order->state = 'rechazado';
                $order->response = json_encode($request);
                $order->response_code = $request->response_code_pol;
                $order->response_date = date('Y-m-d H:i:s');
                $order->save();

                if ($request->transactionState == 6) {
                    Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                        $m->from('grimorum@grimorum.com', 'TusCajas');

                        $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                        $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                        $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                        $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                        $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                        $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

                    });
                } elseif ($request->transactionState == 104) {
                    Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                        $m->from('grimorum@grimorum.com', 'TusCajas');

                        $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                        $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                        $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                        $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                        $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                        $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

                    });
                } elseif ($request->transactionState == 5) {
                    Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                        $m->from('grimorum@grimorum.com', 'TusCajas');


                        $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                        $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                        $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                        $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                        $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                        $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

                    });
                } elseif ($request->transactionState == 7) {

                }
                $resultados = [
                4 => 'rechazado por la entidad financiera',
                5 => 'rechazado por el banco',
                6 => 'rechazado por fondos insuficientes',
                7 => 'rechazado por tarjeta inválida',
                8 => 'rechazado por débito automático no permitido',
                9 => 'rechazado por tarjeta vencida',
                10 => 'rechazado por tarjeta restringida',
                12 => 'rechazado por fecha de expiración o código de seguridad inválidos',
                13 => 'rechazado',
                14 => 'rechazado por transacción inválida',
                15 => 'puesto en espera, la transacción se encuentra en validación manual',
                17 => 'rechazado porque el valor excede el máximo permitido por la entidad',
                20 => 'rechazado por transacción expirada',
                22 => 'rechazado por tarjeta no autorizada para comprar por internet',
                23 => 'rechazado por sospecha de fraude',
                25 => 'puesto en espera, el recibo de pago se ha generado',
                26 => 'puesto en espera, el recibo de pago se ha generado',
                9994 => 'puesto en espera de confirmación de PSE',
                9995 => 'rechazado por certificado digital no encontrado',
                9996 => 'rechazado por error tratando de cominicarse con el banco',
                9997 => 'rechazado por error comunicándose con la entidad financiera',
                9998 => 'rechazado por transacción no permitida al tarjetahabiente',
                ];
                if (array_has($resultados, $request->response_code_pol)) {
                    $resultado = $resultados[$request->response_code_pol];
                } else {
                    $resultado = 'rechazado';
                }
                return view('rechazado', ['order' => $order, 'state' => $request->transactionState, 'resultado' => $resultado]);
            }
        }else{
         return view('intentar');

     }
 }else{
    return view('rechazado');
}
}

public function response(Request $request) {
    $ApiKey = config('payu.ApiKey');
    $merchantId = config('payu.merchantId');
    $accountId = config('payu.accountId');
    $newValue = $request->TX_VALUE;
    $signature = md5($ApiKey . '~' . $merchantId . '~' . $request->referenceCode . '~' . $newValue . '~COP~' . $request->transactionState);
    if ($signature == $request->signature) {
        $order = App\Order::where("code", "=", $request->referenceCode)->first();
        if ($order) {
            if ($request->state_pol == 4) {
                $order->state = 'pagado';
                $order->response = json_encode($request);
                $order->response_code = $request->polResponseCode;
                $order->response_date = date('Y-m-d H:i:s');
                $order->save();
                Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                    $m->from('grimorum@grimorum.com', 'TusCajas');



                    $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                    $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                    $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                    $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                    $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                    $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

                });
            } else {
                $order->state = 'rechazado';
                $order->response = json_encode($request);
                $order->response_code = $request->polResponseCode;
                $order->response_date = date('Y-m-d H:i:s');
                $order->save();
                if ($request->state_pol == 6) {
                    Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                        $m->from('grimorum@grimorum.com', 'TusCajas');


                        $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                        $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                        $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                        $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                        $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                        $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

                    });
                } else {
                    Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                        $m->from('grimorum@grimorum.com', 'TusCajas');


                        $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
                        $m->to("jennifer.osorio@grimorum.com", "Jennifer Osorio")->subject('Nueva orden en tus cajas ');
                        $m->to("david.barrero@grimorum.com", "David Barrero")->subject('Nueva orden en tus cajas ');
                        $m->to("victor.vasquez@grimorum.com", "Victor Vásquez")->subject('Nueva orden en tus cajas ');
                        $m->to("ricardo.rincon@grimorum.com", "Ricardo Rincón")->subject('Nueva orden en tus cajas ');
                        $m->to("alejandra.berdugo@grimorum.com", "Alejandra Berdugo")->subject('Nueva orden en tus cajas ');

                    });
                }
            }
        }
    }
    return 0;
}

}
