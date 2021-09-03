<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            "NIS" => "3103119176",
            "Name" => "Sekar Putri Andini",
            "Phone" => "087832835263",
            "Class" => "XII RPL 6"
        ];
    }
}
