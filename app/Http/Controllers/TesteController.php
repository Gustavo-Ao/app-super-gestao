<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2)
    {
        echo 'Teste soma: ' . ($p1 + $p2);
    }
}
