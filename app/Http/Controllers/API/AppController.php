<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function app() {

        $app = [
            "banner" => "ca-app-pub-9400864410179150/3066383366",
            "inters" => "ca-app-pub-9400864410179150/7587425763",
            "reward" => "rewards",
            "safe_mode" => false
        ];

        return Response()->json($app);

    }
}
