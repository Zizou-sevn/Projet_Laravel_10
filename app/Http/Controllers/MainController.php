<?php

namespace App\Http\Controllers;

use App\Models\Plats;
use App\Models\Categories;
use App\Models\Actus;
use Illuminate\Http\Request;
use App\Models\Reservation;

class MainController extends Controller
{
       private $heures = [

        //  creneau du matin
        '12:00',
        '12:30',
        '13:00',
        '13:30',
    
        //  creneaux du soir
        '20:00',
        '20:30',
        '21:00',
        '21:30',
    
        ];
    
    public function home()
    {
        $actus = Actus::all();       
        return view('home', [
           'actus' => $actus,
        ]); 
    }

    public function menu()
    {
        $categories = Categories::all();

        return view('menu', [
            'categories' => $categories,
        ]);
    }

    public function plat($id)
    {
        $plat= Plats::find($id);

        return view('plats', [
            'plats' => $plat,
        ]);
    }


    public function reservation()
    {
        return view('reservation',[
            'heures'=> $this ->heures, 
        ]);
    } 
    public function  reservationStore(Request $request)
    {
     $heures = implode (',', $this->heures);

        $validated = $request->validate ([
            'nom' => 'required|min:3|max:50',
            'couvert' => 'required|numeric|gte:1|lte:16',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|min:10|max:10,',
            'telephone' => 'required',
            'commentaire' => 'nullable|min:10|max:1000',   
        ]);

        $reservation = new Reservation();
        $reservation ->nom = $validated['nom'];
        $reservation -> couvert = $validated['couvert'];
        $reservation -> heure = $validated['heure']; 
        $reservation -> jour = $validated['jour'];
        $reservation -> telephone = $validated['telephone'];
        $reservation -> commentaire = $validated['commentaire'];

        $reservation-> save();

        return view('reservationStore', [
            'reservation'=> $reservation,
        ]);
    }

}