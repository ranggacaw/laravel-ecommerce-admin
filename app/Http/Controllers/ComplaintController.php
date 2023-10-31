<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $complaints = Complaint::all();

        return view('complaint.index', compact('complaints'));
    }

    public function show($id)
    {
        $complaint = Complaint::where('id', $id)->first();

        return view('complaint.show', compact('complaint'));
    }
}
