<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadTrait
{
    public function storeImage($dataimage,$pathimage)
    {
        if ($dataimage != null) {
            $truck_img = time().rand(1111111,9999999) . '.' . $dataimage->extension();
            $dataimage->move(public_path($pathimage), $truck_img);
            return $truck_img;
        }else{ return false; }
    }
    public function updateImage($dataimage,$pathimage,$oldname)
    {
        if (file_exists($oldname)) {
            @unlink($oldname);
        }
        if ($dataimage != null) {
            $truck_img =time().rand(1111111111,9999999999) .'.' . $dataimage->extension();
            $dataimage->move(public_path($pathimage), $truck_img);
            return  $truck_img;
        }else{return false; }
    }
    public function deleteImage($oldname)
    {
        if (file_exists($oldname)) {
            @unlink($oldname);return true;
        }else{ return false; }
    }
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
        return $file;
    }
    public function removeFile($fileLocation){
        if(   Storage::exists( $fileLocation)){
            Storage::delete( $fileLocation);
        }
    }
}
