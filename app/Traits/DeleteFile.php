<?php


namespace App\Traits;


use Illuminate\Support\Facades\Storage;

trait DeleteFile
{
    public function deleteImage(){
        Storage::delete($this->image);
    }

}
