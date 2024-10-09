<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Download;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Profile;
use App\Models\Site;
use App\Models\Skills;
use App\Models\Testimonial;
use App\Models\WhatIMDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $WhatIMDo = WhatIMDo::all();
        $Education = Education::all()->sortByDesc('id');
        $Experience = Experience::all()->sortByDesc('id');
        $Client = Client::all();
        $Skills = Skills::all();
        $Porto = Portfolio::all();
        $PartOf = Portfolio::select('part_of')->groupBy('part_of')->get();
        // dd($PartOf);
        $Blog  = Blog::all();
        $Testimonial = Testimonial::all();
        $Download = Download::all();
        $Contact = Contact::first();
        $Media = DB::table('media')->first();
        $Site = Site::first();
        
        return view('index', compact('Site','profile', 'Media', 'WhatIMDo', 'Education', 'Experience', 'PartOf', 'Client', 'Skills', 'Porto', 'Blog', 'Testimonial', 'Download', 'Contact'));
    }
}
