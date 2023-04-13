<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function insertfacilities(Request $request)
    {
        $facilities = new Facilities();
        $facilities->name = $request->input('name');
        $facilities->abbreviation = $request->input('abbreviation');
        $facilities->description = $request->input('description');
        $facilities->location_desc = $request->input('location_desc');
        $facilities->number_of_beds = $request->input('number_of_beds');
        $facilities->number_of_cots = $request->input('number_of_cots');
        $facilities->open_whole_day = $request->input('open_whole_day');
        $facilities->open_whole_week = $request->input('open_whole_week');
        $facilities->facility_type = $request->input('facility_type');
        $facilities->operation_status = $request->input('operation_status');
        $facilities->ward = $request->input('ward');
        $facilities->owner = $request->input('owner');
        $facilities->officer_in_charge = $request->input('officer_in_charge');
        $facilities->physical_address = $request->input('physical_address');
        $facilities->parent = $request->input('parent');
        $facilities->save();
        return response()->json($facilities);
    }

    public function getfacilities(Request $request)
    {
        $Client = new Client();
        $res = $Client->request('GET','http://127.0.0.1:8000/api/GetFacilities');
        $data = $res->getBody()->getContents();
        $data = json_decode($data);

        // return view('new',compact('data'));
    }
}
