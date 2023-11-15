@extends('layouts.front')
@section('contents')
        <!-- banner section start -->
        <section
          class="banner min-h-screen py-24 md:py-12 flex items-center bg-gradient-to-tl from-black-main from-15%  via-[#222121] via-40%  to-gray-main to-80% bg-no-repeat bg-cover relative after:bg-[url('/img/grid.png')] after:bg-contain after:bg-repeat after:absolute after:left-0 after:top-0 after:bottom-0 after:right-0 after:-z-[1] after:h-full after:w-full"
          data-scroll data-scroll-section>
          <div class="container px-4">
            <div class="grid grid-cols-12 gap-y-10 md:gap-y-0 md:gap-x-4 items-center">
              <div class="col-span-12 order-2 md:col-span-6 md:order-1">
                <div class="banner-h text-center md:text-start">
                  <h1 class="opacity-0 text-white text-5xl lg:text-[80px] leading-tight font-semibold">My</h1>
                  <h1 class="opacity-0 text-white text-5xl lg:text-[80px] leading-tight font-semibold"><span class="text-red-main">Work</span> Collection<span class="text-red-main">.</span></h1>
                </div>
                <p class="banner-p text-center md:text-start text-lg font-medium text-white opacity-0 pt-5 xl:pe-52">Here are some web projects that demonstrate my dedication to quality and innovation. I'm thrilled to share my work in this ever-changing showcase, which includes anything from responsive site designs to interactive web apps.</p>
                <a href="#allProjects" class="flex justify-center md:justify-start" data-scroll-to>
                  <button type="button" class="btn-red mt-12 opacity-0 group">Let’s Check <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button></a>
              </div>
              <div class="col-span-12 order-1 md:col-span-6 md:order-2 flex justify-center md:justify-end" data-scroll data-scroll-speed="3">
                <div class="relative w-fit h-fit">
                    <img src="{{ asset('/img/projects-banner-img.png') }}" class="banner-avater opacity-0" alt="">
                    <img class="absolute brand opacity-0 -bottom-8 -left-10" src="{{ asset('/img/brand.png') }}" alt="">
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

        <!-- All projects section start  -->
        <section class="min-h-screen bg-black-main relative" id="allProjects" data-scroll data-scroll-section>
            <div class="container py-28 px-4">
                {{-- all projects  --}}
                <div class="project-items">
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/nathalie-hennebert-banner.png') }}" alt="">
                            </div>
                            <div class="project-header py-6">
                                <h2>NH: Interior Designer Portfolio</h2>
                            </div>
                            <div class="project-body">
                                <p>Natsdesigns Personal Brand Portfolio Website, built with WordPress and Elementor Pro, beautifully represents exceptional interior design expertise. The site showcases a unique style and vision, demonstrating the seamless integration of design and technology.</p>
                                <div class="project-links">
                                    <a href="https://natsdesigns.com" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/183755053/NH-Interior-Design-Personal-Brand-Portfolio-Website" class="btn-red" target="_blank">Behance.Net <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/nathalie-hennebert-logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/qfoods-banner.png') }}" alt="">
                            </div>
                            <div class="project-header py-6">
                                <h2>Qfoods - Figma UI/UX To WordPress</h2>
                            </div>
                            <div class="project-body">
                                <p>Natsdesigns Personal Brand Portfolio Website, built with WordPress and Elementor Pro, beautifully represents exceptional interior design expertise. The site showcases a unique style and vision, demonstrating the seamless integration of design and technology.</p>
                                <div class="project-links">
                                    <a href="https://www.qfoodswagyu.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/175335007/Resturant-Website-Figma-To-Wordpress" class="btn-red" target="_blank">Behance.Net <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/qfoods-logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/ciab-bbq-banner.png') }}" alt="">
                            </div>
                            <div class="project-header py-6">
                                <h2>CIAB BBQ- Figma To Wordpress</h2>
                            </div>
                            <div class="project-body">
                                <p>Natsdesigns Personal Brand Portfolio Website, built with WordPress and Elementor Pro, beautifully represents exceptional interior design expertise. The site showcases a unique style and vision, demonstrating the seamless integration of design and technology.</p>
                                <div class="project-links">
                                    <a href="https://chickeninabarrel.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/175335007/Resturant-Website-Figma-To-Wordpress" class="btn-red" target="_blank">Behance.Net <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/ciab-bbq-logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/continental-luxury-banner.png') }}" alt="">
                            </div>
                            <div class="project-header py-6">
                                <h2>Real Estate Company Website Design</h2>
                            </div>
                            <div class="project-body">
                                <p>Natsdesigns Personal Brand Portfolio Website, built with WordPress and Elementor Pro, beautifully represents exceptional interior design expertise. The site showcases a unique style and vision, demonstrating the seamless integration of design and technology.</p>
                                <div class="project-links">
                                    <a href="https://continentalluxury.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/172201441/Real-Estate-Construction-Company-Website-Design" class="btn-red" target="_blank">Behance.Net <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/continental-luxury-logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/weprosys-ltd-banner.png') }}" alt="">
                            </div>
                            <div class="project-header py-6">
                                <h2>Weprosys Ltd: Agency Website Design</h2>
                            </div>
                            <div class="project-body">
                                <p>Natsdesigns Personal Brand Portfolio Website, built with WordPress and Elementor Pro, beautifully represents exceptional interior design expertise. The site showcases a unique style and vision, demonstrating the seamless integration of design and technology.</p>
                                <div class="project-links">
                                    <a href="https://weprosys.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/159846727/Weprosys-digital-marketing-agency-website-design" class="btn-red" target="_blank">Behance.Net <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/weprosys-ltd-logo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-gredient absolute left-0 top-0 min-w-[30vw] lg:min-w-[20vw] min-h-screen bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>
        </section>
        <!-- All projects section end  -->

@endsection
