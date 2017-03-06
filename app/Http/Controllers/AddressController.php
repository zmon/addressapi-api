<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
  /**
   * Display a listing of the resource
   *
   * @return Response
   */
    public function index()
    {
        return array(
          1 => "John",
          2 => "Mary",
          3 => "Steven"
        );
    }

    // public function getAll()
    // {
    // }
    //
    public function getById()
    {
        return array(
          1 => "John",
          2 => "Mary",
          3 => "Steven"
        );
    }
}
