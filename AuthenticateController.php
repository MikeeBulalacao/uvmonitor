<?php
 
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthenticateController extends Controller
{
    public function registerPassenger(Request $request)
    {
        $data = request()->all();
    	$passengerdata = User::Passenger();
    	return json_encode($passengerdata);
    }

    public function loginPassenger(Request $request)
    {
    	$passengerLogin = User::Passengerlogin();
    	return json_encode($passengerLogin);
    }
}
