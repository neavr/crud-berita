<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PeopleController extends Controller
{
    public function index()
    {
        return view('VPeople',['people'=>DB::table('people')->get()]);
    }
}
