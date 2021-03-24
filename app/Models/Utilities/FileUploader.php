<?php


namespace App\Models\Utilities;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Intervention\Image\Image;

class FileUploader
{
    public static function file_upload($file, $file_name)
    {
        $generateFilename= Str::uuid()->toString().$file_name;

        $file->storeAs('uploads' ,$generateFilename , 'public');
        //Image::make()
        return URL::to('storage/uploads', $generateFilename);
    }
    public static function file_base64_upload($file)
    {
        $generateFilename = time().'.'.explode('/',explode(':',substr($file,
                0,strpos($file,';')))[1])[1];


        \Image::make($file)->save(public_path('storage/uploads/').$generateFilename);
        return URL::to('storage/uploads', $generateFilename);
    }
}
