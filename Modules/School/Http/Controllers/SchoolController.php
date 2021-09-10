<?php

namespace Modules\School\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\School\Repository\SchoolInterface as SchoolRepo;

class SchoolController extends Controller
{
    public $repo;

    public function __construct(SchoolRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display list of schools available
     * @return Renderable
     */
    public function index()
    {
        return view('school::index');
    }


    /**
     * Show school Information.
     * @param string $slug
     */
    public function show(string $slug)
    {
        $school = $this->repo->show_school($slug, ['school_type', 'image'])->firstOrFail();
        return view('school::show')->with(compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('school::edit');
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
