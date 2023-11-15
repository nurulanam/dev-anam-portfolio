<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vite App</title>
  @vite('resources/js/app.js')
</head>

<body class="overflow-x-hidden bg-dark-main">
    <main>
        <header class="px-4">
            <nav class="bg-red-main backdrop-blur-3xl shadow-lg fixed top-0 left-1/2 -translate-x-1/2 z-50 w-full flex justify-between xl:max-w-3xl max-w-md mx-auto mt-4 px-6 md:px-12 py-3 md:py-5 rounded-full">
              <a href="{{ url('/') }}" class="logo text-white font-medium text-2xl">Logo</a>
              <ul class="flex justify-end items-center gap-5">
                <li>
                  <a href="{{ url('/projects') }}" class="nav-list-item group">Projects <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                  <a href="" class="nav-list-item group">Services <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                  <a href="" class="nav-list-item group">Contact <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
              </ul>
            </nav>
          </header>
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

        <section class="min-h-screen bg-black-main relative" id="allProjects" data-scroll data-scroll-section>
            <div class="container py-28 px-4">
                <div class="project-items grid grid-cols-12 gap-y-10 md:gap-y-6 gap-6 items-stretch">
                    <div class="project-item translate-y-0 opacity-100 col-span-12 md:col-span-6 lg:col-span-4 overflow-hidden p-4 pb-6 group rounded-lg bg-gradient-to-tl from-black-main from-15%  via-[#222121] via-40%  to-gray-main to-80% backdrop-blur-sm space-y-4 transition-all ease-linear">
                        <div class="relative">
                            <div class="card-img rounded-lg overflow-hidden">
                                <img class="shadow-md group-hover:scale-110 transition-all ease-linear" src="{{ asset('/img/bannergredient1.png') }}" alt="">
                            </div>
                            <div class="card-header py-6">
                                <h3 class="text-[26px] font-semibold text-white leading-tight">NH: Interior Designer Portfolio</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-white leading-6">NH Interior Design's Personal Brand Portfolio Website, built with WordPress and Elementor Pro, beautifully represents exceptional interior design expertise. The site showcases a unique style and vision, demonstrating the seamless integration of design and technology.</p>
                                <div class="links flex jusity-content-start items-center gap-x-4 pt-6">
                                    <a href="#" class="btn-red">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="#" class="btn-red">Behance.Net <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="absolute -right-4 -top-4 w-28 h-full bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>
                        </div>
                        <div class="absolute rounded-lg bg-gradient-to-tl from-red-main from-15%  via-transparent via-40% to-transparent to-80% flex items-center transition-all ease-linear opacity-0 group-hover:opacity-100 w-24 h-24 right-0 bottom-0">
                            <img class="-rotate-45 z-[2]" src="{{ asset('/img/projects/oneStopLogo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="project-item translate-y-0 opacity-100 col-span-12 md:col-span-6 lg:col-span-4 overflow-hidden p-4 pb-6 group rounded-lg bg-gradient-to-tl from-black-main from-15%  via-[#222121] via-40%  to-gray-main to-80% backdrop-blur-sm space-y-4 transition-all ease-linear">
                        <div class="relative">
                            <div class="card-img rounded-lg overflow-hidden">
                                <img class="shadow-md group-hover:scale-110 transition-all ease-linear" src="{{ asset('/img/bannergredient1.png') }}" alt="">
                            </div>
                            <div class="card-header py-6">
                                <h3 class="text-[26px] font-semibold text-white leading-tight">NH: Interior Designer Portfolio</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-white leading-6">NH Interior Design's Personal Brand Portfolio Website, built with WordPress and Elementor Pro, beautifully represents exceptional interior design expertise. The site showcases a unique style and vision, demonstrating the seamless integration of design and technology.</p>
                                <div class="links flex jusity-content-start items-center gap-x-4 pt-6">
                                    <a href="#" class="btn-red">Live Preview <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                    <a href="#" class="btn-red">Behance.Net <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear"></i></span></a>
                                </div>
                            </div>
                            <div class="absolute -right-4 -top-4 w-28 h-full bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>
                        </div>
                        <div class="absolute rounded-lg bg-gradient-to-tl from-red-main from-15%  via-transparent via-40% to-transparent to-80% flex items-center transition-all ease-linear opacity-0 group-hover:opacity-100 w-24 h-24 right-0 bottom-0">
                            <img class="-rotate-45 z-[2]" src="{{ asset('/img/projects/oneStopLogo.png') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="left-gredient absolute left-0 top-0 min-w-[30vw] lg:min-w-[20vw] min-h-screen bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>
        </section>
        </main>

        <!-- Calendly link widget begin -->
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

        <!-- Calendly link widget end -->
</body>

</html>
