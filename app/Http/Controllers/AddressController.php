<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
        $addressAll = DB::select('select * from address');
        return response()->json($addressAll);
    }

    public function getById($addressId)
    {
        $address = DB::select('select * from address where id = ?', [$addressId]);
        return response()->json($address);
    }
}
