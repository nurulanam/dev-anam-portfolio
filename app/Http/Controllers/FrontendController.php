<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\JsonLd;

class FrontendController extends Controller
{
    public function index(): View
    {
        JsonLd::setTitle('Welcome to Dev Anam | Web Designer and Developer');
        JsonLd::setDescription('Discover how Dev Anam, a seasoned Web Designer and Developer, can elevate your brand\'s online presence.');


        SEOTools::setTitle('Welcome to Dev Anam | Web Designer and Developer');
        SEOTools::setDescription('Discover how Dev Anam, a seasoned Web Designer and Developer, can elevate your brand\'s online presence.');
        SEOTools::twitter()->setTitle('@dev_nurul_anam');
        SEOTools::twitter()->setDescription('Need a web designer and developer? Contact Dev Anam today!');
        SEOTools::opengraph()->setUrl('https://dev-anam.com');
        SEOTools::opengraph()->setTitle('Dev Anam | Web Designer and Developer');
        SEOTools::opengraph()->setDescription('Discover how Dev Anam, a seasoned Web Designer and Developer, can elevate your brand\'s online presence.');

        return view('frontpages.index');
    }
    public function portfolio(): View
    {
        JsonLd::setTitle('Dev Anam\'s Portfolio - Web Design and Development Projects');
        JsonLd::setDescription('Explore a diverse range of projects crafted using WordPress, Laravel, PHP, Tailwind CSS, Bootstrap, jQuery, and GSAP.');

        SEOTools::setTitle('Dev Anam\'s Portfolio - Web Design and Development Projects');
        SEOTools::setDescription('Explore a diverse range of projects crafted using WordPress, Laravel, PHP, Tailwind CSS, Bootstrap, jQuery, and GSAP.');
        SEOTools::twitter()->setTitle('@dev_nurul_anam');
        SEOTools::twitter()->setDescription('Check out Dev Anam\'s impressive portfolio of web design and development projects.');
        SEOTools::opengraph()->setUrl('https://dev-anam.com/portfolio');
        SEOTools::opengraph()->setTitle('Dev Anam\'s Portfolio - Web Design and Development Projects');
        SEOTools::opengraph()->setDescription('Explore a diverse range of projects crafted using WordPress, Laravel, PHP, Tailwind CSS, Bootstrap, jQuery, and GSAP.');

        return view('frontpages.portfolio');
    }
    public function services(): View
    {
        JsonLd::setTitle('Web Design and Development Services by Dev Anam');
        JsonLd::setDescription('Explore a spectrum of tailored web design and development services offered by Dev Anam. Let\'s drive your business growth together.');

        SEOTools::setTitle('Web Design and Development Services by Dev Anam');
        SEOTools::setDescription('Explore a spectrum of tailored web design and development services offered by Dev Anam. Let\'s drive your business growth together.');
        SEOTools::twitter()->setTitle('@dev_nurul_anam');
        SEOTools::twitter()->setDescription('Looking for top-notch web design and development services? Dev Anam has you covered.');
        SEOTools::opengraph()->setUrl('https://dev-anam.com/services');
        SEOTools::opengraph()->setTitle('Web Design and Development Services by Dev Anam');
        SEOTools::opengraph()->setDescription('Explore a spectrum of tailored web design and development services offered by Dev Anam. Let\'s drive your business growth together.');

        return view('frontpages.services');
    }
    public function contact(): View
    {
        JsonLd::setTitle('Contact Dev Anam - Web Designer and Developer');
        JsonLd::setDescription('Get in touch with Dev Anam, a seasoned web designer and developer, to discuss your project needs.');


        SEOTools::setTitle('Contact Dev Anam - Web Designer and Developer');
        SEOTools::setDescription('Get in touch with Dev Anam, a seasoned web designer and developer, to discuss your project needs.');
        SEOTools::twitter()->setTitle('@dev_nurul_anam');
        SEOTools::twitter()->setDescription('Need a web designer and developer? Contact Dev Anam today!');
        SEOTools::opengraph()->setUrl('https://dev-anam.com/contact');
        SEOTools::opengraph()->setTitle('Contact Dev Anam - Web Designer and Developer');
        SEOTools::opengraph()->setDescription('Get in touch with Dev Anam, a seasoned web designer and developer, to discuss your project needs.');

        return view('frontpages.contact');
    }

}
