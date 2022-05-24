<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

use App\Http\Requests\validationReservation;
use Doctrine\DBAL\Driver\IBMDB2\Result;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::orderBy('id', 'desc')->paginate();

        return view('reservations.index', compact('reservations'));
    }

    public function create() {
        return view('reservations.create');
    }

    public function store(validationReservation $request) {

        $reservation = Reservation::create($request->all());

        return redirect()->route('reservations.show', $reservation);
    }

    public function show(Reservation $reservation) {
        return view('reservations.show', compact('reservation'));
    }
    
    public function edit(Reservation $reservation) {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation) {
        
        $request->validate([
            'id_machine' => 'required',
            'created_by' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.index');
    }

    public function destroy(Request $request)
    {
        $reservation = Reservation::find($request->id);

        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}
