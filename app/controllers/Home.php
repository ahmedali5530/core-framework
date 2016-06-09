<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Core\Response\Response;
use App\Core\Response\JsonResponse;
use App\Core\Security\Encryption;

class Home extends Controller{

	public function index(){
		return view('home/index', array('encrypt' => new Encryption()));
	}

	public function printing($name){
		return response('printing name is '.$name);
	}

}