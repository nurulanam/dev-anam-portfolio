@extends('layouts.front')
@section('contents')
    <!-- banner section start -->
    <section
        class="banner min-h-screen flex items-center bg-gradient-to-tl from-black-main from-15%  via-[#222121] via-40%  to-gray-main to-80% bg-no-repeat bg-cover relative after:bg-[url('/img/grid.png')] after:bg-contain after:bg-repeat after:absolute after:left-0 after:top-0 after:bottom-0 after:right-0 after:h-full after:w-full">
        <div class="container px-4 py-32 md:py-12 z-[1]">
            <div class="grid grid-cols-12 gap-y-10 md:gap-y-0 md:gap-x-4 items-center">
                <div class="col-span-12 order-2 md:col-span-6 md:order-1">
                    <div class="banner-h text-center md:text-start">
                        <h1
                            class="opacity-0 text-white text-[33px] md:text-[35px] lg:text-[48px] xl:text-[60px] leading-tight font-semibold">
                            Web Development <br> <span class="text-red-main">Personalized</span> Solutions<span
                                class="text-red-main">.</span>
                        </h1>
                    </div>
                    <p class="banner-p text-center md:text-start text-lg font-medium text-white opacity-0 pt-5 xl:pe-48">
                        Elevate your online presence with my comprehensive web design and development services. With PHP,
                        Laravel and WordPress, I specialize in crafting tailored solutions for a seamless online experience.
                        Your digital success is my priority, ensuring SEO-friendly designs that captivate and engage your
                        audience.</p>
                    <a href="#allPackages" class="flex justify-center md:justify-start" data-scroll-to>
                        <button type="button" class="btn-red mt-12 opacity-0 group">Let’s Check <span class="ms-1"><i
                                    class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button></a>
                </div>
                <div class="col-span-12 order-1 md:col-span-6 md:order-2 flex justify-center md:justify-end" data-scroll
                    data-scroll-speed="3">
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('/img/service-hero.svg') }}" class="banner-avater opacity-0" alt="my portfolio">
                        <img class="absolute brand opacity-0 -bottom-12 -right-10" src="{{ asset('/img/brand.png') }}"
                            alt="brand">
                    </div>
                </div>
            </div>
        </div>
        <div
            class="circle-php absolute top-20 right-20 bg-gradient-to-b from-red-main shadow-2xl shadow-red-main text-center h-12 w-12 rounded-full opacity-0 z-[1]">
            <p class="leading-[48px] text-xs font-bold">PHP</p>
        </div>
        <div
            class="circle-laravel absolute hidden md:inline-block bottom-20 left-20 bg-gradient-to-b from-red-main shadow-2xl shadow-red-main text-center h-12 w-12 rounded-full opacity-0 z-[1]">
            <p class="leading-[48px] text-xs font-bold">Laravel</p>
        </div>
        <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black-main via-black-main/25 to-transparent min-h-[250px] -z-[1]">
        </div>
    </section>
    <!-- banner section end -->

    {{-- services section start  --}}
    <section class="services-section min-h-screen flex items-center relative" id="allPackages" data-scroll data-scroll-section>
        <div class="container px-4 py-32 md:py-12">
            <div class="grid grid-cols-12 md:gap-4 items-stretch">
                <div
                    class="col-span-12 md:col-span-6 lg:col-span-4 min-h-fit p-8 bg-gradient-to-b from-[#303030] via-[#20202056] to-transparent rounded-3xl">
                    <div class="flex flex-col h-full justify-between ">
                        <div class="service-full space-y-6">
                            <div class="service-header">
                                <h2 class="text-lg lg:text-3xl font-bold text-white">Web Starter</h2>
                            </div>
                            <div class="service-details pb-6 border-b-[1px] border-b-red-main">
                                <p class="text-white">This package is ideal for businesses that are just starting to develop
                                    their
                                    online presence or that have a basic website that needs to be updated.</p>
                            </div>
                            <div class="service-offers ps-4">
                                <ul class="text-white marker:text-red-main list-disc space-y-4">
                                    <li>Custom web design using HTML or WordPress</li>
                                    <li>Responsive design for seamless viewing across all devices</li>
                                    <li>Basic SEO optimization to enhance visibility in search engines.</li>
                                    <li>Cross-browser compatibility for a consistent user experience</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-10 space-y-6">
                            <div class="price flex items-center gap-4">
                                <div class="offer-price text-3xl font-bold text-red-main">$349</div>
                                <div class="discount text-lg font-medium text-white"><del>$500</del></div>
                            </div>
                            <a href="#" class="btn-red block text-center group">Contact To Order <span
                                    class="ms-1"><i
                                        class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-12 md:col-span-6 lg:col-span-4 min-h-fit p-8 space-y-6 bg-gradient-to-b from-red-main via-red-main/40 to-transparent rounded-3xl">
                    <div class="flex flex-col h-full justify-between ">
                        <div class="service-full space-y-6">
                            <div class="service-header">
                                <h2 class="text-lg lg:text-3xl font-bold text-white">Web Forge</h2>
                            </div>
                            <div class="service-details pb-6 border-b-[1px] border-b-red-main">
                                <p class="text-white">Designed for those who need a more custom-built and suave website. It
                                    includes all of the features of the Web Starter, plus the following:</p>
                            </div>
                            <div class="service-offers ps-4">
                                <ul class="text-white marker:text-red-main list-disc space-y-4">
                                    <li>Custom web application development using Laravel.</li>
                                    <li>Database integration and management.</li>
                                    <li>User authentication and authorization systems.</li>
                                    <li>API integration for seamless data exchange.</li>
                                </ul>
                            </div>

                        </div>
                        <div class="pt-10 space-y-6">
                            <div class="price flex items-center gap-4">
                                <div class="offer-price text-3xl font-bold text-red-main">$999</div>
                                <div class="discount text-lg font-medium text-white"><del>$1450</del></div>
                            </div>
                            <a href="#" class="btn-red block text-center group">Contact To Order <span
                                    class="ms-1"><i
                                        class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-12 lg:col-span-4 min-h-fit p-8 justify-items-stretch space-y-6 bg-gradient-to-b from-[#303030] via-[#20202056] to-transparent rounded-3xl">
                    <div class="flex flex-col h-full justify-between ">
                        <div class="service-full space-y-6">
                            <div class="service-header">
                                <h2 class="text-lg lg:text-3xl font-bold text-white">Commerce Peak</h2>
                            </div>
                            <div class="service-details pb-6 border-b-[1px] border-b-red-main">
                                <p class="text-white">This is a comprehensive e-commerce solution, seamlessly integrated
                                    with includes all of the features of the Web Starter, plus the following:.</p>
                            </div>
                            <div class="service-offers ps-4">
                                <ul class="text-white marker:text-red-main list-disc space-y-4">
                                    <li>Custom e-commerce website development using WooCommerce.</li>
                                    <li>User-friendly interface for easy product management.</li>
                                    <li>Product catalog management and inventory control.</li>
                                    <li>Secure payment gateway integration.</li>
                                    <li>Shipping and logistics integration.</li>
                                </ul>
                            </div>

                        </div>
                        <div class="pt-10 space-y-6">
                            <div class="price flex items-center gap-4">
                                <div class="offer-price text-3xl font-bold text-red-main">$1500</div>
                                <div class="discount text-lg font-medium text-white"><del></del></div>
                            </div>
                            <a href="{{ url('/contact?package=commerce_pack') }}"
                                class="btn-red block text-center group">Contact To Order <span class="ms-1"><i
                                        class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- services section end  --}}

    {{-- why me section start  --}}
    <section class="why-me min-h-screen flex items-center bg-black-main relative" data-scroll data-scroll-section>
        <div class="container px-4 py-32 md:py-12">
            <div class="grid grid-cols-12 md:gap-4 items-center">
                <div class="col-span-12 md:col-span-6 text-center md:text-start">
                    <h2 class="h2 text-white pb-6">Why My <br><span class="text-red-main">Services</span> Matter</h2>
                    <p class="text-white text-lg font-medium lg:pr-[30%] pb-12">My web design and development services are
                        the key to unlocking your brand's potential and achieving your online goals. With my expertise in
                        design, development, and SEO, I can craft a website that not only captures attention but also drives
                        results. Let me help you establish a digital presence that truly matters.</p>
                    <button class="btn-red group capitalize" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/nurulanam'});return false;">Book a time to talk <span class="ms-2"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button>
                </div>
                <div class="col-span-12 md:col-span-6 items-center">
                    <div id="accordion-color" data-accordion="collapse"
                        data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                        <h2 id="accordion-color-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 text-lg font-bold rtl:text-right text-white border border-b-0 border-gray-700 rounded-t-xl focus:ring-0 bg-gray-800 hover:bg-red-main hover:text-white gap-3"
                                data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                                aria-controls="accordion-color-body-1">
                                <span>Stand Out from the Crowd.</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                            <div class="p-5 border border-b-0 border-gray-700 bg-black-main">
                                <p class="mb-3 text-white"><b>Unleash Your Brand's Potential:</b> I craft captivating designs that capture attention, resonate with your audience, and propel your brand to new heights.</p>
                                <p class="mb-3 text-white"><b>Experience the Power of Innovation:</b> I embrace cutting-edge technologies and design trends to deliver websites that are not only visually stunning but also functionally exceptional.</p>
                                <p class="mb-3 text-white"><b>Your Vision, My Passion:</b> I collaborate closely with you to understand your unique vision and translate it into a digital masterpiece that exceeds your expectations.</p>
                            </div>
                        </div>
                        <h2 id="accordion-color-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 text-lg font-bold rtl:text-right text-white border border-b-0 border-gray-700 focus:ring-0 bg-gray-800 hover:bg-red-main hover:text-white gap-3"
                                data-accordion-target="#accordion-color-body-2" aria-expanded="true"
                                aria-controls="accordion-color-body-2">
                                <span>Expertise You Can Trust.</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                            <div class="p-5 border border-b-0 border-gray-700 bg-black-main">
                                <p class="mb-3 text-white"><b>A Master of Design:</b> With extensive experience in HTML, CSS, Tailwind CSS, Bootstrap, WordPress, and Elementor Pro, I possess the skills to bring your design dreams to life.</p>
                                <p class="mb-3 text-white"><b>Laravel and PHP Mastery:</b> I am proficient in Laravel and PHP, enabling me to develop dynamic and secure web applications that seamlessly integrate with your existing systems.</p>
                                <p class="mb-3 text-white"><b>AJAX Wizardry:</b> I leverage AJAX to create interactive and engaging user experiences that keep your visitors captivated and coming back for more.</p>
                            </div>
                        </div>
                        <h2 id="accordion-color-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 text-lg font-bold rtl:text-right text-white border border-b-0 border-gray-700 focus:ring-0 bg-gray-800 hover:bg-red-main hover:text-white gap-3"
                                data-accordion-target="#accordion-color-body-3" aria-expanded="true"
                                aria-controls="accordion-color-body-3">
                                <span>Partner with a True Professional.</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-2">
                            <div class="p-5 border border-b-0 border-gray-700 bg-black-main">
                                <p class="mb-3 text-white"><b>Unwavering Commitment:</b> I am dedicated to providing exceptional service, ensuring that your project is completed on time, within budget, and to your utmost satisfaction.</p>
                                <p class="mb-3 text-white"><b>Transparency and Trust:</b> I maintain open communication throughout the entire process, keeping you informed and involved every step of the way.</p>
                                <p class="mb-3 text-white"><b>A Passion for Perfection:</b> I approach each project with meticulous attention to detail, ensuring that every pixel and line of code is meticulously crafted.</p>
                            </div>
                        </div>
                         <h2 id="accordion-color-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 text-lg font-bold rtl:text-right text-white border border-b-0 border-gray-700 focus:ring-0 bg-gray-800 hover:bg-red-main hover:text-white gap-3"
                                data-accordion-target="#accordion-color-body-4" aria-expanded="true"
                                aria-controls="accordion-color-body-4">
                                <span>Invest in Your Digital Presence.</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-2">
                            <div class="p-5 border border-b-0 border-gray-700 bg-black-main">
                                <p class="mb-3 text-white"><b>A Website that Works:</b> My websites are not just visually stunning; they are also optimized for search engines and designed to convert visitors into loyal customers.</p>
                                <p class="mb-3 text-white"><b>A Foundation for Growth:</b> I build websites that are scalable and adaptable, ensuring that your online presence can grow alongside your business.</p>
                                <p class="mb-3 text-white"><b>A Return on Your Investment:</b> My services are an investment in your company's future, generating tangible results that will drive your success.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
      <div class="left-gredient absolute left-0 top-0 min-w-[30vw] lg:min-w-[20vw] min-h-full bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>

    </section>
    {{-- why me section end  --}}
@endsection
@section('extraJs')
    <!-- Calendly link widget begin -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

    <!-- Calendly link widget end -->
@endsection
