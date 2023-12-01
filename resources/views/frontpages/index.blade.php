@extends('layouts.front')
@section('extraMeta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('contents')
    <!-- banner section start -->
    <section
      class="banner min-h-screen flex items-center bg-gradient-to-tl from-black-main from-15%  via-[#222121] via-40%  to-gray-main to-80% bg-no-repeat bg-cover relative after:bg-[url('/img/grid.webp')] after:bg-contain after:bg-repeat after:absolute after:left-0 after:top-0 after:bottom-0 after:right-0 after:-z-[1] after:h-full after:w-full"
      data-scroll data-scroll-section>
      <div class="container px-4 py-32 md:py-12">
        <div class="grid grid-cols-12 gap-y-4 md:gap-y-0 md:gap-x-4 items-center">
          <div class="col-span-12 order-2 md:col-span-6 md:order-1">
            <ul class="hashtags flex items-center justify-center md:justify-start gap-2 mb-4">
              <li class="text-white opacity-0"><span class="text-red-main">#</span>Web</li>
              <li class="text-white opacity-0"><span class="text-red-main">#</span>Designer</li>
              <li class="text-white opacity-0"><span class="text-red-main">#</span>Developer</li>
            </ul>
            <div class="banner-h text-center md:text-start">
               <h1 class="opacity-0 text-white text-5xl lg:text-[68px] xl:text-[76px] leading-tight font-semibold">
                Hello,<br> I'm <span class="text-red-main">Nurul</span> Anam<span class="text-red-main">.</span>
              </h1>
            </div>
            <p class="banner-p text-center md:text-start text-lg font-medium text-white opacity-0 pt-5 xl:pe-80">I take pride in my ability to deliver solutions that not only meet but exceed your expectations.</p>
            <a href="#aboutMe" class="flex justify-center md:justify-start" data-scroll-to>
              <button type="button" class="btn-red mt-12 opacity-0 group">Know More <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button></a>
            <ul class="banner-social-list flex items-center justify-center md:justify-start gap-4 mt-6">
              <li class="opacity-0 transition-all ease-linear hover:-translate-y-2 hover:scale-125">
                <a href="https://github.com/nurulanam/" target="_blank"><img src="{{ asset('/svg/github.svg') }}" alt="github"></a>
              </li>
              <li class="opacity-0 transition-all ease-linear hover:-translate-y-2 hover:scale-125">
                <a href="https://www.linkedin.com/in/nurul-anam/" target="_blank"><img src="{{ asset('svg/linkedin.svg') }}" alt="linkedin"></a>
              </li>
              <li class="opacity-0 transition-all ease-linear hover:-translate-y-2 hover:scale-125">
                <a href="https://www.behance.net/nurulanam" target="_blank"><img src="{{ asset('svg/behance.svg') }}" alt="behance"></a>
              </li>
              <li class="opacity-0 transition-all ease-linear hover:-translate-y-2 hover:scale-125">
                <a href="https://wa.me/+8801787419798" target="_blank"><img src="{{ asset('svg/whatsapp.svg') }}" alt="whatsapp"></a>
              </li>
              <li class="opacity-0 transition-all ease-linear hover:-translate-y-2 hover:scale-125">
                <a href="https://t.me/dev_anam" target="_blank"><img src="{{ asset('svg/telegram.svg') }}" alt="telegram"></a>
              </li>
              <li class="opacity-0 transition-all ease-linear hover:-translate-y-2 hover:scale-125">
                <a href="skype:live:nurulanam.bd?chat" target="_blank"><img src="{{ asset('svg/skypee.svg') }}" alt="skypee"></a>
              </li>
            </ul>
          </div>
          <div class="col-span-12 order-1 md:col-span-6 md:order-2 flex justify-center md:justify-end" data-scroll data-scroll-speed="3">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('/img/nurul-anam.webp') }}" class="banner-avater opacity-0" alt="nuru-lanam">
                <img class="absolute brand opacity-0 -bottom-14 -right-14" src="{{ asset('/img/brand.png') }}" alt="brand">
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

    <!-- about me section start -->
    <section class="min-h-screen flex items-center bg-black-main relative" id="aboutMe" data-scroll data-scroll-section>
      <div class="container py-12  px-4">
        <div class="grid grid-cols-12 gap-y-10 md:gap-y-0 md:gap-x-4 items-center">
          <div class="col-span-12 md:col-span-6" data-scroll data-scroll-speed="3">
            <div class="relative w-fit h-fit">
                <img src="{{ asset('/img/about-me.webp') }}" class="about-me-img opacity-0" alt="about-me">
                <div class="circle-life absolute top-20 left-80 bg-gradient-to-b from-red-main shadow-2xl shadow-red-main text-center h-12 w-12 rounded-full opacity-1">
                    <p class="leading-[48px] text-xs font-bold">Life</p>
                </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 text-center md:text-end text-white">
            <h2 class="h2 pb-12">About <span class="text-red-main">Me</span></h2>
            <div class="about-me-details text-lg font-medium text-gray-500 space-y-6 pb-12  md:ps-[15%]">
                <p>Renowned for crafting clean, modern, eye-catching designs paired with highly adaptable code, I'm committed to perpetual learning, staying ahead of trends, and ensuring impeccable functionality and responsiveness.</p>
                <p>I possess expertise in a range of technologies, including Laravel, PHP, JavaScript, jQuery, Tailwind CSS, and Bootstrap. This diverse skill set enables me to excel in various aspects of web development and design.</p>
            </div>
            <div class="skill-images flex justify-center flex-wrap md:justify-end items-center gap-4 pb-12">
              <img src="{{ asset('/img/html.png') }}" alt="html">
              <img src="{{ asset('/img/css.png') }}" alt="css">
              <img src="{{ asset('/img/js.png') }}" alt="js">
              <img src="{{ asset('/img/bootstrap.png') }}" alt="bootstrap css">
              <img src="{{ asset('/img/tailwind.png') }}" alt="tailwind css">
              <img src="{{ asset('/img/php.png') }}" alt="php">
              <img src="{{ asset('/img/laravel.png') }}" alt="laravel">
              <img src="{{ asset('/img/wordpress.png') }}" alt="wordpress">
              <img src="{{ asset('/img/github.png') }}" alt="github">
            </div>
            <a href="#recentProjectsSection" class="btn-red group" data-scroll-to>Recent Projects <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
          </div>
        </div>
      </div>
      <div class="left-gredient absolute left-0 top-0 min-w-[30vw] lg:min-w-[20vw] min-h-full bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>
    </section>
    <!-- about me section end  -->

    <!-- recent projects section start  -->
    <section class="recent-projects min-h-screen py-12 md:py-12 flex items-center bg-black-main relative" id="recentProjectsSection" data-scroll data-scroll-section>
      <div class="container px-4">
        <div class="recent-heading flex flex-col gap-3 md:flex-row  justify-between items-center pb-12">
          <h2 class="h2 text-white">Recent <span class="text-red-main">Projects</span></h2>
          <p class="text-white text-center text-lg font-medium md:text-end shrink-0">Crafting Excellence,<br> One Project at a Time</p>
        </div>

        <div class="flex flex-col first:border-t-2 first:border-red-main">
          <!-- recent projet items  -->
          <a href="https://thirdestateresearch.com/" target="_blank" class="group">
            <div class="recent-project-item group">
              <p class="recent-project-item-categories"><span class="recent-project-item-category">laravel</span><span class="recent-project-item-category">Bootstrap</span></p>
              <img src="{{ asset('/img/projects/third-estate-research-banner.webp') }}" class="recent-project-item-thumbnail" alt="third estate research">
              <div class="text-center md:text-end">
                <h4 class="text-[22px] font-semibold pb-3">Third Estate Research</h4>
                <p>A research company for collaborate participants to researchers.</p>
              </div>
            </div>
         </a>

          <a href="https://natsdesigns.com" target="_blank" class="group">
            <div class="recent-project-item group">
              <p class="recent-project-item-categories"><span class="recent-project-item-category">WordPress</span><span class="recent-project-item-category">Elementor Pro</span></p>
              <img src="{{ asset('/img/projects/nathalie-hennebert-banner.webp') }}" class="recent-project-item-thumbnail" alt="nats designs">
              <div class="text-center md:text-end">
                <h4 class="text-[22px] font-semibold pb-3">Nats Designs</h4>
                <p>A captivating portfolio of interior design projects crafted with WordPress.</p>
              </div>
            </div>
          </a>

          <a href="#" class="group">
            <div class="recent-project-item group">
              <p class="recent-project-item-categories"><span class="recent-project-item-category">laravel</span> <span class="recent-project-item-category">Bootstrap</span></p>
              <img src="{{ asset('/img/projects/qfoods-banner.webp') }}" class="recent-project-item-thumbnail" alt="qfood japanese wagyu">
              <div class="text-center md:text-end">
                <h4 class="text-[22px] font-semibold pb-3">Qfoods - Japanese Wagyu</h4>
                <p>Transformed Figma UI/UX to WordPress for QFoods.</p>
              </div>
            </div>
          </a>

          <a href="#" class="group">
            <div class="recent-project-item group">
              <p class="recent-project-item-categories"><span class="recent-project-item-category">wordpress</span> <span class="recent-project-item-category">Elementor</span></p>
              <img src="{{ asset('/img/projects/continental-luxury-banner.webp') }}" class="recent-project-item-thumbnail" alt="continental luxury real estate">
              <div class="text-center md:text-end">
                <h4 class="text-[22px] font-semibold pb-3">Continental Luxury Real Estate</h4>
                <p>I transformed Continental Luxury's online presence with WordPress.</p>
              </div>
            </div>
          </a>

          <a href="#" class="group">
            <div class="recent-project-item  group">
              <p class="recent-project-item-categories"><span class="recent-project-item-category">Figma</span> <span class="recent-project-item-category">wordpress</span></p>
              <img src="{{ asset('/img/projects/ciab-bbq-banner.webp') }}" class="recent-project-item-thumbnail" alt="chicken in a barrel">
              <div class="text-center md:text-end">
                <h4 class="text-[22px] font-semibold pb-3">Chicken In a Barrel BBQ</h4>
                <p>Figma to WordPress conversion journey for Chicken In a Barrel.</p>
              </div>
            </div>
          </a>

        </div>
        <div class="flex justify-center items-center">
          <a href="{{ route('front.portfolio') }}" class="btn-red mt-12 group">All projects <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
        </div>
      </div>
    </section>
    <!-- recent projects section end  -->

    <!-- testimonial section start  -->
    <section class="testimonial-section min-h-screen flex items-center relative after:bg-[url('/img/grid-white.webp')] after:opacity-40 after:bg-contain after:bg-repeat after:absolute after:left-0 after:top-0 after:bottom-0 after:right-0 after:-z-[3] after:h-full after:w-full" data-scroll data-scroll-section>
      <div class="container px-4">
        <div class="flex flex-col justify-end text-center md:text-end mb-12">
          <h2 class="h2 text-white pb-6">What they <span class="text-red-main">said</span></h2>
          <p class="leading-tight text-white text-lg font-medium">Impressions and Feedback of Satisfied Clients - Real Stories,<br> Real Experiences with Our Services.</p>
        </div>
          <div class="grid grid-cols-12 items-center gap-y-10 md:gap-y-0">
            <div class="col-span-12 order-2 md:order-1 md:col-span-8 xl:col-span-6">
              <div class="flex flex-col md:flex-row justify-center md:justify-start items-start md:gap-6">
                <div class="quote shrink-0 -mt-6">
                  <span class="text-red-main text-[64px]"><i class="fa-solid fa-quote-right fa-flip-horizontal"></i></span>
                </div>
                <div class="testimonial-content">
                  <div class="testimonial-items">
                    <div class="testimonial-item">
                        <p class="testimonial-text">I had the privilege of working with Nurul Anam, who served as our dedicated WordPress developer for the redesign of our company's website. Nurul's expertise and commitment to the project were exceptional. His technical skills and in-depth knowledge of WordPress allowed him to bring our vision to life seamlessly. Nurul's ability to understand our requirements and implement them effectively was impressive. </p>
                        <div class="testimonial-user-data py-6">
                          <h4 class="text-red-main text-xl font-medium leading-normal">Syed Shakil</h4>
                          <p class="text-white">CEO Weprosys Ltd.</p>
                        </div>
                      </div>
                      <div class="testimonial-item">
                        <p class="testimonial-text">I can confidently say that Nurul Anam has played a vital role in improving our website's visibility and helping us achieve our business objectives. I highly suggest Nurul to anyone looking for a professional and passionate website designer who can make their ideas a reality. Thank you very much for your excellent effort!</p>
                        <div class="testimonial-user-data py-6">
                          <h4 class="text-red-main text-xl font-medium leading-normal">Changis Khan Raju</h4>
                          <p class="text-white">CEO BDS Associate.</p>
                        </div>
                      </div>
                  </div>
                  <div class="testimonial-controller">
                    <span class="testimonial-controller-item controller-left"><i class="fa-solid fa-arrow-left-long"></i></span>
                    <span class="testimonial-controller-item controller-right"><i class="fa-solid fa-arrow-right-long"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 order-1 md:order-2 md:col-span-4 xl:col-span-6 justify-items-end">
              <div class="img-controllers">
                <div class="img-controller-item">
                  <img src="{{ asset('/img/testimonial/testimonial-client-1.png') }}" class="rounded-full object-cover" alt="sayed sakil">
                </div>
                <div class="img-controller-item">
                  <img src="{{ asset('/img/testimonial/testimonial-client-2.png') }}" class="rounded-full object-cover" alt=" changis khan raju">
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="left-gredient absolute right-0 top-0 min-w-[30vw] lg:min-w-[20vw] min-h-full bg-gradient-to-b from-transparent via-red-main/40 to-red-main -z-[1]"></div>
      <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black-main via-black-main/25 to-transparent min-h-[250px] -z-[2]"></div>
      <div class="absolute top-0 left-0 right-0 bg-gradient-to-t from-transparent via-black-main/40 to-black-main min-h-[250px] -z-[2]"></div>
    </section>
    <!-- testimonial section end  -->

    <!-- my style section start  -->
    <section class="my-style-section bg-gradient-to-l from-red-main via-red-main to-transparent py-12 relative overflow-x-hidden px-4" data-scroll data-scroll-section>
      <div class="my-style-items flex w-fit flex-auto items-center">
        <div class="my-style-item group"><span class="text-white duration-100 ease-linear">Crafting Visual Magic</span> <span class="text-black-main ps-4"><i class="fa-solid fa-circle-dot"></i></span></div>
        <div class="my-style-item group"><span class="text-stroke duration-100 ease-linear text-transparent group-hover:text-white">Elegance in Motion</span> <span class="text-black-main ps-4"><i class="fa-solid fa-circle-dot"></i></span></div>
        <div class="my-style-item group"><span class="text-white duration-100 ease-linear">Art in Every Pixel</span> <span class="text-black-main ps-4"><i class="fa-solid fa-circle-dot"></i></span></div>
        <div class="my-style-item group"><span class="text-stroke duration-100 ease-linear text-transparent group-hover:text-white">Dare to Be Different</span> <span class="text-black-main ps-4"><i class="fa-solid fa-circle-dot"></i></span></div>
        <div class="my-style-item group"><span class="text-white duration-100 ease-linear">Crafted to Perfection</span> <span class="text-black-main ps-4"><i class="fa-solid fa-circle-dot"></i></span></div>
        <div class="my-style-item group"><span class="text-stroke duration-100 ease-linear text-transparent group-hover:text-white">Boundless Artistry</span> <span class="text-black-main ps-4"><i class="fa-solid fa-circle-dot"></i></span></div>
      </div>
    </section>
    <!-- my style section end  -->

    <!-- sercvices section start  -->
    <section class="services-section min-h-screen flex items-center" id="secvices" data-scroll data-scroll-section>
      <div class="container px-4 py-12">
        <div class="grid grid-cols-12 gap-6 lg:gap-0">
          <div class="col-span-12 md:col-span-6">
            <div class="md:pt-[20vh] md:pb-[30vh] text-center md:text-start" data-scroll data-scroll-sticky data-scroll-target="#secvices">
              <h2 class="h2 text-white pb-2 md:pb-2">Bringing</h2>
              <h2 class="h2 text-red-main pb-6">Digital Dreams <span class="text-white">to Life</span></h2>
              <p class="services-desctiption text-gray-500 text-lg font-medium lg:pr-[35%] pb-12">I'm dedicated to crafting exceptional web solutions that not only meet your needs but also exceed your expectations. Whether it's creating stunning websites, optimizing user experiences, or developing robust web applications, I take pride in delivering results that bring smiles and satisfaction to my clients. Together, let's embark on a journey to elevate your online presence and make your digital visions come to life.</p>
              <a href="{{ route('front.services') }}" class="btn-red group inline-block">What I Offer <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 md:pt-[45vh] md:pb-[15vh]">
            <div class="service-items space-y-12">

              <div class="service-item group">
                <span class="service-item-icon"><i class="fa-light fa-display-code"></i></span>
                <h3 class="service-item-title"><span class="text-red-main group-hover:text-white">Front-End</span> Web Design</h3>
                <p class="text-white">Crafting visually appealing and responsive websites using HTML, CSS, and either Bootstrap or Tailwind CSS. Ensure your online presence looks great and functions flawlessly on all devices. Elevate your digital brand with a website that stands out and engages your audience.</p>
              </div>
              <div class="h-[2px] mt-12 lg:ms-[30%] bg-gradient-to-l from-red-main to-transparent"></div>

              <div class="service-item group">
                <span class="service-item-icon"><i class="fa-brands fa-wordpress-simple"></i></span>
                <h3 class="service-item-title"><span class="text-red-main group-hover:text-white">WordPress</span> Design Wizardry</h3>
                <p class="text-white">Unlocking WordPress's potential with Elementor Pro, I craft visually stunning websites that engage and captivate your audience, ensuring seamless and responsive designs. Whether you're embarking on a new project or seeking a site makeover, I'm dedicated to making your online presence truly stand out.</p>
              </div>
              <div class="h-[2px] mt-12 lg:ms-[30%] bg-gradient-to-l from-red-main to-transparent"></div>

              <div class="service-item group">
                <span class="service-item-icon"><i class="fa-brands fa-laravel"></i></span>
                <h3 class="service-item-title"><span class="text-red-main group-hover:text-white">PHP & Laravel</span> Web Apps</h3>
                <p class="text-white">I develop feature-rich, scalable, and user-friendly web applications that cater to your specific needs. Whether you're looking to build a new project or enhance an existing one, I'm here to create web applications that are both functional and visually engaging.</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- sercvices section end  -->

    <!-- case study section start  -->
    <section class="case-study-section min-h-screen flex items-center bg-gradient-to-b from-red-main via-red-main/70 to-black-main mx-0 md:mx-[15%] lg:mx-[30%] relative after:bg-[url('/img/grid.webp')] after:opacity-40 after:bg-contain after:bg-repeat after:absolute after:left-0 after:top-0 after:bottom-0 after:right-0 after:-z-[3] after:h-full after:w-full" data-scroll data-scroll-section>
        <div class="container px-4 py-12 ">
            <h2 class="h2 text-white text-center pb-6">A Journey of <span class="text-black-main">Digital Impact</span></h2>
            <p class="max-w-2xl text-white text-lg text-center pb-12 font-medium mx-auto">Experience the power of 'Impactful Case in Motion' as it encapsulates a singular, remarkable success story in a visual narrative that leaves a lasting impression.</p>
            <div class="case-study-video text-center">
                <iframe class="max-w-4xl max-h-[50vh] h-72 md:min-h-[450px] w-full mx-auto rounded-3xl border-8 border-gray-900 shadow-lg shadow-red-900" src="https://www.youtube.com/embed/iqdTawJQN8w?si=3Jz7Mh58l81oAoZj?rel=0&controls=0&disablekb=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  data-scroll data-scroll-speed="2"></iframe>
            </div>
            <div class="pt-12 text-center">
                <button class="btn-red group capitalize" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/nurulanam'});return false;">Book a time to talk <span class="ms-2"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button>
            </div>
        </div>
    </section>
    <!-- case study section end  -->

    <!-- contact section start  -->
    <section class="contact-section min-h-[100vh] flex items-center bg-black-main" data-scroll data-scroll-section>
        <div class="container px-4 py-12">
            <div class="grid grid-cols-12 gap-y-10 md:gap-y-0 md:gap-x-4 items-center">
                <div class="col-span-12 order-2 md:order-1 md:col-span-6">
                    <h2 class="h2 text-white text-center md:text-start pb-12">Say <span class="text-red-main">Hi</span>!</h2>
                    <form action="#" method="POST" class="space-y-6 text-center md:text-start" id="queryForm">
                        @honeypot
                        <div>
                            <input type="text" name="name" class="contact-input" placeholder="full name">
                        </div>
                        <div>
                            <input type="text" name="unique_data" id="uniqueInput" class="contact-input" placeholder="Your E mail">
                        </div>
                        <div>
                            <textarea name="message" rows="8" class="contact-input" placeholder="Your input is valuable to me. Whether you have questions, ideas, or simply want to connect, don't hesitate to reach out. I'm here to listen and assist you on your journey."></textarea>
                        </div>
                        <button type="button" class="btn-red group capitalize" id="sendMessageBtn">Send Message <span class="ms-2" ><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button>
                    </form>
                </div>
                <div class="col-span-12 md:col-span-6 order-1 md:order-2 flex justify-center md:justify-end" data-scroll data-scroll-speed="3">
                    <div class="relative w-fit h-fit">
                        <img class="contact-img opacity-0" src="{{  asset('/img/contact-me.webp') }}" alt="contact me" >
                        <img class="contact-circle absolute -bottom-14 -right-14" src="{{ asset('/img/lets-connect-circle.png') }}" alt="lets connect circle">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end  -->

