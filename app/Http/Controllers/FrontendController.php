<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class FrontendController extends Controller
{
    public function index(): View
    {
        SEOTools::setTitle('Welcome to Dev Anam | Web Designer and Developer');
        SEOTools::setDescription('Discover how Dev Anam, a seasoned Web Designer and Developer, can elevate your brand\'s online presence.');
        SEOTools::twitter()->setTitle('@dev_nurul_anam');
        SEOTools::opengraph()->setUrl('https://dev-anam.com');
        return view('frontpages.index');
    }
    public function portfolio(): View
    {
        SEOTools::setTitle('Dev Anams\'s Portfolio - Web Design and Development Projects');
        SEOTools::setDescription('Explore a diverse range of projects crafted using WordPress, Laravel, PHP, Tailwind CSS, Bootstrap, jQuery, and GSAP.');
        SEOTools::twitter()->setTitle('@dev_nurul_anam');
        SEOTools::opengraph()->setUrl('https://dev-anam.com');
        return view('frontpages.portfolio');
    }
    public function services(): View
    {
        SEOTools::setTitle('Web Design and Development Services by Dev Anam – Web Design, Development');
        SEOTools::setDescription('Explore a spectrum of tailored web design and development services offered by Dev Anam. Let\'s drive your business growth together.');
        SEOTools::twitter()->setTitle('@dev_nurul_anam');
        SEOTools::opengraph()->setUrl('https://dev-anam.com');
        return view('frontpages.services');
    }
}
