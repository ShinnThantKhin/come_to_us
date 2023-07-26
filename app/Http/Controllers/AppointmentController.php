<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    public function appointmentView(){
        return view('appointment');
    }

    public function addAppointment(Request $req){
       $appointment = new Appointment;
       $appointment->clientName=$req->clientName;
       $appointment->clientEmail=$req->clientEmail;
       $appointment->clientPhone=$req->clientPhone;
       $appointment->counselorName=$req->counselorName;
       $appointment->appointmentDate=$req->appointmentDate;
       $appointment->appointmentTime=$req->appointmentTime;
       $appointment->counselingType=$req->counselingType;
       $appointment->clientNote=$req->clientNote;
       $appointment->save();
       return redirect()->back()->with('status', "Appointment Successfully! We'll Reach You Back!");
    }
}
