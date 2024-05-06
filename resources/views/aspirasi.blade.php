<x-default-layout>
    {{-- Navbar start here --}}
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
                                class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ $navbar->label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    {{-- Navbar end --}}

    {{-- Aspirasi start here --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-40 mx-auto">
            <div class="text-center animate__animated animate__fadeInDown">
                <svg class="w-20 h-20 text-red-800 dark:text-white mx-auto" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M18.5 3.1c.3.2.5.5.5.9v16a1 1 0 0 1-1.6.8L12 17V7.1l5.4-4a1 1 0 0 1 1 0ZM22 12a4 4 0 0 1-2 3.5v-7c1.2.7 2 2 2 3.5ZM10 8H4a1 1 0 0 0-1 1v6c0 .6.4 1 1 1h6V8Zm0 9H5v3c0 .6.4 1 1 1h3c.6 0 1-.4 1-1v-3Z"
                        clip-rule="evenodd" />
                </svg>
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Forum Aspirasi</h1>
                <p class="mx-auto my-4 text-lg text-gray-500">
                    Ayo mahasiswa Prodi Keperawatan Poltekkes Semarang, salurkan aspirasimu melalui forum aspirasi ini.
                </p>
                <a href="{{ route('aspirasi.create') }}"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-red-800 rounded-lg hover:bg-white hover:text-red-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 animate__animated animate__fadeInUp">
                    Kirim Aspirasi
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <p class="mx-auto my-4 text-lg text-gray-500">
                    Gulir kebawah untuk melihat aspirasi anda
                </p>
            </div>
        </div>
        <div class="container px-6 py-5 mx-auto" id="aspirasi">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Kotak Aspirasi</h1>
            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2">
                @forelse ($aspirations as $aspiration)
                    @if ($aspiration->status == 1)
                    <div class="flex items-start gap-2.5" data-aos="zoom-in">
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div
                            class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <span class="text-sm font-semibold text-gray-900 dark:text-white">
                                    @php
                                        $nama = $aspiration->sender;
                                        $panjangNama = strlen($nama);
                                        $namaTersembunyi = $nama[0] . str_repeat('*', $panjangNama - 1);
                                        echo $namaTersembunyi;
                                    @endphp
                                </span>
                                <span
                                    class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $aspiration->updated_at->format('d M Y') }}</span>
                            </div>
                            <span
                                class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $aspiration->class }}</span>
                            <span
                                class="text-sm font-bold text-gray-800 dark:text-gray-400">{{ $aspiration->title }}</span>
                            <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">
                                {{ $aspiration->content }}</p>
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Answered</span>
                        </div>
                        <button id="dropdownMenuIconButton" data-dropdown-toggle="{{$aspiration->sender}}"
                            data-dropdown-placement="bottom-start"
                            class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                <path
                                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                        </button>
                        <div id="{{$aspiration->sender}}"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconButton">
                                <li>
                                    <a href="#aspirasi" data-modal-target="{{$aspiration->id}}"
                                        data-modal-toggle="{{$aspiration->id}}"
                                        class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Balasan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- modal start --}}
                    <!-- Main modal -->
                    <div id="{{$aspiration->id}}" tabindex="{{$aspiration->id}}" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Balasan
                                    </h3>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{$aspiration->Reply}}
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        Ketuk luar tab untuk kembali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal end --}}
                    @endif
                @empty
                @endforelse
            </div>
        </div>
        <br><br><br><br>
    </section>
    {{-- Aspirasi end --}}


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
