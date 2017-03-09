<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
  /**
   * Display a listing of the resource
   *
   * @return Response
   */
    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);
        return view('user.index', ['users' => $users]);
    }

    public function getById()
    {
        return array(
          1 => "John",
          2 => "Mary",
          3 => "Steven"
        );
    }
}
