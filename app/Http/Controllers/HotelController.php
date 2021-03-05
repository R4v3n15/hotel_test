<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//plugins
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


//models
use App\Models\General\Hotel;


class HotelController extends Controller
{
    //

    function __construct(){
        $this->idioma_defecto = 'en';
    }

    public function index(){
        $hotelsData = Hotel::all();
        return view('hotels.index', compact('hotelsData'));
    }

    public function show($id){
        $hotelData = Hotel::find($id);

        if($hotelData == null){
            return response()->view('errors.404', [], 404);
        }

        return view('hotels.show', compact('hotelData'));
    }

    public function create(){
        return view('hotels.create');
    }

    public function store(){
        //recoleccion de datos y validadcion de campo nombre vacio
        $data = request()->all();
      
        $validator = Validator::make($data, ['nombre' => 'required'],['nombre.required' => 'El campo nombre es obligatorio'])->validate();

        Hotel::create([
            'googleid' => $data['googleid'],
            'nombre' => $data['nombre'],
            'text' => $data['text'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'logo' => $data['logo'],
            'img' => $data['img'],
            'slug' => $data['slug'],
            'estatus' => $data['estatus']
        ]);

        return redirect()->route('hotels');
    }

    public function update(Hotel $hotel){
              
        $data = request()->all();
      
        $validator = Validator::make($data, ['nombre' => 'required'],['nombre.required' => 'El campo nombre es obligatorio'])->validate();

        $hotel->update($data);      

        return redirect()->route('hotels');
    }

    public function destroy(Hotel $hotel){

        $hotel->delete();

        return redirect()->route('hotels');
    }
}
