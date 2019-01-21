<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function app() {

        $app = [
            "banner" => "banner",
            "inters" => "inters",
            "reward" => "rewards",
            "safe_mode" => false
        ];

        return Response()->json($app);

    }
}
