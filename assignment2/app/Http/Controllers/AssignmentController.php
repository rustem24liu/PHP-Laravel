<?php

namespace App\Http\Controllers;

class AssignmentController extends Controller
{
    public function index()
    {
        $data =
            [

                'title' => 'Assignment 2',
                '
            status' => 'Done',
                'time' => time(),
                'author' => 'Rustem Temirgali',
            ];

        return view('assignment', ['data' => $data]);
    }
}
