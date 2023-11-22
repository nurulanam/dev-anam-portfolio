@extends('layouts.front')
@section('contents')
    <!-- banner section start -->
    <section
        class="banner min-h-screen flex items-center bg-gradient-to-tl from-black-main from-15%  via-[#222121] via-40%  to-gray-main to-80% bg-no-repeat bg-cover relative after:bg-[url('/img/grid.png')] after:bg-contain after:bg-repeat after:absolute after:left-0 after:top-0 after:bottom-0 after:right-0 after:-z-[1] after:h-full after:w-full"
        data-scroll data-scroll-section>
        <div class="container px-4 py-32 md:py-12">
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
            class="circle-php absolute top-20 right-20 bg-gradient-to-b from-red-main shadow-2xl shadow-red-main text-center h-12 w-12 rounded-full opacity-0">
            <p class="leading-[48px] text-xs font-bold">PHP</p>
        </div>
        <div
            class="circle-laravel absolute hidden md:inline-block bottom-20 left-20 bg-gradient-to-b from-red-main shadow-2xl shadow-red-main text-center h-12 w-12 rounded-full opacity-0">
            <p class="leading-[48px] text-xs font-bold">Laravel</p>
        </div>
        <div
            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black-main via-black-main/25 to-transparent min-h-[250px] -z-[1]">
        </div>
    </section>
    <!-- banner section end -->

    {{-- services section start  --}}
    <section class="services-section min-h-screen flex items-center" id="allPackages" data-scroll data-scroll-section>
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
                                <p class="text-white">Designed for those who need a more custom-built and suave website. It includes all of the features of the Web Starter, plus the following:</p>
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
                            <a href="#" class="btn-red block text-center group">Contact To Order <span class="ms-1"><i
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
                                <p class="text-white">This is a comprehensive e-commerce solution, seamlessly integrated with includes all of the features of the Web Starter, plus the following:.</p>
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
                            <a href="{{ url("/contact?package=commerce_pack") }}" class="btn-red block text-center group">Contact To Order <span class="ms-1"><i
                                        class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- services section end  --}}
@endsection
