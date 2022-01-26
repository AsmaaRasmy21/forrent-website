<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Service;
use Illuminate\Http\Request;

class CustomerServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('visitors.index', compact(['services']));
    }
    public function store(Request $request )
    {
        $request->validate([
            'rating' => 'required|regex:/[1-5]/',
        ]);
        $data = [
            'service_id' => $request->input('service_id'),
            'customer_id' => session('id'),
            'rating' => $request->input('rating'),
            'review' => $request->input('review'),

        ];
        Rating::create($data);
        return redirect()->back()->with('message', trans('main.added_rate'));
    }
}
