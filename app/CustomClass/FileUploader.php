<?php
namespace App\CustomClass;

use Carbon\Carbon;
use Image;

class FileUploader
{
    public static function uploadFoto($file)
    {
        $originalName = $file->getClientOriginalName();
        $fileName = time().'_'.mt_rand(100000, 999999).'_'.$originalName;
        $path = 'foto/'.$fileName;

        //upload foto to server
        // $file->move('foto/', $fileName);

        Image::make($file)->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($path);

        //return path
        return $fileName;
    }
}

?>