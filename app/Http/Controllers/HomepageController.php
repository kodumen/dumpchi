<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Requests\StorePhotoRequest;
use Storage;
use File;

class HomepageController extends Controller {

	public function getIndex() {
        return $_ENV['OPENSHIFT_DATA_DIR'];
        $photos = Photo::all();
        if(count($photos) < 1) return view('homepage')->with('photo', '');
        $photo = Photo::all()[rand(0, Photo::all()->count() - 1)];
        return view('homepage')->with('photo', 'img/'.$photo->getFilename());
    }

    public function postUpload(StorePhotoRequest $request) {
        $file = $request->file('photo');
        $file_extension = $file->guessExtension();
        // Insert to database
        $photo = new Photo();
        $photo->file_extension = $file_extension;
        $photo->save();
        // Save file
        $filename = sprintf('%d.%s', $photo->id, $file_extension);
        Storage::put($filename, File::get($file));
        return redirect(url('/'));
    }
}
