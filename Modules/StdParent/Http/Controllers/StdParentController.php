<?php

namespace Modules\StdParent\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StdParentController extends Controller
{
    public function __construct()
    {
        $this->middleware('parent');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('stdparent::index');
    }

    public function showDashboard()
    {
       return view('stdparent::home.home');
    }

    public function dashboardMenu(Request $req)
    {
        $menuUrl = $req->get('menu');
        return view('stdparent::home.home', ['menuUrl' => $menuUrl]);
    }

    public function showAdmissionPage()
    {
        return view('stdparent::admissions.index');
    }

    public function showRegistrationPage()
    {
        return view('stdparent::admissions.registration');
    }

    public function showBioDataPage()
    {
        return view('stdparent::admissions.bio-data');
    }

    public function showPreviewPage()
    {
        return view('stdparent::admissions.preview');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('stdparent::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('stdparent::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('stdparent::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
