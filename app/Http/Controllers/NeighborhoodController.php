<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NeighborhoodController extends Controller
{
  /**
   * Display a listing of the resource
   *
   * @return Response
   */
    public function index()
    {
        $neighborhoods = DB::select('select id, name from neighborhoods order by name');
        return view('neighborhood.index', ['neighborhoods' => $neighborhoods]);
    }
}
