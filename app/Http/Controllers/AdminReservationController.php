<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    private $heures = [

        //  creneau du matin
        '12:00:00' => '12:00',
        '12:30:00' => '12:30',
        '13:00:00' => '13:00',
        '13:30:00' => '13:30',
    
        //  creneaux du soir
        '20:00:00' => '20:00',
        '20:30:00' => '20:30',
        '21:00:00' => '21:00',
        '21:30:00' => '21:30',
    
        ];

        public function index()
        {
            //récup la liste des résa
            // affiche un template
        }
    
        public function show()
        {
            //recup la résa
            // affiche un template
        }

        public function edit($id)
        {
            // $heures = implode (',', $this->heures);
            $reservation = Reservation::find($id);

            return view('admin.reservation.edit' , [
                'reservation' => $reservation,
                'heures' => $this->heures,
            ]);
        }
}
