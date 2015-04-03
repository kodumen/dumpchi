<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'photos';

    /**
     * Return the filename of the photo uploaded.
     * @return string
     */
    public function getFilename() {
        $filename = sprintf('%d.%s', $this->id, $this->file_extension);
        return $filename;
    }
}
