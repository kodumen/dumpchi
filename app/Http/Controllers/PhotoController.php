<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Storage;
use App\Photo;

class PhotoController extends Controller {

	public function getPhoto($id) {
        $photo = Photo::findOrFail($id);
        $content = Storage::get($photo->filename);

        return response($content)->header('Content-Type', $photo->mimetype);
    }

}
