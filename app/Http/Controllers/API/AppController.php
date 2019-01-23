<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function app() {

        $app = [
            "banner" => "ca-app-pub-9400864410179150/8823258458",
            "inters" => "ca-app-pub-9400864410179150/8631686768",
            "reward" => "ca-app-pub-9400864410179150/1281995578",
            "safe_mode" => false
        ];

        return Response()->json($app);

    }
}
