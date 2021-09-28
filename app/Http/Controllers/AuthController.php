<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return 
        [
            "NIS" => 3103119169,
            "Nama" => "Rizqi Achmad Rivaldi",
            "Gender" => "Laki-laki",
            "Phone" => 6281389370002,
            "Class" => "XII RPL 5"
        ];
    }
}
