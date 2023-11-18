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
                <h1 class="opacity-0 text-white text-[33px] md:text-[35px] lg:text-[48px] xl:text-[60px] leading-tight font-semibold">
                    Web Development <br> <span class="text-red-main">Personalized</span> Solutions<span class="text-red-main">.</span>
                  </h1>
                </div>
                <p class="banner-p text-center md:text-start text-lg font-medium text-white opacity-0 pt-5 xl:pe-48">Elevate your online presence with my comprehensive web design and development services. With PHP, Laravel and WordPress, I specialize in crafting tailored solutions for a seamless online experience. Your digital success is my priority, ensuring SEO-friendly designs that captivate and engage your audience.</p>
                <a href="#allProjects" class="flex justify-center md:justify-start" data-scroll-to>
                  <button type="button" class="btn-red mt-12 opacity-0 group">Let’s Check <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button></a>
              </div>
              <div class="col-span-12 order-1 md:col-span-6 md:order-2 flex justify-center md:justify-end" data-scroll data-scroll-speed="3">
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('/img/my-portfolio_banner-img.webp') }}" class="banner-avater opacity-0" alt="my portfolio">
                    <img class="absolute brand opacity-0 -bottom-8 -left-10" src="{{ asset('/img/brand.png') }}" alt="brand">
                </div>
              </div>
            </div>
          </div>
          <div class="circle-php absolute top-20 right-20 bg-gradient-to-b from-red-main shadow-2xl shadow-red-main text-center h-12 w-12 rounded-full opacity-0" >
            <p class="leading-[48px] text-xs font-bold">PHP</p>
          </div>
          <div class="circle-laravel absolute hidden md:inline-block bottom-20 left-20 bg-gradient-to-b from-red-main shadow-2xl shadow-red-main text-center h-12 w-12 rounded-full opacity-0">
            <p class="leading-[48px] text-xs font-bold">Laravel</p>
          </div>
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black-main via-black-main/25 to-transparent min-h-[250px] -z-[1]"></div>
        </section>
        <!-- banner section end -->

@endsection
