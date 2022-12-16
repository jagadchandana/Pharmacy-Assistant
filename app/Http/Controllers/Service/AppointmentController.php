<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * @return [type]
     */
    public function index()
    {
        return view('pages.service.appointment');
    }
}
