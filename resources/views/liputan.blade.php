{{-- Navbar here --}}
<nav x-data="{ isOpen: false }" class="bg-red-800 shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center">
            <div class="flex items-center justify-between">
                <a href="#">
                    <img class="w-auto h-6 sm:h-7" src="{{asset('/storage/logo_dema.webp')}}" alt="Dema Poltekkes">
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-white dark:text-gray-200 hover:text-white dark:hover:text-gray-400 focus:outline-none focus:text-white dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 flex-1 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-red-800 dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center lg:justify-between">
                <div class="flex flex-col text-white capitalize dark:text-gray-300 lg:flex lg:px-16 lg:-mx-4 lg:flex-row lg:items-center">
                    @foreach ($getNavbar as $navbar)
                    <a href="{{$navbar->url}}" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-gray-200">{{$navbar->label}}</a>
                    @endforeach
                    {{-- <a href={{ route('aspirasi')}} class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-gray-200">Aspirasi</a>
                    <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-gray-200">Profil</a>
                    <a href={{ route('pengumuman')}} class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-gray-200">Pengumuman</a>
                    <a href={{ route('pengumuman')}} class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-gray-200">Liputan</a>--}}
                    {{-- search fiture --}}
                    {{-- <div class="relative mt-4 lg:mt-0 lg:mx-4">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-4 h-4 text-gray-600 dark:text-gray-300" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
    
                        <input type="text" class="w-full py-1 pl-10 pr-4 text-gray-700 placeholder-gray-600 bg-white border-b border-gray-600 dark:placeholder-gray-300 dark:focus:border-gray-300 lg:w-56 lg:border-transparent dark:bg-gray-800 dark:text-gray-300 focus:outline-none focus:border-gray-600 rounded-lg" placeholder="Search">
                    </div> 
                    </div>
    
                 {{-- <div class="flex justify-center mt-6 lg:flex lg:mt-0 lg:-mx-2">
                    {{-- <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                            </path>
                        </svg>
                    </a>
        
                    <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Facebook">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                            </path>
                        </svg>
                    </a>
        
                    <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                            </path>
                        </svg>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- Navbar End --}}
<x-default-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2">
                @forelse ($posts as $post)
                    @if ($post->blog_category_id === 2)
                        <div>
                            <img class="relative z-10 object-cover w-full rounded-md h-96" src="{{ $post->banner_url }}"
                                alt="{{ $post->title }}">

                            <div
                                class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="font-semibold text-gray-800 hover:underline text-red-800 dark:text-white md:text-xl">
                                    {{ $post->title }}
                                </a>

                                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm line-clamp-3">
                                    {{ $post->excerpt }}
                                </p>

                                <p class="mt-3 text-sm text-red-800">
                                    <time>{{ $post->updated_at->format('D, m, Y') }}</time></p>
                            </div>
                        </div>
                    @endif

                @empty
                    <h1 class="font-semibold italic text-sm text-gray-500">
                        There aren't post to show
                    </h1>
                @endforelse

            </div>
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
    {{-- Footers here --}}
    <footer class="bg-red-800 dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <h1 class="max-w-lg text-xl font-semibold tracking-tight text-white xl:text-2xl dark:text-white">DEMA Keperawatan Semarang</h1>
                    <p class="max-w-sm mt-2 text-white dark:text-gray-400">Keluarga Besar Mahasiswa</p>
                    <p class="max-w-sm mt-2 text-white dark:text-gray-400">Poltekkes Kemenkes Semarang</p>
                    <p class="max-w-sm mt-2 text-white dark:text-gray-400">Jl. Tirto Agung Pedalangan Banyumanik, Semarang.</p>
    
                </div>
    
                <div>
                    <p class="font-semibold text-white dark:text-white">Tentang Dema</p>
                    <div class="flex flex-col items-start mt-5 space-y-2">
                        @foreach ($getFooterA as $footerA)
                            <a href="{{$footerA->url}}" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">{{$footerA->label}}</a>
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
                            <a href="{{$footerB->url}}" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">{{$footerB->label}}</a>
                        @endforeach
                        {{-- <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Liputan</a>
                        <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Aspirasi Mahasiswa</a>
                        <a href="#" class="text-white transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-gray-900">Pengumuman Sarasehan</a> --}}
                    </div>
                </div>
            </div>
            
            <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-700">
            
            <div class="flex items-center justify-between">
                <p class="text-sm text-white dark:text-gray-300">© Copyright 2024. Dema Keperawatan Poltekkes Semarang</p>
                
                {{-- social media fiture --}}
                <div class="flex -mx-2">
                    {{-- IG --}}
                    @foreach ($getInstagram as $instagram)
                        <a href="{{$instagram->url}}" class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400" aria-label="Reddit">
                            <svg class="w-5 h-5 fill-current" fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8 c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"></path> <polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 "></polygon> <path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157 c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"></path> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8 c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157 c27.3,0,49.5,22.2,49.5,49.5V374.7z"></path> </g> </g></svg>
                        </a>
                    @endforeach
                    {{-- FB --}}
                    @foreach ($getFacebook as $facebook)
                        <a href="{{$facebook->url}}" class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400" aria-label="Facebook">
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
                        <a href="{{$youtube->url}}" class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400" aria-label="Github">
                            <svg fill="#ffffff" class="w-5 h-5 fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <polygon points="78.9,450.3 162.7,401.1 78.9,351.9 "></polygon> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,446.8L241,446.8 c0,44.1-44.1,44.1-44.1,44.1H29.1c-44.1,0-44.1-44.1-44.1-44.1v-91.5c0-44.1,44.1-44.1,44.1-44.1h167.8c44.1,0,44.1,44.1,44.1,44.1 V446.8z"></path> </g> </g></svg>
                        </a>
                    @endforeach
                    {{-- TT --}}
                    @foreach ($getTiktok as $tiktok)
                        <a href="{{$tiktok->url}}" class="mx-2 text-white transition-colors duration-300 dark:text-gray-300 hover:text-gray-900 dark:hover:text-blue-400" aria-label="Github">
                            <svg fill="#ffffff" class="w-5 h-5 fill-current" viewBox="-2.4 -2.4 28.80 28.80" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Zm-3.281,8.725h0c-.109.011-.219.016-.328.017A3.571,3.571,0,0,1,14.4,9.129v5.493a4.061,4.061,0,1,1-4.06-4.06c.085,0,.167.008.251.013v2a2.067,2.067,0,1,0-.251,4.119A2.123,2.123,0,0,0,12.5,14.649l.02-9.331h1.914A3.564,3.564,0,0,0,17.719,8.5Z"></path></g></svg>
                        </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </footer>
    {{-- Footers end --}}
</x-default-layout>
