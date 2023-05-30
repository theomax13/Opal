<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
    public function index()
    {
        $apikey = 'ApE0s06T9bS6SNSsCXUf0RLAEuyGQdlg';

        $response = Http::get("https://app.ticketmaster.com/discovery/v2/events.json?locale=*&countryCode=US&apikey=ApE0s06T9bS6SNSsCXUf0RLAEuyGQdlg");

        $jsonData = $response->json();

        dd($jsonData);
    }
}
