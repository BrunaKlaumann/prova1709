<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contas_receber;


class Contas_receberController extends Controller
{
    public function index() {
        return Contas_receber::all();
      }

      public function store(Request $request) {
        $contas_receber = new Contas_receber($request->all());
        $contas_receber->save();
        return response()->json($contas_receber->toArray(), 200);
      }

      public function show(Contas_receber $contas_receber) {
        return response()->json($contas_receber);
      }

      public function update(Request $request, Contas_receber $contas_receber) {
        $contas_receber->update($request->all());
        return response()->json($contas_receber, 200);
      }

      public function delete(Contas_receber $contas_receber) {
        $contas_receber->delete();
      }
}