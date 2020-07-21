<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Chanchita;
use App\ChanchitaProduct;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitations = auth()->user()->chanchitas()->wherePivot('status','Confirmado')->get();
        return view('admin.invitations.index', compact('invitations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($chanchita_id)
    {

        $chanchita = Chanchita::find($chanchita_id);

        $products = ChanchitaProduct::where('chanchita_id', $chanchita->id)->get();
        $arr_precios = $products->pluck('price')->toArray();
        $precio_sin_formato = array_sum($arr_precios);
        $precio_total = number_format((float)$precio_sin_formato, 2, '.', '');

        $users = $chanchita->users()->withPivot('status')->get();

        // return view('admin.chanchitas.show', compact('chanchita', 'products', 'precio_total', 'users'));



        // dd($chanchita);
        return view('admin.invitations.show', compact('chanchita', 'products', 'precio_total', 'users'));
    }
    
    public function search(Request $request)
    {
        
        //validar
        $messages = [
            'password.required' =>  'Debe ingresar un código de evento.',
            
        ];
        $rules = [
            'password' => 'required|min:3',
        ];
        $validator = $request->validate($rules, $messages);
        
        // dd($request->password);
        $chanchita = Chanchita::where('password', $request->password)->first();
        $chanchita_id = $chanchita->id;
        // $chanchita = $chanchitas[0];
        // dd($chanchita, $chanchita_id);
        // return view('admin.invitations.show', compact('chanchita'));
        return redirect()->route('invitation.show', ['chanchita_id'=>$chanchita_id]);
        // return 'prueba';
    }
    
    public function accept(Request $request)
    {
        // dd($request->chanchita_id);
        $user = auth()->user();
        $user->chanchitas()->attach($request->chanchita_id, ['status'=>'Confirmado']);
        return redirect()->route('invitation.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($chanchita_id)
    {
        auth()->user()->chanchitas()->updateExistingPivot($chanchita_id, ['status'=>'Se retiró']);
        return redirect()->route('invitation.index');
    }
}
