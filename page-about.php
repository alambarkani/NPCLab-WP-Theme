<?php

get_header();
echo '<!-- page-about.php loaded -->';
?>

<div class="relative h-100 flex justify-center items-center bg-gradient-to-t from-blue-500 to-white gap-6">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/NPC-LAB1.jpg'; ?>" alt="NPC LAB" class="w-full h-auto">
    <div class="absolute title-wrapper inset-0 flex flex-col text-white justify-center items-center" style="top: 30%;">
        <h1 class="text-5xl text-white text-center font-bold font-heading p-4 rounded-lg ">
            PT. NPC LABORATORIUM INDONESIA
        </h1>
    </div>
    <div class="absolute bottom-0 flex text-white items-center gap-9 p-6 w-full justify-center">
        <p class=" text-center font-bold p-5">90+<br>Client</p>
        <div class="flex flex-col items-center p-5">
            <svg class="text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <p class=" text-white mt-1 font-bold">Satu Misi</p>
        </div>
        <p class=" text-center font-bold p-5">2k<br>Views</p>
    </div>
</div>
<div class="flex justify-center bg-white items-center text-center flex-wrap gap-4 p-4">
    <h5 class="text-center font-bold p-5" style="font-size: 46px">LINGKUP KERJA</h5>
    <!-- Card 1 -->
    <div
        class="hover:bg-blue-200 max-w-sm bg-white border border-gray-50 rounded-lg items-center shadow flex flex-col p-5 transition-shadow duration-300 hover:shadow-lg">
        <svg class="text-red-500" width="50" height="50" fill="none" viewBox="0 0 24 24" stroke="blue">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
        </svg>
        <div class="p-5 flex-grow flex flex-col justify-between">
            <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 "
                style="display:inline-block;border-bottom:4px solid blue;padding-bottom:8px;">GOVERNMENT</h5>
            <p>Pemerintah bertanggung jawab untuk merancang dan mengimplementasikan kebijakan yang mengatur berbagai
                aspek kehidupan masyarakat. Ini melibatkan pembuatan regulasi, pengawasan, dan penyediaan layanan publik
                seperti pendidikan, kesehatan, dan keamanan.</p>
        </div>
    </div>
    <!-- Card 2 -->
    <div
        class="hover:bg-blue-200 max-w-sm bg-white border items-center border-gray-50 rounded-lg shadow flex flex-col p-5">
        <svg class="text-red-400" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="blue"
            fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" />
            <circle cx="6" cy="17" r="2" />
            <circle cx="18" cy="17" r="2" />
            <path d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8" />
            <polyline points="16 5 17.5 12 22 12" />
            <line x1="2" y1="10" x2="17" y2="10" />
            <line x1="7" y1="5" x2="7" y2="10" />
            <line x1="12" y1="5" x2="12" y2="10" />
        </svg>
        <div class="p-5 flex-grow flex flex-col justify-between">
            <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 "
                style="display:inline-block;border-bottom:4px solid blue;padding-bottom:8px;">TRANSPORTATIONS</h5>
            <p>Sektor transportasi mengelola pergerakan barang dan orang melalui pengembangan infrastruktur seperti
                jalan, bandara, dan pelabuhan. Transportasi juga mencakup manajemen sistem transportasi publik dan
                swasta untuk memastikan mobilitas yang efisien dan aman.</p>
        </div>
    </div>
    <!-- Card 3 -->
    <div
        class="hover:bg-blue-200 max-w-sm bg-white border border-gray-50 rounded-lg shadow items-center flex flex-col p-5">
        <svg class="text-red-400" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="blue"
            fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" />
            <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
            <line x1="12" y1="12" x2="20" y2="7.5" />
            <line x1="12" y1="12" x2="12" y2="21" />
            <line x1="12" y1="12" x2="4" y2="7.5" />
        </svg>
        <div class="p-5 flex-grow flex flex-col justify-between">
            <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 "
                style="display:inline-block;border-bottom:4px solid blue;padding-bottom:8px;">LOGISTICS</h5>
            <p>Logistik berfokus pada pengelolaan rantai pasokan dari pengadaan bahan baku hingga distribusi produk
                akhir. Ini mencakup manajemen gudang, pengaturan transportasi dan distribusi, serta pengendalian
                kualitas untuk memastikan barang memenuhi standar.</p>
        </div>
    </div>
    <!-- Card 4 -->
    <div
        class="hover:bg-blue-200 max-w-sm bg-white border border-gray-50 rounded-lg shadow text items-center flex flex-col p-5">
        <svg class="text-red-400" width="50" height="50" fill="none" viewBox="0 0 24 24" stroke="blue">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
        </svg>
        <div class="p-5 flex-grow flex flex-col justify-between">
            <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 "
                style="display:inline-block;border-bottom:4px solid blue;padding-bottom:8px;">ENERGY</h5>
            <p>Sektor energi meliputi produksi dan distribusi sumber energi seperti minyak, gas, batubara, nuklir, dan
                energi terbarukan (matahari, angin, hidro). Fokus utama manajemen energi adalah kebijakan untuk
                efisiensi berkelanjutan, pengurangan emisi, dan keamanan pasokan.</p>
        </div>
    </div>
    <!-- Card 5 -->
    <div
        class="hover:bg-blue-200 max-w-sm bg-white border border-gray-50 rounded-lg shadow items-center flex flex-col p-5">
        <svg width="50" height="50" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 463 463"
            style="enable-background:new 0 0 463 463;" xml:space="preserve">
            <path fill="blue" d="M407.5,448h-29.215C344.104,418.795,293.86,401.554,239,400.111v-19.952l20.211-20.211
                    c3.583,0.579,7.201,0.875,10.823,0.875c19.047,0,38.169-7.861,52.384-22.076c17.979-17.98,25.793-43.81,20.393-67.411
                    c-0.642-2.806-2.833-4.996-5.638-5.638c-23.603-5.402-49.432,2.413-67.411,20.393c-16.938,16.938-24.85,40.842-21.195,63.287
                    L239,358.946v-13.891c0-0.002,0-0.003,0-0.005v-62.4l20.248-20.249c2.609,0.379,5.237,0.586,7.869,0.586
                    c15.326,0,30.704-6.317,42.127-17.742c14.455-14.455,20.734-35.237,16.386-54.238c-0.642-2.806-2.833-4.996-5.638-5.638
                    c-19.001-4.35-39.784,1.931-54.238,16.386c-13.408,13.408-19.775,32.26-17.157,50.084L239,261.437v-13.934c0-0.002,0-0.003,0-0.005
                    v-73.732c9.29-3.138,16-11.93,16-22.266c0-4.075-1.27-16.309-3.466-29.3c10.15,8.395,20.107,15.61,23.642,17.652
                    c3.622,2.091,7.64,3.159,11.712,3.159c2.041,0,4.096-0.269,6.121-0.811c6.063-1.625,11.131-5.513,14.27-10.95
                    c6.479-11.221,2.62-25.622-8.602-32.101c-3.53-2.038-14.76-7.055-27.109-11.648c12.349-4.594,23.579-9.611,27.109-11.648
                    c11.221-6.479,15.08-20.88,8.601-32.102c-3.139-5.436-8.206-9.325-14.27-10.949c-6.063-1.625-12.396-0.792-17.832,2.348
                    c-3.535,2.041-13.492,9.256-23.642,17.651C253.73,39.812,255,27.582,255,23.5C255,10.542,244.458,0,231.5,0S208,10.542,208,23.5
                    c0,4.075,1.27,16.309,3.466,29.3c-10.15-8.395-20.107-15.61-23.642-17.652c-5.437-3.139-11.769-3.972-17.833-2.348
                    c-6.063,1.625-11.131,5.513-14.27,10.95c-6.479,11.221-2.62,25.622,8.602,32.101c3.53,2.038,14.76,7.055,27.109,11.648
                    c-12.349,4.594-23.579,9.611-27.109,11.648c-11.221,6.479-15.08,20.88-8.601,32.102c3.139,5.436,8.206,9.325,14.27,10.949
                    c2.024,0.542,4.079,0.811,6.121,0.811c4.072,0,8.091-1.068,11.711-3.159c3.535-2.041,13.492-9.256,23.642-17.651
                    C209.27,135.188,208,147.418,208,151.5c0,10.336,6.71,19.128,16,22.266v55.628l-9.597-9.597
                    c2.617-17.824-3.749-36.677-17.157-50.085c-14.455-14.455-35.237-20.734-54.238-16.385c-2.806,0.642-4.996,2.833-5.638,5.638
                    c-4.348,19,1.931,39.783,16.386,54.238c11.425,11.425,26.8,17.742,42.127,17.742c2.631,0,5.26-0.207,7.869-0.586L224,250.606v76.339
                    l-9.568-9.568c3.655-22.445-4.256-46.35-21.195-63.287c-17.979-17.979-43.811-25.793-67.411-20.393
                    c-2.806,0.642-4.996,2.833-5.638,5.638c-5.401,23.601,2.413,49.431,20.393,67.411c14.216,14.216,33.335,22.076,52.384,22.076
                    c3.621,0,7.241-0.296,10.823-0.875L224,348.159v51.952C169.14,401.554,118.896,418.795,84.715,448H55.5c-4.142,0-7.5,3.358-7.5,7.5
                    s3.358,7.5,7.5,7.5h352c4.142,0,7.5-3.358,7.5-7.5S411.642,448,407.5,448z M280.369,296.697
                    c13.141-13.142,31.409-19.513,48.679-17.236c2.276,17.27-4.095,35.538-17.236,48.679c-10.544,10.544-24.388,16.716-38.368,17.574
                    l35.381-35.381c2.929-2.929,2.929-7.678,0-10.606c-2.929-2.929-7.678-2.929-10.606,0l-35.431,35.431
                    C263.624,321.146,269.802,307.264,280.369,296.697z M276.361,212.361c9.599-9.6,22.811-14.413,35.438-13.161
                    c1.254,12.631-3.562,25.839-13.161,35.438c-6.802,6.802-15.42,11.186-24.355,12.727l18.541-18.541c2.929-2.929,2.929-7.678,0-10.606
                    c-2.929-2.929-7.678-2.929-10.606,0l-18.601,18.601C265.141,227.846,269.533,219.19,276.361,212.361z M164.361,202.596
                    c-9.599-9.599-14.415-22.807-13.161-35.438c12.632-1.252,25.84,3.562,35.438,13.16c6.828,6.828,11.22,15.485,12.745,24.459
                    l-18.602-18.602c-2.929-2.929-7.678-2.929-10.606,0c-2.929,2.929-2.929,7.678,0,10.606l18.54,18.54
                    C179.779,213.781,171.162,209.397,164.361,202.596z M151.188,296.141c-13.141-13.142-19.512-31.41-17.236-48.679
                    c17.27-2.278,35.538,4.094,48.679,17.236c10.567,10.567,16.745,24.449,17.581,38.461l-35.431-35.431
                    c-2.929-2.929-7.678-2.929-10.606,0c-2.929,2.929-2.929,7.678,0,10.606l35.38,35.38
                    C175.574,312.856,161.731,306.684,151.188,296.141z M223,87.5c0-4.687,3.813-8.5,8.5-8.5s8.5,3.813,8.5,8.5s-3.813,8.5-8.5,8.5
                    S223,92.187,223,87.5z M294.287,123.75c-1.135,1.966-2.968,3.373-5.162,3.96c-2.193,0.588-4.483,0.287-6.45-0.849
                    c-3.839-2.216-20.103-14.256-32.221-25.492c0.997-1.359,1.85-2.829,2.54-4.387c15.788,4.877,34.35,12.944,38.181,15.156
                    C295.234,114.482,296.63,119.691,294.287,123.75z M282.676,48.139c1.966-1.135,4.258-1.437,6.449-0.849
                    c2.193,0.587,4.026,1.994,5.162,3.96c2.343,4.059,0.947,9.268-3.111,11.612c-3.831,2.212-22.393,10.279-38.181,15.156
                    c-0.69-1.558-1.543-3.028-2.54-4.387C262.572,62.395,278.837,50.355,282.676,48.139z M231.5,15c4.687,0,8.5,3.813,8.5,8.5
                    c0,4.431-2.293,24.529-5.963,40.639C233.203,64.049,232.357,64,231.5,64c-0.857,0-1.703,0.049-2.536,0.139
                    C225.294,48.027,223,27.923,223,23.5C223,18.813,226.813,15,231.5,15z M168.713,51.25c1.135-1.966,2.968-3.373,5.162-3.96
                    c2.195-0.587,4.484-0.286,6.45,0.849c3.839,2.216,20.103,14.256,32.221,25.492c-0.997,1.359-1.85,2.829-2.54,4.387
                    c-15.788-4.877-34.35-12.944-38.181-15.156C167.766,60.518,166.37,55.309,168.713,51.25z M180.324,126.861
                    c-1.966,1.135-4.256,1.437-6.449,0.849c-2.193-0.587-4.026-1.994-5.162-3.96c-2.343-4.059-0.947-9.268,3.111-11.612
                    c3.831-2.212,22.393-10.279,38.181-15.156c0.69,1.558,1.543,3.028,2.54,4.387C200.428,112.605,184.163,124.645,180.324,126.861z
                    M228.963,110.861c0.834,0.09,1.679,0.139,2.537,0.139c0.857,0,1.703-0.049,2.536-0.139c3.67,16.112,5.964,36.216,5.964,40.639
                    c0,4.687-3.813,8.5-8.5,8.5s-8.5-3.813-8.5-8.5C223,147.069,225.293,126.971,228.963,110.861z M231.5,415
                    c45.67,0,89.544,12.102,121.709,33H109.791C141.956,427.102,185.83,415,231.5,415z" />
        </svg>
        <div class="p-5 flex-grow flex flex-col justify-between">
            <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 "
                style="display:inline-block;border-bottom:4px solid blue;padding-bottom:8px;">AGRICULTURE</h5>
            <p>pertanian adalah kegiatan ekonomi sehingga memerlukan dasar-dasar pengetahuan yang sama akan pengelolaan
                tempat usaha, pemilihan bibit, metode budidaya, pengumpulan hasil, distribusi produk, pengolahan dan
                pengemasan produk, dan pemasaran.</p>
        </div>
    </div>
