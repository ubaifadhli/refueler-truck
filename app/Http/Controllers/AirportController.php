<?php

namespace App\Http\Controllers;

use App\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index() {
        $airports = Airport::all();
        return view('pages.airports.index', compact('airports'));
    }

    public function create() {

    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        Airport::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('airport.index');
    }

    public function show(Airport $airport) {
        return view('pages.airports', compact('airport'));
    }

    public function details($airportId) {
        return view('pages.airports.details');
    }

    public function log($airportId, $productId) {
        return view('pages.airports.log');
    }

    public function logReport($airportId, $productId) {
        return view('pages.airports.log-report');
    }

    public function product($airportId, $productId) {
        return view('pages.airports.product');
    }

    public function warningEvent($airportId, $productId) {
        return view('pages.airports.warning-event');
    }
}
