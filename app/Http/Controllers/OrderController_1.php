<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class OrderController extends Controller {

    


    public function __construct() {
        $this->middleware('web');
    }
     

    public function store(Request $request) {
       

        $this->validate($request, [
            'name' => 'required|max:150',
            'email' => 'required|email|max:150',
            'tel' => 'required|max:150',
            'kit_id' => 'required',
            'address' => 'required',
            'payment' => 'required',
        ]);

        $order = \App\Orders::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'tel' => $request->tel,
                    'kit_id' => $request->kit_id,
                    'address' => $request->address, 
                    'payment' => $request->payment,
                    'date' => date('Y-m-d H:i:s'),
                    'code' => str_random(20),
                    'state' => 'Hemos recibido su pedido, para conocer cambios en el estado del pedido, por favor consulte más tarde'
        ]);

        



        if ($order->payment == 'ent') {
            Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                $m->from('grimorum@grimorum.com', 'TusCajas');

                $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden en tus cajas');
            });
            return view('gracias');
        } else {
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
                'amount' => $order->kit->price,
                'tax' => 0,
                'taxReturnBase' => 0,
                'currency' => 'COP',
                'signature' => md5($ApiKey . '~' . $merchantId . '~' . $order->code . '~' . $order->kit->price . '~COP'),
                'test' => config('payu.test'),
                'urlPost' => config('payu.urlPost'),
                'buyerEmail' => $order->email,
                'responseUrl' => url('/order/payment'),
                'confirmationUrl' => url('/order/response'),
                'lng' => 'es',
            ];
            return view('pago', ['datos' => $datos]);
        }

        // Create The Task...
    }

    public function payment(Request $request) {
        $ApiKey = config('payu.ApiKey');
        $merchantId = config('payu.merchantId');
        $accountId = config('payu.accountId');
        $newValue = $request->value;
        $signature = md5($ApiKey . '~' . $merchantId . '~' . $request->reference_sale . '~' . $newValue . '~COP~' . $request->state_pol);
        if ($signature == $request->signature) {
            $order = App\Order::where("code", "=", $request->reference_sale)->first();
            if ($order) {
                if ($request->transactionState == 4) {
                    $order->state = 'pay';
                    $order->response = json_encode($request);
                    $order->response_code = $request->response_code_pol;
                    $order->response_date = date('Y-m-d H:i:s');
                    $order->save();
                    Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                        $m->from('grimorum@grimorum.com', 'TusCajas');

                        $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden pagada en tus cajas');
                    });
                    return view('aceptado', ['order' => $order]);
                } else {
                    $order->state = 'non';
                    $order->response = json_encode($request);
                    $order->response_code = $request->response_code_pol;
                    $order->response_date = date('Y-m-d H:i:s');
                    $order->save();

                    if ($request->transactionState == 6) {
                        Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                            $m->from('grimorum@grimorum.com', 'TusCajas');

                            $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden rechazada en tus cajas');
                        });
                    } elseif ($request->transactionState == 104) {
                        Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                            $m->from('grimorum@grimorum.com', 'TusCajas');

                            $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden fallida en tus cajas');
                        });
                    } elseif ($request->transactionState == 5) {
                        Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                            $m->from('grimorum@grimorum.com', 'TusCajas');

                            $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden expirada en tus cajas');
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
            }
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
                    $order->state = 'pay';
                    $order->response = json_encode($request);
                    $order->response_code = $request->polResponseCode;
                    $order->response_date = date('Y-m-d H:i:s');
                    $order->save();
                    Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                        $m->from('grimorum@grimorum.com', 'TusCajas');

                        $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden pagada en tus cajas');
                    });
                } else {
                    $order->state = 'non';
                    $order->response = json_encode($request);
                    $order->response_code = $request->polResponseCode;
                    $order->response_date = date('Y-m-d H:i:s');
                    $order->save();
                    if ($request->state_pol == 6) {
                        Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                            $m->from('grimorum@grimorum.com', 'TusCajas');

                            $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden declinada en tus cajas');
                        });
                    } else {
                        Mail::send('emails.order', ['order' => $order], function ($m) use ($order) {
                            $m->from('grimorum@grimorum.com', 'TusCajas');

                            $m->to("hernando.varon@grimorum.com", "Hernando Varón")->subject('Nueva orden expirada en tus cajas');
                        });
                    }
                }
            }
        }
        return 0;
    }

}
