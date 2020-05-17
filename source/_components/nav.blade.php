<nav x-data="{ openMenu: false }" class="text-gray-300 md:flex md:justify-between md:items-center">
    <div class="flex items-center justify-between px-4 py-3">
        <div>
        <nuxt-link to="/">Kusmayadi</nuxt-link>
        </div>

        <div class="md:hidden">
            <button type="button" @click="openMenu = !openMenu" class="hover:text-white focus:text-white focus:outline-none">
                <i x-show="!openMenu" class="fas fa-bars fill-current"></i>
                <i x-show="openMenu" class="fas fa-times fill-current"></i>
            </button>
        </div>
    </div>

    <div :class="{ 'hidden': !openMenu }" class="px-4 bg-gray-800 py-4 opacity-75 md:flex md:bg-transparent text-xs lg:text-sm">
        <a class="block lg:inline-block lg:ml-2 px-2 py-1 font-semibold hover:text-white focus:text-white" href="https://kusmayadi.com/work-experience"><i class="fas fa-briefcase mr-1"></i> Work Experience</a>
        <a class="block lg:inline-block lg:ml-2 px-2 py-1 font-semibold hover:text-white focus:text-white" href="https://kusmayadi.com/projects"><i class="fas fa-archive mr-1"></i> Projects</a>
        <a class="block lg:inline-block lg:ml-2 px-2 py-1 font-semibold hover:text-white focus:text-white" href="https://kusmayadi.com/open-source"><i class="fas fa-code mr-1"></i> Open Source</a>
        <a class="block lg:inline-block lg:ml-2 px-2 py-1 font-semibold hover:text-white focus:text-white" href="https://kusmayadi.com/tech-stack"><i class="fas fa-layer-group mr-1"></i> Tech Stack</a>
        <a class="block lg:inline-block lg:ml-2 px-2 py-1 font-semibold hover:text-white focus:text-white" href="/"><i class="fas fa-feather-alt mr-1"></i> Blog</a>
        <a class="block lg:inline-block lg:ml-2 px-2 py-1 font-semibold hover:text-white focus:text-white" href="https://kusmayadi.com/contact"><i class="far fa-envelope mr-1"></i> Contact</a>
    </div>
</nav>