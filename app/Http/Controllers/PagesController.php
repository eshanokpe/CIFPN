<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Project;
use App\Models\ProjectMenu;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PagesController extends Controller
{
   
    
    public function index($slug)
    {
       
        $pages = [
            'about-us' => 'home.pages.aboutUs.index',
            'vision' => 'home.pages.aboutUs.vision',
            'mission' => 'home.pages.aboutUs.mission',
            'core-values' => 'home.pages.aboutUs.core-values',

            'solutions' => 'home.pages.solutions',
            'industries' => 'home.pages.industries',
            'social-impact' => 'home.pages.social-impact',
            'careers' => 'home.pages.careers',
            'contact-us' => 'home.pages.contact-us',
            'appointment' => 'home.pages.appointment',
            
            'blog' => 'home.pages.post',
            'faqs' => 'home.pages.faqs',
            'events' => 'home.pages.events',
            'terms-conditions'  => 'home.pages.terms-conditions',
            'privacy-policy'  => 'home.pages.privacy-policy',
        ];
       
        if (array_key_exists($slug, $pages)) {
            return view($pages[$slug]);
        }

        return view('home.errors.404');
        
        $specialPages = [
            'currently-selling',
            'closed-sales',
            'sold-out', 
            'upcoming-projects',
        ]; 
       
       
        // If slug does not match any defined page, return 404
        return view('home.errors.404');
    }

    private function generateReferralCode()
    {
        return strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));
    }

    private function fetchBanks()
    {
        $url = "https://api.paystack.co/bank";
        $secret_key = "YOUR_SECRET_KEY";

        // Make GET request to Paystack API using Guzzle HTTP client
        $client = new Client([
            'headers' => [
                'Authorization' => 'Bearer ' . $secret_key,
                'Accept' => 'application/json',
            ]
        ]);

        try {
            $response = $client->request('GET', $url);

            if ($response->getStatusCode() == 200) {
                $banks = json_decode($response->getBody())->data;

                // Sort banks alphabetically by name
                usort($banks, function ($a, $b) {
                    return strcmp($a->name, $b->name);
                });

                return $banks;
            }
        } catch (\Exception $e) {
            // Log or handle exception
            return [];
        }

        return [];
    }

}
