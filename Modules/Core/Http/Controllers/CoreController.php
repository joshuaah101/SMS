<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('core::index');
    }

    /**
     * Display about page.
     * @return Renderable
     */
    public function about()
    {
        return view('core::about');
    }

    /**
     * Display terms and condition page.
     * @return Renderable
     */
    public function terms()
    {
        return view('core::terms');
    }

    /**
     * Display Policy Page.
     * @return Renderable
     */
    public function policy()
    {
        return view('core::policy');
    }

    /**
     * Display Donation Page.
     * @return Renderable
     */
    public function donation()
    {
        return view('core::donation');
    }

}
