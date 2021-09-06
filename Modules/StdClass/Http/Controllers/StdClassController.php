<?php

namespace Modules\StdClass\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StdClassController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('stdclass::index');
    }

    /**
     * View All Admissions
     *
     */
    public function admission()
    {
        return view('admission.index');
    }

    public function show_admission($slug)
    {
        return view('admission.show');
    }
}
