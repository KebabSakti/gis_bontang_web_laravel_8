<?php
namespace App\CustomClass;

use Carbon\Carbon;

class FileUploader
{
    public static function uploadFoto($file)
    {
        $originalName = $file->getClientOriginalName();
        $fileName = time().'_'.mt_rand(100000, 999999).'_'.$originalName;
        //upload foto to server
        $file->move('foto/', $fileName);

        //return path
        return $fileName;
    }
}

?>