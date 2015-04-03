<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomepageController extends Controller {

	public function getIndex() {
        return 'HELLO!';
    }

}
