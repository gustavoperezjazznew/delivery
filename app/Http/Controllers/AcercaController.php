<?php

namespace App\Http\Controllers; 

use App\Plato;
use App\Horario;
use App\Contactano;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AcercaController extends Controller
{   
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function home()
    {
    	$xroll = mt_rand(1 ,Plato::where('clasif',"=",'Roll')->count());   
        $plato= Plato::where('id',"=",$xroll)->first();

        $ini_pro=Plato::where('clasif',"=",'Promo')->first();
        $fin_pro=Plato::where('clasif',"=",'Promo')->max('id');
        $xpromo = mt_rand($ini_pro->id,$fin_pro);   
        $promo= Plato::where('id',"=",$xpromo)->first();

        $menus= Plato::all();
        $horarios=Horario::all();
        $contactanos=Contactano::all();
       
        return view('home',compact('plato','promo','menus','horarios','contactanos'));
       
    }

    public function show1($id)
    {
                
        $promo = Plato::where('id',"=",$id)->first();
        //dd($promo);
        
    }
    public function clickplato()
    {            
        
        $idx = $this->request->id;
        $platox= Plato::where('id',"=",$idx)->first();
        
        $ingred= $platox->ingredientes;
        //dd($ingred);
        $imagenplato = $platox->rutaimag;
           return response()->json([
               'nombre_plato'=>$platox->nombre_plato,
               'ingredientes' => $ingred,
               'imagenplato' => $imagenplato

           ]);


    }
}
