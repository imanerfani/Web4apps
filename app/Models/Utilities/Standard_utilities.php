<?php


namespace App\Models\Utilities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class Standard_utilities extends Model
{
    public static function is_file_exist($file_name)
    {
        foreach (Storage::allFiles('public/uploads') as $i) {
            if( $i == "public/uploads/".$file_name ){
                return true;
                break;
            }
        }
        return false;
    }
    public static function activeMenu($uri = '') {
        $active = '';
        if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'active';
        }
        return $active;
    }
    public static function openMenu($uri = '') {
        $active = '';
        if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'menu-open';
        }
        return $active;
    }
}
