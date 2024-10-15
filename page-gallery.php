<?php

get_header();
echo '<!-- page-about.php loaded -->';
?>
<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">

<!-- Tab Navigation Buttons -->
<div class="flex border-b mt-6">
    <button id="tab1Button" class="tab-button py-2 px-4 w-full text-center border-b-2 focus:outline-none">Automation Team</button>
    <button id="tab2Button" class="tab-button py-2 px-4 w-full text-center border-b-2 focus:outline-none">Drone Team</button>
    <button id="tab3Button" class="tab-button py-2 px-4 w-full text-center border-b-2 focus:outline-none">Survey Team</button>
</div>

<!-- Automation Team -->
<div id="tab1Content" class="tab-content p-4 hidden">
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
        <h5 class="mb-5 text-xl font-bold tracking-tight text-gray-900">Automation Team</h5>
        <div class="relative w-full bg-white shadow-md rounded-lg">
            <!-- Image Slider -->
            <div class="relative ">
                <img id="sliderImage1" src="/img/auto1.jpg" alt="Automation Process" class="w-full h-auto rounded-lg" style="width: 1000px; height: 600px; object-fit: cover; margin-left: 100px">
            </div>
            <div class="flex justify-between items-center mt-4">
                <button id="prevButton1" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Prev</button>
                <button id="nextButton1" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Next</button>
            </div>
            <p class="mb-5 p-4 text-center text-gray-700">Automation merupakan salah satu ilmu dasar yang dimiliki para founder NPC LAB. Ada beberapa project
                automation yang sudah ditangani oleh NPC LAB. salah satu pengalaman kerja dalam bidang ini yaitu automasi pada batching plant. 
                pekerjaan tersebut membuat sistem batching plant yang awalnya dioperasikan manual bisa dioperasikan secara otomatis dan manual. 
                Beberapa Klien NPC LAB dalam bidang ini yaitu Wika Beton dan HK-SIS.
            </p>
        </div>
    </div>
</div>

<!-- Drone Team -->
<div id="tab2Content" class="tab-content p-4 hidden">
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
        <h5 class="mb-5 text-xl font-bold tracking-tight text-gray-900">Drone Team</h5>
        <div class="relative w-full bg-white shadow-md rounded-lg">
            <!-- Image Slider -->
            <div class="relative ">
                <img id="sliderImage2" src="/img/drone1.jpg" alt="Drone Image 1" class="w-full h-auto rounded-lg" style="width: 1000px; height: 600px; object-fit: cover; margin-left: 100px">
            </div>
            <div class="flex justify-between items-center mt-4">
                <button id="prevButton2" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Prev</button>
                <button id="nextButton2" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Next</button>
            </div>
            <p class="mb-5 p-4 text-center text-gray-700">Akhir-akhir ini, drone merupkan salah satu pengembangan teknologi yang sangat menarik. Di dunia drone 
                dalam negeri, NPC LAB menjadi salah satu perusahaan yang cukup diperhitungkan. Hal ini tak lepas dari peranan NPC LAB dalam 
                melakukan riset drone sesuai kemajuan teknologi ter-update. Dalam bidang ini NPC LAB sudah sering mengerjakan project berupa 
                perakitan drone custom, pemanfaatan drone dan pelatihan mengenai drone.</p>
        </div>
    </div>
</div>

<!-- Survey Team -->
<div id="tab3Content" class="tab-content p-4 hidden">
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
        <h5 class="mb-5 text-xl font-bold tracking-tight text-gray-900">Survey Team</h5>
        <div class="relative w-full bg-white shadow-md rounded-lg">
            <!-- Image Slider -->
            <div class="relative ">
                <img id="sliderImage3" src="/img/survey1.jpg" alt="Survey Image 1" class="w-full h-auto rounded-lg" style="width: 1000px; height: 600px; object-fit: cover; margin-left: 100px">
            </div>
            <div class="flex justify-between items-center mt-4">
                <button id="prevButton3" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Prev</button>
                <button id="nextButton3" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Next</button>
            </div>
            <p class="mb-5 p-4 text-center text-gray-700">Salah satu tim yang membentuk NPC LAB merupakan tim yang mempunyai keahlian dalam bidang ilmu kebumian, 
                sehingga NPC LAB menerima berbagai jasa survei kebumian, yaitu berupa pemetaan udara, survey topografi serta survey batimetri.</p>
        </div>
    </div>
</div>

