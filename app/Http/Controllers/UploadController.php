<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use Request;
use App\Http\Requests\StorePhotoRequest;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Storage;
use File;

/**
 * Class UploadController
 *
 * This controller contains the actions for uploading a photo.
 *
 * @package App\Http\Controllers
 */
class UploadController extends Controller {


    /**
     * Shows the upload form.
     */
    public function getIndex() {
        return view('upload');
    }

    public function postPhoto(StorePhotoRequest $request) {
        $file = $request->file('photo');
        $file_extension = $file->guessExtension();
        // Insert to database
        $photo = new Photo();
        $photo->file_extension = $file_extension;
        $photo->save();
        // Save file
        $filename = sprintf('%d.%s', $photo->id, $file_extension);
        Storage::put($filename, File::get($file));
    }
}
