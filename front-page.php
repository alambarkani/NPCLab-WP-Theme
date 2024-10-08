<?php
get_header()
?>
<div class="h-screen bg-cover flex flex-col justify-center items-center gap-6"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2)20%, rgb(0, 0, 0, 0.9)75%), url('<?php echo get_template_directory_uri() . '/assets/images/robot.jpg' ?>');">
    <div class="title-wrapper">
        <h1
            class="text-white animate-slide-in-from-bottom animated-title
        text-7xl text-center font-header uppercase">
            <span class="text-white">Automation&#8226Drone&#8226Survey
        </h1>
    </div>
    <div class="subhead-wrapper">
        <p class="animated-subhead mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 xl:px-48 animate-fade-in">Kami
            bergerak dibidang
            terkait <span class="italic font-light">Automation, Drone, Survey</span></p>
    </div>
    <div class="cta-wrapper">
        <div class="flex gap-4 animate-slide-in-from-top animated-cta">
            <a href="{{ route('guest.contact') }}"
                class="py-3 px-4 inline-flex items-center gap-x-2 font-medium rounded-lg border border-transparent bg-blue-500 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Hubungi
                Kami
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </a>
            <a href="<?php echo get_permalink(get_page_by_path('about')) ?>"
                class="bg-transparent text-white inline-flex items-center hover:bg-white hover:!text-blue-700 border border-white p-2 rounded-md shadow-md">Tentang
                Kami</a>
        </div>
    </div>
</div>
<hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-5">
<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto featured-wrapper">
    <div class="relative p-6 md:p-16 animated-featured">
        <!-- Grid -->
        <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
            <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl">
                    Jasa kami
                </h2>

                <!-- Tab Navs -->
                <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist" aria-orientation="vertical">
                    <button type="button"
                        class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl active"
                        id="tabs-with-card-item-1" aria-selected="true" data-hs-tab="#tabs-with-card-1"
                        aria-controls="tabs-with-card-1" role="tab">
                        <span class="flex gap-x-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                            </svg>
                            <span class="grow">
                                <span
                                    class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Automation</span>
                                <span class="block mt-1 text-gray-800">Otomatiskan tugas-tugas berulang dan tingkatkan
                                    produktivitas bisnis Anda secara signifikan.</span>
                                <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="{{ route('guest.automation') }}">
                                    Learn more
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </span>
                        </span>
                    </button>

                    <button type="button"
                        class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl"
                        id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-2"
                        aria-controls="tabs-with-card-2" role="tab">
                        <span class="flex gap-x-6">
                            <svg class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5" />
                            </svg>
                            <span class="grow">
                                <span
                                    class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Drone</span>
                                <span class="block mt-1 text-gray-800">Gunakan drone kami untuk berbagai kebutuhan
                                    anda.</span>
                                <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="{{ route('guest.drone') }}">
                                    Learn more
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </span>
                        </span>
                    </button>

                    <button type="button"
                        class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl"
                        id="tabs-with-card-item-3" aria-selected="false" data-hs-tab="#tabs-with-card-3"
                        aria-controls="tabs-with-card-3" role="tab">
                        <span class="flex gap-x-6">
                            <svg class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                            </svg>

                            <span class="grow">
                                <span
                                    class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Survey</span>
                                <span class="block mt-1 text-gray-800">Hemat waktu dan biaya dengan survei menggunakan
                                    drone. Kami akan memberikan data yang Anda butuhkan untuk pengambilan keputusan yang
                                    lebih baik.</span>
                                <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="{{ route('guest.survey') }}">
                                    Learn more
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </span>
                        </span>
                    </button>
                </nav>
                <!-- End Tab Navs -->
            </div>
            <!-- End Col -->

            <div class="lg:col-span-6">
                <div class="relative">
                    <!-- Tab Content -->
                    <div>
                        <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                            <img class="shadow-xl shadow-gray-200 rounded-xl" src="<?php echo get_template_directory_uri() . '/assets/images/auto1.jpg'; ?>"
                                alt="Features Image">
                        </div>

                        <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                            aria-labelledby="tabs-with-card-item-2">
                            <img class="shadow-xl shadow-gray-200 rounded-xl" src="<?php echo get_template_directory_uri() . '/assets/images/drone1.jpg'; ?>"
                                alt="Features Image">
                        </div>

                        <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                            aria-labelledby="tabs-with-card-item-3">
                            <img class="shadow-xl shadow-gray-200 rounded-xl" src="<?php echo get_template_directory_uri() . '/assets/images/survey1.jpg'; ?>"
                                alt="Features Image">
                        </div>
                    </div>
                    <!-- End Tab Content -->

                    <!-- SVG Element -->
                    <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                        <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                stroke-width="10" stroke-linecap="round" />
                            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor"
                                stroke-width="10" stroke-linecap="round" />
                            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                stroke-width="10" stroke-linecap="round" />
                        </svg>
                    </div>
                    <!-- End SVG Element -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->

        <!-- Background Color -->
        <div class="absolute inset-0 grid grid-cols-12 size-full">
            <div
                class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full">
            </div>
        </div>
        <!-- End Background Color -->
    </div>
</div>
<!-- End Features -->
<?php
get_footer()
?>