<script>
    const images1 = [
        { src: "<?php echo get_template_directory_uri() . '/assets/images/auto1.jpg'; ?>", desc: "Pemasangan sistem otomasi Batching Plant | Wika Beton" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/auto2.jpg'; ?>", desc: "Pemasangan sistem otomasi Batching Plant | Wika Beton" }
    ];

    const images2 = [
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone1.jpg'; ?>", desc: "Riset Pesawat Udara Tanpa Awak – SE 02 | Puspenerbal" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone2.jpg'; ?>", desc: "Pelatihan pengoperasian UAV – VTOL | Dittopad" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone3.jpg'; ?>", desc: "Pelatihan dasar drone| Unair" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone5.jpg'; ?>", desc: "Riset Flame Thrower Drone | PLN" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone6.jpg'; ?>", desc: "Riset Cargo Drone " },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone7.jpg'; ?>", desc: "Riset drone SAR" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone8.jpg'; ?>", desc: "Penyemprotan disinfectan pada masa pandemi" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone9.jpg'; ?>", desc: "Riset USV untuk survei batimetri" }
    ];

    const images3 = [
        { src: "<?php echo get_template_directory_uri() . '/assets/images/survey1.jpg'; ?>", desc: "Survei Volume Existing Fly Ash" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/survey2.jpg'; ?>", desc: "Survei Batimetri untuk Alur Pelayaran" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/s1.jpg'; ?>", desc: "Survei untuk perencanaan tambang" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/s2.jpg'; ?>", desc: "Pemetaan udara area kawasan wisata Mentawai" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/s3.jpg'; ?>", desc: "Pemetaan udara area kawasan wisata Kalimantan Timur" }
    ];

    let currentIndex1 = 0;
    let currentIndex2 = 0;
    let currentIndex3 = 0;

    function updateImage(index, images, imgElement, descElement) {
        imgElement.src = images[index].src;
        descElement.textContent = images[index].desc;
    }

    const sliderImage1 = document.getElementById('sliderImage1');
    const desc1 = document.createElement('p');
    desc1.className = "mt-2 text-center text-gray-600";
    sliderImage1.parentElement.appendChild(desc1);
    updateImage(currentIndex1, images1, sliderImage1, desc1);

    const prevButton1 = document.getElementById('prevButton1');
    const nextButton1 = document.getElementById('nextButton1');

    const sliderImage2 = document.getElementById('sliderImage2');
    const desc2 = document.createElement('p');
    desc2.className = "mt-2 text-center text-gray-600";
    sliderImage2.parentElement.appendChild(desc2);
    updateImage(currentIndex2, images2, sliderImage2, desc2);

    const prevButton2 = document.getElementById('prevButton2');
    const nextButton2 = document.getElementById('nextButton2');

    const sliderImage3 = document.getElementById('sliderImage3');
    const desc3 = document.createElement('p');
    desc3.className = "mt-2 text-center text-gray-600";
    sliderImage3.parentElement.appendChild(desc3);
    updateImage(currentIndex3, images3, sliderImage3, desc3);

    const prevButton3 = document.getElementById('prevButton3');
    const nextButton3 = document.getElementById('nextButton3');

    nextButton1.addEventListener('click', () => {
        currentIndex1 = (currentIndex1 + 1) % images1.length;
        updateImage(currentIndex1, images1, sliderImage1, desc1);
    });

    prevButton1.addEventListener('click', () => {
        currentIndex1 = (currentIndex1 - 1 + images1.length) % images1.length;
        updateImage(currentIndex1, images1, sliderImage1, desc1);
    });

    nextButton2.addEventListener('click', () => {
        currentIndex2 = (currentIndex2 + 1) % images2.length;
        updateImage(currentIndex2, images2, sliderImage2, desc2);
    });

    prevButton2.addEventListener('click', () => {
        currentIndex2 = (currentIndex2 - 1 + images2.length) % images2.length;
        updateImage(currentIndex2, images2, sliderImage2, desc2);
    });

    nextButton3.addEventListener('click', () => {
        currentIndex3 = (currentIndex3 + 1) % images3.length;
        updateImage(currentIndex3, images3, sliderImage3, desc3);
    });

    prevButton3.addEventListener('click', () => {
        currentIndex3 = (currentIndex3 - 1 + images3.length) % images3.length;
        updateImage(currentIndex3, images3, sliderImage3, desc3);
    });

    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab-button');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('border-blue-500', 'text-blue-500'));
                contents.forEach(c => c.classList.add('hidden'));

                tab.classList.add('border-blue-500', 'text-blue-500');
                document.getElementById(tab.id.replace('Button', 'Content')).classList.remove('hidden');
            });
        });

        tabs[0].classList.add('border-blue-500', 'text-blue-500');
        contents[0].classList.remove('hidden');
    });
</script>
</div>
<?php get_footer(); ?>