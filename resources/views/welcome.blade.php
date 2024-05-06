<x-default-layout>
    {{-- Navbar Start from here --}}
    <nav
        class="bg-red-800 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 animate__animated animate__fadeInDown">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://demakepsmg.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('/storage/logo_dema.webp') }}" class="h-8" alt="Si Dema Keperawatan Semarang">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ route('aspirasi') }}"
                    class="text-red-800 bg-white hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Salurkan Aspirasi</a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-red-800 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="https://demakepsmg.com/"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                    </li>
                    @foreach ($getNavbar as $navbar)
                    <li>
                        <a href="{{ $navbar->url }}"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{$navbar->label}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    {{-- Navbar End --}}

    {{-- Welcome Page Start Here --}}
    <section class="bg-gradient-to-b from-red-200 to-transparent transition-all rounded-lg dark:bg-gray-900">
        <div class="flex">
            <div class="flex-none w-20 container px-20 py-40">
                <div class="text-center">
                    <img class="h-40 w-40 max-w-lg d-block animate__animated animate__fadeInLeft"
                        src="{{ asset('/storage/logo.webp') }}" alt="Dema Poltekkes">
                </div>
            </div>
            <div class="flex-1 w-64 container px-32 py-40">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white animate__animated animate__fadeInUp">
                    DEWAN MAHASISWA KEPERAWATAN</h1>
                <h2 class="text-4xl font-extrabold dark:text-white animate__animated animate__fadeInUp">Politeknik
                    Kesehatan Semarang</h2>
                <p class="mx-auto my-4 text-lg text-gray-500 line-clamp-5 animate__animated animate__fadeInUp">
                    Dewan Mahasiswa Keperawatan Semarang merupakan lembaga legislatif di bawah Dewan Permusyawaratan
                    Mahasiswa yang memiliki tugas dan wewenang untuk menyalurkan dan menindaklanjuti aspirasi civitas
                    akademika keperawatan semarang, pengawasan Himpunan Mahasiswa, dan advokasi persidangan di Program
                    Studi Keperawatan Semarang.
                </p>
                <a href="{{ route('aspirasi') }}"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-red-800 rounded-lg hover:bg-white hover:text-red-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 animate__animated animate__fadeInUp">
                    Salurkan Aspirasi
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    {{-- Welcome Page End --}}

    {{-- Liputan Start Here --}}
    <section class="bg-white dark:bg-gray-900" id="liputan">
        <div class="container px-6 py-5 mx-auto">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Liputan Dema</h1>
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-3">
                @forelse ($posts as $post)
                    @if ($post->blog_category_id === 2)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-delay='200'>
                            <img class="rounded-t-lg" src="{{ $post->banner_url }}" alt="{{ $post->title }}" />
                            <div class="p-5">
                                <p class="mt-3 text-sm text-red-800">
                                    <time>{{ $post->updated_at->format('D, m, Y') }}</time>
                                </p>
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-800 dark:text-white">
                                        {{ $post->title }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-5">
                                    {{ $post->excerpt }}</p>
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-800 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                @empty
                    <h1 class="font-semibold italic text-sm text-gray-500">
                        There aren't post to show
                    </h1>
                @endforelse
            </div>
            <div class= "grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2" data-aos="zoom-in">
                {{ $posts->links() }}
            </div>
    </section>
    {{-- Liputan End --}}

    {{-- Pengumuman Start Here --}}
    <section class="bg-white dark:bg-gray-900" id="pengumuman">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Pengumuman</h1>
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2" data-aos="zoom-in" data-aos-delay="300">
                @forelse ($posts as $post)
                    @if ($post->blog_category_id === 3)
                        <a href="{{ route('posts.show', $post->slug) }}"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                src="{{ $post->banner_url }}" alt="{{ $post->title }}">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->title }}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                                    {{ $post->excerpt }}</p>
                            </div>
                        </a>
                    @endif
                @empty
                @endforelse
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2" data-aos="zoom-in">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
    {{-- Pengumuman End --}}

    {{-- Struktur Organisasi --}}
    <section class="bg-white dark:bg-gray-900" id="organisasi">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white"
                    data-aos="fade-up" data-aos-duration="1000">
                    Struktur Organisasi</h1>
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-3">
                @forelse ($posts as $post)
                    @if ($post->blog_category_id === 4)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                            data-aos="zoom-in-up" data-aos-delay="300">
                            <img class="rounded-t-lg" src="{{ $post->banner_url }}" alt="{{ $post->title }}" />
                            <div class="p-5">
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-800 dark:text-white">
                                        {{ $post->title }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-5">
                                    {{ $post->excerpt }}</p>
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-800 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                @empty
                    <h1 class="font-semibold italic text-sm text-gray-500">
                        There aren't post to show
                    </h1>
                @endforelse
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2" data-aos="zoom-in">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
    {{-- Struktur Organisasi --}}

    {{-- QNA Start Here --}}
    <section class="bg-white dark:bg-gray-900" id="tentang">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white"
                    data-aos="fade-up" data-aos-duration="1000">
                    Paling Sering Banget Ditanyain ?</h1>
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-1">
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay='300'>
                    @foreach ($getQna as $qna)
                    <h2 id="accordion-flush-heading-{{$qna->id}}">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                            data-accordion-target="#accordion-flush-body-{{$qna->id}}" aria-expanded="true"
                            aria-controls="accordion-flush-body-{{$qna->id}}">
                            <span>{{$qna->question}}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-{{$qna->id}}" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{$qna->answer}}</p>
                            
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    {{-- QNA End --}}

    {{-- Footers here --}}
    <footer class="bg-red-800 dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto" data-aos="fade-up" data-aos-duration="1000">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <h1 class="max-w-lg text-xl font-semibold tracking-tight text-white xl:text-2xl dark:text-white">
                        DEMA Keperawatan Semarang</h1>
                    <p class="max-w-sm mt-2 text-white dark:text-gray-400">Keluarga Besar Mahasiswa</p>
                    <p class="max-w-sm mt-2 text-white dark:text-gray-400">Poltekkes Kemenkes Semarang</p>
                    <p class="max-w-sm mt-2 text-white dark:text-gray-400">Jl. Tirto Agung Pedalangan Banyumanik,
                        Semarang.</p>

                </div>

                <div>
                    <p class="font-semibold text-white dark:text-white">Tentang Dema</p>
                    <div class="flex flex-col items-start mt-5 space-y-2">
                        @foreach ($getFooterA as $footerA)
                            <a href="{{ $footerA->url }}"
                                class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">{{ $footerA->label }}</a>
                        @endforeach
                        {{-- <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Profil</a>
                            <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Visi Misi</a>
                            <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Struktur Organisasi</a> --}}
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-white dark:text-white">Kegiatan</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        @foreach ($getFooterB as $footerB)
                            <a href="{{ $footerB->url }}"
                                class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">{{ $footerB->label }}</a>
                        @endforeach
                        {{-- <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Liputan</a>
                            <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Aspirasi Mahasiswa</a>
                            <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Pengumuman Sarasehan</a> --}}
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-700">

            <div class="flex items-center justify-between">
                <p class="text-sm text-white dark:text-gray-300">© Copyright 2024. Dema Keperawatan Poltekkes Semarang
                </p>

                {{-- social media fiture --}}
                <div class="flex -mx-2">
                    {{-- IG --}}
                    @foreach ($getInstagram as $instagram)
                        <a href="{{ $instagram->url }}"
                            class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400"
                            aria-label="Reddit">
                            <svg class="w-5 h-5 fill-current" fill="#ffffff" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path
                                            d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8 c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z">
                                        </path>
                                        <polygon
                                            points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 ">
                                        </polygon>
                                        <path
                                            d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157 c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z">
                                        </path>
                                        <path
                                            d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8 c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157 c27.3,0,49.5,22.2,49.5,49.5V374.7z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    @endforeach
                    {{-- FB --}}
                    @foreach ($getFacebook as $facebook)
                        <a href="{{ $facebook->url }}"
                            class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400"
                            aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                </path>
                            </svg>
                        </a>
                    @endforeach
                    {{-- Yt --}}
                    @foreach ($getYoutube as $youtube)
                        <a href="{{ $youtube->url }}"
                            class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400"
                            aria-label="Github">
                            <svg fill="#ffffff" class="w-5 h-5 fill-current" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <polygon points="78.9,450.3 162.7,401.1 78.9,351.9 "></polygon>
                                        <path
                                            d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,446.8L241,446.8 c0,44.1-44.1,44.1-44.1,44.1H29.1c-44.1,0-44.1-44.1-44.1-44.1v-91.5c0-44.1,44.1-44.1,44.1-44.1h167.8c44.1,0,44.1,44.1,44.1,44.1 V446.8z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    @endforeach
                    {{-- TT --}}
                    @foreach ($getTiktok as $tiktok)
                        <a href="{{ $tiktok->url }}"
                            class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400"
                            aria-label="Github">
                            <svg fill="#ffffff" class="w-5 h-5 fill-current" viewBox="-2.4 -2.4 28.80 28.80"
                                xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Zm-3.281,8.725h0c-.109.011-.219.016-.328.017A3.571,3.571,0,0,1,14.4,9.129v5.493a4.061,4.061,0,1,1-4.06-4.06c.085,0,.167.008.251.013v2a2.067,2.067,0,1,0-.251,4.119A2.123,2.123,0,0,0,12.5,14.649l.02-9.331h1.914A3.564,3.564,0,0,0,17.719,8.5Z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </footer>
    {{-- Footers end --}}

</x-default-layout>
