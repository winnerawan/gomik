<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function app() {

        $app = [
            "banner" => "ca-app-pub-9400864410179150/9729777567",
            "inters" => "ca-app-pub-9400864410179150/5946568939",
            "reward" => "ca-app-pub-9400864410179150/1281995578",
            "safe_mode" => false
        ];

        return Response()->json($app);

    }
}
