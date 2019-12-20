<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others = [
            ['id' => 1, 'url' => url('storage/others/graph.png')],
            ['id' => 2, 'url' => url('storage/others/0hV3RT2-7KCRx9cYMXaXsqtzAPZggHTRMQTRdYekotVylBG0lNV0JGfEs.mp4')],
            ['id' => 3, 'url' => url('storage/others/0hG7QXYENpGBh-fZITfHc7uZztdwwEQQIUThtJfkkgTihEFVdOU0BXfk4.mp4')],
            ['id' => 4, 'url' => url('storage/others/2ea92f78-dfdb-4d05-b197-80312b9c4d5a.jpeg')],
            ['id' => 5, 'url' => url('storage/others/973613f0-23cf-4fdf-a1f8-749f524062f1.jpeg')],
        ];

        return $others;
    }
}
