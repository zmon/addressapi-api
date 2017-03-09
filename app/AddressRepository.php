<?php

class AddressRepository implements IAddressRepository
{
    public function __construct(\address $address)
    {
        $this->$address = $address;
    }

    public function getAllAddresses()
    {
        return Address::all();
    }
}