</div>

<div class="text-white inline-block bg-blue-700 p-5">
    <section data-gtm-key="tesla-banner-header-214" class="flex flex-col md:flex-row md:space-x-8 p-6 md:p-12">
        <section class="flex-none">
            <span class="text-7xl text-white font-bold p-5">
                VISI
            </span>
        </section>
        <section class="flex-1">
            <div class="space-y-4">
                <div class="hidden md:block">
                    Menjadi perusahaan yang terdepan dalam penelitian untuk pengembangan dan produksi teknologi dalam
                    negeri, sehingga NPC LAB bisa memenuhi kebutuhan dalam penciptaan dan pengembangan teknologi dalam
                    negeri.
                </div>
            </div>
        </section>
        <section class="flex-none">
            <span class="text-7xl text-white font-bold p-5">
                MISI
            </span>
        </section>
        <section class="flex-1">
            <div class="space-y-4">
                <div class="hidden md:block">
                    Memenuhi keinginan pasar teknologi dalam negeri dalam bentuk jasa maupun produksi barang untuk
                    kemandirian bangsa.
                </div>
            </div>
        </section>
    </section>
</div>

<div id="controls-carousel" class="relative text-center bg-blue-700 text-white w-full" data-carousel="static">
    <h2>Sejarah</h2>
    <h2>Latar Belakang</h2>
    <h2>NPC LAB</h2>
    <!-- Slider indicators -->
    <div class="z-30 flex justify-center items-center text-white bottom-5 left-1/2 space-x-3 rtl:space-x-reverse p-5">
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 -gray-700 -600 -white -gray-700"
            aria-current="true" aria-label="Slide 1" data-carousel-slide-to="1">2013-2018</button>
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 -gray-700 -600 -white -gray-700"
            aria-current="false" aria-label="Slide 2" data-carousel-slide-to="2">2018-2020</button>
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 -gray-700 -600 -white -gray-700"
            aria-current="false" aria-label="Slide 3" data-carousel-slide-to="3">2020-2024</button>
    </div>

    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg mt-9">
        <!-- Item 1 -->
        <div class="hidden text-center ease-in-out" data-carousel-item>
            <p>Berdiri pada tahun 2013, NPC LAB memiliki fokus awal<br>
                dalam bidang riset teknologi dan elektronika.<br>
                selain itu NPC LAB didirikan dengan maksud bisa memfasilitasi atau<br>
                mengemas karya anak bangsa dalam bidang teknologi dan elektronika<br>
                supaya lebih bisa bersaing dengan produk impor.</p>
        </div>
        <!-- Item 2 -->
        <div class="hidden text-center ease-in-out" data-carousel-item>
            <p>NPC LAB terus berkembang, sehingga akhirnya pada 2018 dibentuk<br>
                badan hukum dengan nama PT NPC Laboratorium Indonesia.<br>
                Meskipun sudah berbentuk badan hukum, NPC LAB berusaha konsisten<br>
                dalam bidang pengembangan teknologi dan elektronika</p>
        </div>
        <!-- Item 3 -->
        <div class="hidden text-center ease-in-out" data-carousel-item>
            <p>Seiring berjalannya waktu, dengan mengolaborasikan berbagai<br>
                disiplin keilmuan, NPC LAB menentukan untuk fokus pada tiga bidang<br>
                pekerjaan, yaitu autonomus, drone dan survey. Dipilihnya tiga bidang pekerjaan <br>
                tersebut merupakan pekerjaan yang sudah sering ditangani oleh<br>
                NPC LAB dan membuat beberapa klient untuk melakukan repeat order</p>
        </div>
    </div>
</div>
<script type="module">
    import axios from 'axios';
    window.axios = axios;
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
</script>
<?php get_footer(); ?>