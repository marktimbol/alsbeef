<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	$pageTitle = 'Home';
    	return view('public.home', compact('pageTitle'));
    }

    public function about()
    {
    	$pageTitle = 'About Us';
    	return view('public.about', compact('pageTitle'));
    }

    public function contact()
    {
        $pageTitle = 'Contact Us';
        return view('public.contact', compact('pageTitle'));
    }

    public function media()
    {
        $pageTitle = 'Media';
        return view('public.media', compact('pageTitle'));
    }
}
