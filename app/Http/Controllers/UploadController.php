<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
}
