<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class FrontendController extends Controller
{
    public function index(): View
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription('');
        return view('frontpages.index');
    }
    public function projects(): View
    {
        SEOTools::setTitle('My work collection');
        return view('frontpages.projects');
    }
}
