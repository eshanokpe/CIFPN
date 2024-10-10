<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Project;
use App\Models\DropdownItem;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Service;


class PagesController extends Controller
{
   
    
    public function index($slug)
    {
        $pages = [
            'about-us' => 'home.pages.aboutUs.about',
            'vision' => 'home.pages.aboutUs.vision',
            'mission' => 'home.pages.aboutUs.mission',
            'core-values' => 'home.pages.aboutUs.core-values',
            'solutions' => 'home.pages.solutions.solutions',
            'industries' => 'home.pages.industries.industries',
            'social-impact' => 'home.pages.social-impact',
            'careers' => 'home.pages.careers',
            'contact-us' => 'home.pages.contact-us',
            'appointment' => 'home.pages.appointment',
            'blog' => 'home.pages.post',
            'faq' => 'home.pages.faq',
            'events' => 'home.pages.events',
            'terms-conditions' => 'home.pages.terms-conditions',
            'privacy-policy' => 'home.pages.privacy-policy',
        ];
    
        $servicesPages = [
            'digital-transformation',
            'systems-integration',
            'cloud-solutions',
            'iot-and-automation-solutions',
            'data-analytics-ai-solutions',
            'enterprise-resource-planning-erp',
            'cybersecurity-solutions'
        ];
        $industriesPages = [
            'telecommunications',
            'systems-integration',
            'cloud-solutions',
            'iot-and-automation-solutions',
            'data-analytics-ai-solutions',
            'enterprise-resource-planning-erp',
            'cybersecurity-solutions'
        ];
    
        if (array_key_exists($slug, $pages)) {
            return view($pages[$slug]);
        }

        if (in_array($slug, $industriesPages)) {
            $solution = DropdownItem::where('slug', $slug)->first();
    
            if (!$solution) {
                return view('home.errors.404'); 
            }
    
            $industriesItem = Industries::where('title', $solution->name)->first();
    
            if (!$industriesItem) {
                return view('home.errors.404'); 
            }
    
            $relatedIndustries = Industries::where('id', '!=', $industriesItem->id)
                                ->latest()
                                ->get();
    
            return view('home.pages.industries.industries-details', compact('industriesItem', 'relatedIndustries'));
        }
    
        if (in_array($slug, $servicesPages)) {
            $solution = DropdownItem::where('slug', $slug)->first();
    
            if (!$solution) {
                return view('home.errors.404'); 
            }
    
            $solutionItem = Service::where('title', $solution->name)->first();
    
            if (!$solutionItem) {
                return view('home.errors.404'); 
            }
    
            $relatedSolutions = Service::where('id', '!=', $solutionItem->id)
                                ->latest()
                                ->get();
    
            return view('home.pages.solutions.solution-details', compact('solutionItem', 'relatedSolutions'));
        }
    
        return view('home.errors.404');
    }
    

  

}
