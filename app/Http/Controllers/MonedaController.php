<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonedaController extends Controller
{
    public function convertir(Request $request)
    {
        $client = new \SoapClient("https://currencyconverter.kowabunga.net/converter.asmx?WSDL");

        $params = [
            'CurrencyFrom' => $request->from,
            'CurrencyTo' => $request->to,
            'RateDate' => $request->date,
        ];

        try {
            $rateResponse = $client->GetConversionRate($params);
            $rate = $rateResponse->GetConversionRateResult;
            $resultado = $rate * floatval($request->amount);

            return redirect()->back()->with('resultado', round($resultado, 2));
        } catch (\Exception $e) {
            return redirect()->back()->with('resultado', 'Error: ' . $e->getMessage());
        }
    }
}
