<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::get();
        return view('patient.index', compact('patients'));
    }

    public function create(){
        return view('patient.create');
    }

    public function store(Request $request){
        $request->validate([
            'p_name' => 'required|max:255|string',
            'p_address' => 'required|max:255|string',
            'p_dob' => 'required|date',
            'p_mobile' => 'required|max:10|string',
        ]);

        Patient::create([
            'p_name' => $request->p_name,
            'p_address' => $request->p_address,
            'p_dob' => $request->p_dob,
            'p_mobile' => $request->p_mobile,
        ]);
        return redirect('patients/create')->with('status', 'Patient added successfully');
    }

    public function show(int $id){
            $patient = Patient::findOrFail($id);
            return view('patient.show', compact('patient'));
    }

    public function edit( int $id){
        $patient = Patient::findOrFail($id);
        return view('patient.edit', compact('patient'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'p_name' => 'required|max:255|string',
            'p_address' => 'required|max:255|string',
            'p_dob' => 'required|date',
            'p_mobile' => 'required|max:10|string',
        ]);

        
        Patient::findOrFail($id)->update([
            'p_name' => $request->p_name,
            'p_address' => $request->p_address,
            'p_dob' => $request->p_dob,
            'p_mobile' => $request->p_mobile,
        ]);
        return redirect()->back()->with('status', 'Patient updated successfully');
    }

    public function destroy(int $id){
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->back()->with('status', 'Patient deleted successfully');
    }
}
