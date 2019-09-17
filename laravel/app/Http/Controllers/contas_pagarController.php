<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contas_pagar;

class contas_pagarController extends Controller
{
    public function index() {
        return Contas_pagar::all();
      }

      public function store(Request $request) {
        $contas_pagar = new Contas_pagar($request->all());
        $contas_pagar->save();
        return response()->json($contas_pagar->toArray(), 200);
      }

      public function show(Contas__pagar $contas__pagar) {
        return response()->json($contas_pagar);
      }

      public function update(Request $request, Contas_pagar $contas_pagar) {
        $contas__pagar->update($request->all());
        return response()->json($contas_pagar, 200);
      }

      public function delete(Contas_pagar $contas_pagar) {
        $contas_pagar->delete();
      }
    
}
