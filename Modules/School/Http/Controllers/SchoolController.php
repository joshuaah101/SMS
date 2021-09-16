<?php

namespace Modules\School\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
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
        $schools = $this->repo->get_schools(['school_type', 'image'])->get();
        return view('school::index')->with(compact('schools'));
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

}
