<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Photo;

class HomepageController extends Controller {

	public function getIndex() {
        $photo = Photo::all()[rand(0, Photo::all()->count() - 1)];
        return view('homepage')->with('photo', 'img/'.$photo->getFilename());
    }

}
