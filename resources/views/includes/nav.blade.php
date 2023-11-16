<header class="px-4">
    <nav class="bg-red-main shadow-lg fixed top-0 left-1/2 -translate-x-1/2 z-50 w-full flex justify-between items-center max-w-md md:max-w-2xl xl:max-w-3xl mx-auto mt-4 px-6 md:px-12 py-3 md:py-5 rounded-full">
        <a href="{{ url('/') }}" class="logo text-white font-medium text-2xl">Logo</a>
        <button type="button" class="text-white block md:hidden" id="navbar-toggle"><i class="fa-solid fa-bars-staggered"></i></button>
        <div class="hidden absolute inset-0 top-12 md:flex md:items-center md:relative md:inset-auto md:top-auto w-full md:block md:w-auto" id="toggle-container">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4  rounded-lg bg-red-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 bg-white/10 backdrop-blur-2xl md:bg-transparent shadow-lg md:shadow-none">
                <li>
                    <a href="{{ url('/') }}" class="nav-list-item group">Home <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                    <a href="{{ url('/projects') }}" class="nav-list-item group">Projects <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                    <a href="{{ url('/#') }}" class="nav-list-item group">Services <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
                <li>
                    <a href="{{ url('/#') }}" class="nav-list-item group">Contact <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
                </li>
            </ul>
          </div>
    </nav>
</header>
