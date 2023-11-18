<header class="px-4">
    <nav class="bg-red-main shadow-lg fixed top-0 left-1/2 -translate-x-1/2 z-50 w-full flex justify-between items-center max-w-md md:max-w-3xl xl:max-w-4xl mx-auto mt-4 px-6 md:px-12 py-3 md:py-5 rounded-full">
        <a href="{{ route('front.index') }}" class="logo text-white font-semibold text-2xl">Dev Anam</a>
        <button type="button" class="text-white block md:hidden" id="navbar-toggle"><i class="fa-solid fa-bars-staggered"></i></button>
        <div class="hidden absolute inset-0 top-12 md:flex md:items-center md:relative md:inset-auto md:top-auto w-full md:w-auto" id="toggle-container">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg bg-red-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 bg-white/10 backdrop-blur-2xl md:bg-transparent shadow-lg md:shadow-none">
                <li>
                    <a href="{{ route('front.index') }}" class="nav-list-item group">Welcome <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                    <a href="{{ route('front.portfolio') }}" class="nav-list-item group">My Portfolio <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                    <a href="{{ route('front.services') }}" class="nav-list-item group">What I Offer <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                    <a href="{{ url('/#') }}" class="nav-list-item group">Get In Touch <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
            </ul>
          </div>
    </nav>
</header>
