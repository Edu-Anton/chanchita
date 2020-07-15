<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Chanchita;
use App\Guest;

class ChanchitaUserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($chanchita_id)
    {
        // dd($chanchita_id);
        $chanchita = Chanchita::find($chanchita_id);
        $guests = $chanchita->guests()->get();
        return response()->json(['guests' => $guests, 'chanchita_id'=>$chanchita_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guest = Guest::create($request->all());
        return response()->json(['recibido' =>'recibido']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $chanchita_id, $guest_id)
    {
        // dd($request, $chanchita_id, $guest_id);
        $guest = Guest::find($guest_id);
        $guest->update($request->all());
        return response()->json(['msg'=>'Actualización realizada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($chanchita_id, $guest_id)
    {
        $guest = Guest::find($guest_id);
        $guest->delete();
        // return $guest_id;
        return response()->json(['msg'=>'Se retiró el usuario de la lista.']);
    }
}
