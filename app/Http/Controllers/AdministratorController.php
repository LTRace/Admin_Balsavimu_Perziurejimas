<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
    public function showAllStrawpolls()
    {
        $strawpolls = DB::table('strawpoll')->get();

        return view('pages.all-strawpolls')->with('strawpolls', $strawpolls);
    }
}