@endsection
@section('extraJs')
    <!-- Calendly link widget begin -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

    <!-- Calendly link widget end -->


    <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>

    <script>
        const emailInput = document.getElementById('uniqueInput');
        const ipAddress = '';
        const sendMessageBtn = document.getElementById('sendMessageBtn');

        const timeLimit = 300000;
        let lastSubmissionTime = localStorage.getItem('lastSubmissionTime') ? parseInt(localStorage.getItem('lastSubmissionTime')) : 0;

        emailInput.addEventListener('keyup', () => {
            const emailValue = emailInput.value.trim();

            // Regular expression for email validation
            const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            const errorMessages = document.querySelectorAll('#uniqueInput + span');
            for (const errorMessage of errorMessages) {
                errorMessage.parentNode.removeChild(errorMessage);
            }
            if (!emailRegex.test(emailValue)) {
                // Display error message
                const errorMessage = document.createElement('span');
                errorMessage.textContent = 'Please enter a valid email address.';
                errorMessage.style.color = '#f44336';

                emailInput.parentNode.appendChild(errorMessage);
                sendMessageBtn.disabled = true;
            } else {
                // Remove any existing error message
                const errorMessages = document.querySelectorAll('#uniqueInput + span');
                for (const errorMessage of errorMessages) {
                    errorMessage.parentNode.removeChild(errorMessage);
                }
                sendMessageBtn.disabled = false;
            }
        });

        sendMessageBtn.addEventListener('click', () => {
            sendMessageBtn.disabled = true;

            const currentTime = Date.now();

            if (currentTime - lastSubmissionTime < timeLimit) {
                const timeRemaining = Math.floor((timeLimit - (currentTime - lastSubmissionTime)) / 1000);
                alert(`Please wait ${timeRemaining} seconds to submit another message.`);
                sendMessageBtn.disabled = false;
                return;
            }

            if (!emailInput.value.trim()) {
                alert('Please enter an email address.');
                sendMessageBtn.disabled = false;
                return;
            }


            // Submit form data via AJAX
            $.ajax({
                url: "/query-mail",
                method: "POST",
                data: $('#queryForm').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token
                },
                success: function(response) {
                    $('#queryForm input[type="text"]').val('');
                    $('#queryForm textarea').val('');
                    alert('Your message has been sent successfully.');

                    lastSubmissionTime = currentTime;
                    localStorage.setItem('lastSubmissionTime', lastSubmissionTime);
                    sendMessageBtn.disabled = false;
                },
                error: function(error) {
                    sendMessageBtn.disabled = false;
                    // console.error('Error sending message:', error);
                    alert('An error occurred while sending your message. Please try again later.');
                }
            });
        });

    </script>
@endsection
