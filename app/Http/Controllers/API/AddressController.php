<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{

    // IUserRepository is the interface
    public function __construct(IAddressRepository $address)
    {
        $this->address = $address;
    }
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

    public function getById($userId)
    {
        $names = array(
          1 => "John",
          2 => "Mary",
          3 => "Steven"
        );
        return array($userId => $names[$id]);
    }
}
