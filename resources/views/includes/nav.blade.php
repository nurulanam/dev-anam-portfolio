<header class="px-4">
    <nav class="bg-red-main backdrop-blur-3xl shadow-lg fixed top-0 left-1/2 -translate-x-1/2 z-50 w-full flex justify-between max-w-md xl:max-w-3xl  mx-auto mt-4 px-6 md:px-12 py-3 md:py-5 rounded-full">
        <a href="{{ url('/') }}" class="logo text-white font-medium text-2xl">Logo</a>
        <ul class="flex justify-end items-center gap-5">
            <li>
                <a href="{{ url('/') }}" class="nav-list-item group">Home <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
            </li>
            <li>
                <a href="{{ url('/projects') }}" class="nav-list-item group">Projects <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
            </li>
            {{-- <li>
                <a href="" class="nav-list-item group">Services <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
            </li>
            <li>
                <a href="" class="nav-list-item group">Contact <span class="ms-1"><i class="fa-solid fa-arrow-up-right transition-all ease-linear group-hover:rotate-45"></i></span></a>
            </li> --}}
        </ul>
    </nav>
</header>
