<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientInfo;

class PatientInfoController extends Controller
{
    //
    public function getPatients(){
        $patients=PatientInfo::get();
        return view('welcome',compact('patients'));
    }
}
