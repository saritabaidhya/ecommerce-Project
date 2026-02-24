<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\frontEnd\Contact;
use App\Models\superAdmin\Page;
use App\Models\frontEnd\Connect;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;


class HoroscopeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $baseUrl = 'https://ommandir.mypay.com.np/';
        $endpoint = 'api/v2/horoscope/gethoroscope';
    
        try {
            // Make individual requests for each horoscope type
            $dailyResponse = Http::get($baseUrl . $endpoint, ['request' => 'daily_horoscope']);
            $weeklyResponse = Http::get($baseUrl . $endpoint, ['request' => 'weekly_horoscope']);
            $monthlyResponse = Http::get($baseUrl . $endpoint, ['request' => 'monthly_horoscope']);
            $yearlyResponse = Http::get($baseUrl . $endpoint, ['request' => 'yearly_horoscope']);
    
            // Check if all requests were successful
            if (
                $dailyResponse->successful() &&
                $weeklyResponse->successful() &&
                $monthlyResponse->successful() &&
                $yearlyResponse->successful()
            ) {
                // Parse JSON responses
                $dailyHoroscope = $dailyResponse->json();
                $weeklyHoroscope = $weeklyResponse->json();
                $monthlyHoroscope = $monthlyResponse->json();
                $yearlyHoroscope = $yearlyResponse->json();
    
                // Pass data to the view
                return view('frontEnd.horoscopes.index', [
                    'horoscopes' => $dailyHoroscope['data'] ?? [],
                    'weeks' => $weeklyHoroscope['data'] ?? [],
                    'months' => $monthlyHoroscope['data'] ?? [],
                    'years' => $yearlyHoroscope['data'] ?? []
                ]);
            } else {
                // Handle unsuccessful responses
                return back()->withErrors(['error' => 'Failed to fetch horoscopes.']);
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }


}