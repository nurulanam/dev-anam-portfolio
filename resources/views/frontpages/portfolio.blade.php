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
                    My Digital<br> <span class="text-red-main">Portfolio</span> Masterpieces<span class="text-red-main">.</span>
                  </h1>
                </div>
                <p class="banner-p text-center md:text-start text-lg font-medium text-white opacity-0 pt-5 xl:pe-52">Dive into My Portfolio to experience a variety of projects, crafted with tools like WordPress, Figma, Laravel, PHP, Tailwind CSS, Bootstrap, jQuery, and GSAP. My portfolio exhibits my dedication to digital excellence and personalized service across multiple sectors.</p>
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

        <!-- All projects section start  -->
        <section class="min-h-screen bg-black-main relative" id="allProjects" data-scroll data-scroll-section>
            <div class="container py-28 px-4">
                {{-- all projects  --}}
                <div class="project-items">
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/third-estate-research-banner.webp') }}" alt="Third Estate Research">
                            </div>
                            <div class="project-header py-6">
                                <h2>Third Estate Research Application | PHP Laravel & WordPress Project</h2>
                            </div>
                            <div class="project-body">
                                <p>Discover the innovative Third Estate Research Application, a dynamic project combining PHP Laravel and WordPress. This powerful web application utilizes Bootstrap CSS to deliver a seamless user experience. Explore the cutting-edge solutions crafted for Third Estate Research.</p>
                                <div class="project-links">
                                    <a href="https://thirdestateresearch.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="#" class="btn-red" target="_blank">Behance <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/third-estate-research-logo.webp') }}" alt="Third Estate Research log">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/nathalie-hennebert-banner.webp') }}" alt="nathalie hennebert designs">
                            </div>
                            <div class="project-header py-6">
                                <h2>Nats Designs - Interior Designer Portfolio | WordPress Portfolio</h2>
                            </div>
                            <div class="project-body">
                                <p>Explore Nats Designs, a captivating portfolio of interior design projects crafted with WordPress. Discover the creative vision and attention to detail showcased in each project, bringing spaces to life with style and elegance. Experience the fusion of design and technology in Nats Designs' WordPress portfolio.</p>
                                <div class="project-links">
                                    <a href="https://thirdestateresearch.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="#" class="btn-red" target="_blank">Behance <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/nathalie-hennebert-logo.png') }}" alt="nathalie hennebert designs logo">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/qfoods-banner.webp') }}" alt="Qfoods Japanese Wagyu">
                            </div>
                            <div class="project-header py-6">
                                <h2>Qfoods - Japanese Wagyu Imports | Figma UI/UX to WordPress Conversion</h2>
                            </div>
                            <div class="project-body">
                                <p>Qfoods - Bridging Elegance: Transformed Figma UI/UX to WordPress for QFoods, a leading Japanese Wagyu importer. Immerse in a seamless digital journey that mirrors the exquisite quality of their products. Elevate your culinary experience with Qfoods' WordPress integration.</p>
                                <div class="project-links">
                                    <a href="https://www.qfoodswagyu.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/175335007/Resturant-Website-Figma-To-Wordpress" class="btn-red" target="_blank">Behance <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/qfoods-logo.png') }}" alt="Qfoods Japanese Wagyu logo">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/continental-luxury-banner.webp') }}" alt="Continental Luxury real estate">
                            </div>
                            <div class="project-header py-6">
                                <h2>Continental Luxury - Luxurious Real Estate Website Development</h2>
                            </div>
                            <div class="project-body">
                                <p>I transformed Continental Luxury's online presence with WordPress. I crafted a dynamic, user-friendly website to showcase their full-service general contracting and construction prowess, effectively reflecting their top-tier services. Witness the blend of aesthetics and functionality in web design!</p>
                                <div class="project-links">
                                    <a href="https://continentalluxury.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/172201441/Real-Estate-Construction-Company-Website-Design" class="btn-red" target="_blank">Behance <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/continental-luxury-logo.png') }}" alt="Continental Luxury real estate logo">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/ciab-bbq-banner.webp') }}" alt="Chicken In a Barrel BBQ">
                            </div>
                            <div class="project-header py-6">
                                <h2>Chicken In a Barrel BBQ - Figma to WordPress Conversion</h2>
                            </div>
                            <div class="project-body">
                                <p>Discover my Figma to WordPress conversion journey for Chicken In a Barrel, a renowned BBQ chicken company. I transformed their Figma design into a vibrant, user-friendly WordPress website, amplifying their online presence while showcasing their mouthwatering BBQ offerings.</p>
                                <div class="project-links">
                                    <a href="https://chickeninabarrel.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/175335007/Resturant-Website-Figma-To-Wordpress" class="btn-red" target="_blank">Behance <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/ciab-bbq-logo.png') }}" alt="Chicken In a Barrel BBQ logo">
                        </div>
                    </div>
                    <div class="project-item group">
                        <div class="relative">
                            <div class="project-img">
                                <img src="{{ asset('/img/projects/weprosys-ltd-banner.webp') }}" alt="Weprosys Ltd Agency Website">
                            </div>
                            <div class="project-header py-6">
                                <h2>Weprosys Ltd - Digital Agency Website Design</h2>
                            </div>
                            <div class="project-body">
                                <p>Unveiling a comprehensive website design for Weprosys Ltd, a premier digital services provider. By creating an engaging and responsive site, I've showcased their expertise in web development, digital marketing, and BPO services. Explore the fusion of functionality and aesthetics!.</p>
                                <div class="project-links">
                                    <a href="https://weprosys.com/" class="btn-red" target="_blank">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="https://www.behance.net/gallery/159846727/Weprosys-digital-marketing-agency-website-design" class="btn-red" target="_blank">Behance <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="project-bg-gradinet"></div>
                        </div>
                        <div class="project-logo-bg">
                            <img src="{{ asset('/img/projects/weprosys-ltd-logo.png') }}" alt="Weprosys Ltd Agency Website logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-gredient absolute left-0 top-0 min-w-[30vw] lg:min-w-[20vw] min-h-screen bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>
        </section>
        <!-- All projects section end  -->

@endsection
