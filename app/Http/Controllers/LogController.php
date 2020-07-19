<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return view('pages.logs');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Log $log)
    {
        //
    }

    public function edit(Log $log)
    {
        //
    }

    public function update(Request $request, Log $log)
    {
        //
    }

    public function destroy(Log $log)
    {
        //
    }
}
