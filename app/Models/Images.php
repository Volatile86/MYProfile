<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\App;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'path',
        'isProfilePic',
        'isActive'
    ];

    public static function imageDirectory($userId = null)
    {
        $parentDirectory = '';
        if ($userId) {
            if (App::environment() === 'production') {
                $parentDirectory = "myprofile/".$userId."/";
            } elseif (App::environment() === 'dev') {
                $parentDirectory = "myprofile_dev/".$userId."/";
            } elseif (App::environment() === 'local') {
                $parentDirectory = "myprofile_local/".$userId."/";
            }
        }
        else {
            if (App::environment() === 'production') {
                $parentDirectory = "myprofile/";
            } elseif (App::environment() === 'dev') {
                $parentDirectory = "myprofile_dev/";
            } elseif (App::environment() === 'local') {
                $parentDirectory = "myprofile_local/";
            }
        }


        return $parentDirectory;
    }
}
