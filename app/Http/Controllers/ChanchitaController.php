<?php

namespace App\Http\Controllers;

use App\Chanchita;
use App\ChanchitaProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChanchitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(auth()->user()->id);
        $chanchitas = Chanchita::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();   
        return view('admin.chanchitas.index', compact('chanchitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chanchitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar
        $messages = [
            'name.required' =>  'Debe ingresar un nombre obligatoriamente.',
            'name.min'      =>  'El nombre del producto debe tener al menos tres caracteres.',
            'description.required' => 'Agregue una descripción de su evento.',
            'description.max' => 'La descripción corta solo admite hasta 200 caracteres.',
            'day.required' => 'Es obligatorio definir una fecha.',
            'url_img.mimes' => 'Debe ingresar una imagen con formato jpg, png o jpeg'
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'day' => 'required|date',
            'url_img' => 'required|mimes:jpeg,jpg,png'
        ];
        ChanchitaController::validate($request, $rules, $messages);


        
        $chanchita = new Chanchita;
        $chanchita->name = $request->get('name');
        $chanchita->description = $request->get('description');
        $chanchita->day = $request->get('day');
        $chanchita->user_id = auth()->user()->id;
        $chanchita->password = Str::random(8);

        $chanchita->url_img = $request->file('url_img')->store('public');

        $chanchita->save();

        return redirect()->route('chanchita.index');
        // $file = new File;
        // $file->title = $request->get('title');
        // $file->extension = $request->file('file_name')->getClientOriginalExtension();
        // $file->user_id = auth()->user()->id;
        
        // if ($request->hasFile('file_name')) {
        //     $file->file_name = $request->file('file_name')->store('public');
        // }
        // $file->save();

        // return redirect()->route('admin.editor.file.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chanchita  $chanchita
     * @return \Illuminate\Http\Response
     */
    public function show(Chanchita $chanchita)
    {
        
        // $chanchita = Chanchita::where('id', $chanchita->id)->with('products')->get();
        // dd($products = Chanchita::find($chanchita->id)->products()->get());
        $products = ChanchitaProduct::where('chanchita_id', $chanchita->id)->get();
        $arr_precios = $products->pluck('price')->toArray();
        $precio_sin_formato = array_sum($arr_precios);
        $precio_total = number_format((float)$precio_sin_formato, 2, '.', '');

        $users = $chanchita->users()->withPivot('status')->get();

        return view('admin.chanchitas.show', compact('chanchita', 'products', 'precio_total', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chanchita  $chanchita
     * @return \Illuminate\Http\Response
     */
    public function edit(Chanchita $chanchita)
    {
        // dd($chanchita);
        return view('admin.chanchitas.edit', compact('chanchita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chanchita  $chanchita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chanchita $chanchita)
    {
        
        // dd($request);
        // validar
        $messages = [
            'name.required' =>  'Debe ingresar un nombre obligatoriamente.',
            'name.min'      =>  'El nombre del producto debe tener al menos tres caracteres.',
            'description.required' => 'Agregue una descripción de su evento.',
            'description.max' => 'La descripción corta solo admite hasta 200 caracteres.',
            'day.required' => 'Es obligatorio definir una fecha.',
            'url_img.mimes' => 'Debe ingresar una imagen con formato jpg, png o jpeg'
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'day' => 'required|date',
            'url_img' => 'nullable|mimes:jpeg,jpg,png'
        ];
        ChanchitaController::validate($request, $rules, $messages);


        $chanchita->name = $request->get('name');
        $chanchita->description = $request->get('description');
        $chanchita->day = $request->get('day');
        $chanchita->user_id = auth()->user()->id;
        $chanchita->password = Str::random(8);

        if ($request->hasFile('url_img'))
        {
            $chanchita->url_img = $request->file('url_img')->store('public');
        } 

        $chanchita->save();

        return back()->with('msg', 'Información actualizada correctamente');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chanchita  $chanchita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chanchita $chanchita)
    {
        //
    }
}
