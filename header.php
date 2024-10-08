<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>

<body class="font-body">
    <!-- ========== HEADER ========== -->
    <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
        <nav class="mt-4 relative max-w-5xl w-full bg-white border border-gray-200 rounded-[2rem] mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto">
            <div class="px-4 md:px-0 flex justify-between items-center">
                <!-- Logo -->
                <div>
                    <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="<?php echo home_url(); ?>" aria-label="Preline">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-npc-lab.png'; ?>" alt="Logo NPC Lab" class="w-24">
                    </a>
                </div>
                <!-- End Logo -->

                <div class="md:hidden">
                    <!-- Toggle Button -->
                    <button type="button" class="hs-collapse-toggle flex justify-center items-center size-6 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200" id="hs-navbar-header-floating-collapse" aria-expanded="false" aria-controls="hs-navbar-header-floating" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-header-floating">
                        <svg class="hs-collapse-open:hidden shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                    <!-- End Toggle Button -->
                </div>
            </div>

            <div id="hs-navbar-header-floating" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-navbar-header-floating-collapse">
                <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 <?php if (is_front_page()) {
                                                                                                        echo 'border-blue-800 font-medium text-blue-800 focus:outline-none';
                                                                                                    } else {
                                                                                                        echo 'border-transparent text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                    } ?>" href="<?php echo home_url(); ?>">Home</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 <?php if (is_page('about')) {
                                                                                                        echo 'border-blue-800 font-medium text-blue-800 focus:outline-none';
                                                                                                    } else {
                                                                                                        echo 'border-transparent text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                    } ?>" href="<?php echo get_permalink(get_page_by_path('about')); ?>">About</a>

                    <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false]">
                        <button id="hs-header-base-dropdown" type="button" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown" class="hs-dropdown-toggle py-0.5 md:py-3 px-4 md:px-1 w-full p-2 flex items-center text-sm border-s-2 md:border-s-0 md:border-b-2 <?php if (is_page(['automation', 'drone', 'survey'])) {
                                                                                                                                                                                                                                                                                    echo 'border-blue-800 font-medium text-blue-800 focus:outline-none';
                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                    echo 'border-transparent text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                                                                                                                                                                                                } ?>">
                            Services
                            <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                            <div class="py-1 md:px-1 space-y-0.5">
                                <a class="p-2 md:px-3 flex items-center text-sm rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 <?php if (is_page('automation')) {
                                                                                                                                                        echo 'font-medium text-blue-800 focus:outline-none';
                                                                                                                                                    } else {
                                                                                                                                                        echo 'text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                                                                    } ?>" href="<?php echo get_permalink(get_page_by_path('automation')); ?>">Automation</a>
                                <a class="p-2 md:px-3 flex items-center text-sm rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 <?php if (is_page('drone')) {
                                                                                                                                                        echo 'font-medium text-blue-800 focus:outline-none';
                                                                                                                                                    } else {
                                                                                                                                                        echo 'text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                                                                    } ?>" href="<?php echo get_permalink(get_page_by_path('drone')); ?>">Drone</a>
                                <a class="p-2 md:px-3 flex items-center text-sm rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 <?php if (is_page('survey')) {
                                                                                                                                                        echo 'font-medium text-blue-800 focus:outline-none';
                                                                                                                                                    } else {
                                                                                                                                                        echo 'text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                                                                    } ?>" href="<?php echo get_permalink(get_page_by_path('survey')); ?>">Survey</a>
                            </div>
                        </div>
                    </div>

                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 <?php if (is_page('experience')) {
                                                                                                        echo 'border-blue-800 font-medium text-blue-800 focus:outline-none';
                                                                                                    } else {
                                                                                                        echo 'border-transparent text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                    } ?>" href="<?php echo get_permalink(get_page_by_path('experience')); ?>">Experience</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 <?php if (is_page('gallery')) {
                                                                                                        echo 'border-blue-800 font-medium text-blue-800 focus:outline-none';
                                                                                                    } else {
                                                                                                        echo 'border-transparent text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                    } ?>" href="<?php echo get_permalink(get_page_by_path('gallery')); ?>">Gallery</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 <?php if (is_page('blog')) {
                                                                                                        echo 'border-blue-800 font-medium text-blue-800 focus:outline-none';
                                                                                                    } else {
                                                                                                        echo 'border-transparent text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                    } ?>" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 <?php if (is_page('contact')) {
                                                                                                        echo 'border-blue-800 font-medium text-blue-800 focus:outline-none';
                                                                                                    } else {
                                                                                                        echo 'border-transparent text-gray-500 hover:text-gray-800 focus:outline-none';
                                                                                                    } ?>" href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- ========== END HEADER ========== -->
    <main class="flex flex-col w-full">