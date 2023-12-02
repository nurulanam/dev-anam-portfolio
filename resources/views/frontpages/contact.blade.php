@extends('layouts.front')
@section('extraMeta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
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
                            Contact With <span class="text-red-main">Me</span><span
                                class="text-red-main">.</span>
                        </h1>
                    </div>
                    <p class="banner-p text-center md:text-start text-lg font-medium text-white opacity-0 pt-5 xl:pe-48">
                        Get in touch today to discuss your project needs and embark on a journey towards a successful digital transformation.</p>
                    <a href="#contactFormSection" class="flex justify-center md:justify-start" data-scroll-to>
                        <button type="button" class="btn-red mt-12 opacity-0 group">Send A Message <span class="ms-1"><i
                                    class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button></a>
                </div>
                <div class="col-span-12 order-1 md:col-span-6 md:order-2 flex justify-center md:justify-end" data-scroll
                    data-scroll-speed="3">
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('/img/contact-banner-img.webp') }}" class="banner-avater opacity-0" alt="my portfolio">
                        <img class="absolute brand opacity-0 -bottom-6 -left-10" src="{{ asset('/img/brand.png') }}"
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

    {{-- contact section start  --}}
    <section class="contact-section min-h-screen flex items-center" id="contactFormSection" data-scroll data-scroll-section>
        <div class="container px-4 py-32 md:py-12">
            <div class="grid grid-cols-12 md:gap-4 items-center">
                <div class="col-span-12 md:col-span-6 text-white">
                    <form action="#" method="POST" class="space-y-6 text-center md:text-start" id="queryForm">
                        @honeypot
                        <div>
                            <input type="text" name="name" class="contact-input placeholder:text-white" placeholder="full name">
                        </div>
                        <div>
                            <input type="text" name="unique_data" id="uniqueInput" class="contact-input placeholder:text-white" placeholder="Your E mail">
                        </div>
                        <div>
                            <textarea name="message" rows="8" class="contact-input placeholder:text-white" placeholder="Your Message."></textarea>
                        </div>
                        <button type="button" class="btn-red group capitalize" id="sendMessageBtn">Send Message <span class="ms-2" ><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></button>
                    </form>
                </div>
                <div class="col-span-12 md:col-span-6 text-center md:text-end text-white pb-12  md:ps-[15%]">
                    <h2 class="h2 pb-6">Send A <span class="text-red-main">Message</span></h2>
                    <p class="pb-12">Whether you have a clear vision or need guidance, Dev Anam is here to help you bring your digital dreams to life. Fill out the form below to provide us with an overview of your project requirements, and we'll get back to you with a tailored approach to transform your online presence.</p>
                    <a href="{{ route('front.services') }}" class="btn-red group">Check Services <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </div>
            </div>
        </div>
        <div class="left-gredient absolute left-0 top-0 min-w-[30vw] lg:min-w-[20vw] min-h-screen bg-gradient-to-b from-red-main via-red-main/40 to-transparent -z-[1]"></div>
    </section>
    {{-- contact section end  --}}


@endsection
@section('extraJs')
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
