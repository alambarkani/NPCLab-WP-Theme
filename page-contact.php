<?php

get_header();
echo '<!-- page-about.php loaded -->';
?>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
    <div class="relative text-white bg-red-600 flex">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/kontak.png'; ?>" alt="image description" class="w-3/4 h-auto">
        <div class="absolute top-20 right-20 text-4xl font-bold ">
            <p class="mb-6">Is there a better</p>
            <p class="mb-6">way of improving</p>
            <p class="mb-6">production?</p>
        </div>
        <div class="absolute bottom-4 right-20 text-lg">
            <p class="mb-3 text-2xl font-bold">General office</p>
            <p>Karah Tama Asri I No.36</p>
            <p>Surabaya 60232</p>
            <p>Jawa Timur, Indonesia</p>
            <p>031-825 17378</p>
        </div>
    </div>
    

        <form id="contactForm" class="bg-blue-500 mx-auto p-20">
        <div class="text-4xl font-heading p-10">
            <h1>WRITE US and ask</h1>
            <h1>about anything</h1>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Phone number</label>
                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0822-5335-7815" required />
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Email address</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required />
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Subject</label>
                <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Subject" required />
            </div>
        </div>
        <div class="mb-6">
            <label for="details" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Details</label>
            <input type="text" id="details" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Details" required />
        </div>
        <div>
            <label for="your_message" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Your message</label>
            <input type="text" id="your_message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message" required />
        </div>
        <div class="flex items-start mb-6 p-5">
            <button type="submit" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send the message</button>
        </div>
    </form>

</div>

<?php get_footer(); ?>