<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\VolunteerInformation;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        // $ip = $request->ip(); 
        $ip = '118.179.85.21'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        $volunteers = VolunteerInformation::where('work_area', 'like', '%' . $request->area . '%')
            ->where('worktype', 'like', '%' . $request->worktype . '%')
            ->where('availablity', 'yes')
            ->get();
        $outputScript = '';

        foreach ($volunteers as $volunteer) {
            $userImage = asset("assets/images/users/" . $volunteer->user->image);
            $outputScript .= "var myIcon" . $volunteer->id . " = L.icon({
                iconUrl: '$userImage',
                iconAnchor: [22, 94],
                popupAnchor: [-3, -76],
                shadowSize: [68, 95],
                shadowAnchor: [22, 94],
                className : 'iconClass',
            });";

            $outputScript .= "L.marker([" . floatval($volunteer->latitude) . ", " . floatval($volunteer->longitude) . "], {icon: myIcon" . $volunteer->id . "}).addTo(mymap)
            .bindPopup('<p class=\"text-center text-uppercase fw-bold text-success\">" . $volunteer->user->username . "</p><button onclick=\"requestUser(" . $volunteer->user->id . ")\" class=\"btn btn-primary\"> Hire Volunteer </button>')
            .openPopup();";
        }

        $outputScript .= '';
        return view('search.index')->with('location', $currentUserInfo)->with('markerScript', $outputScript);
    }
}
