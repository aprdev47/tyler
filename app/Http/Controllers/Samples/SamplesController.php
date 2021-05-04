<?php

namespace App\Http\Controllers\Samples;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SamplesController extends Controller
{
    public function sampleForm(){
        return view('samples.form');
    }
}
