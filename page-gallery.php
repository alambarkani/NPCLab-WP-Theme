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
            <p class="mb-5 p-4 text-gray-700">Salah satu teknologi yang akan selalu digunakan dan berkembang hingga masa depan yaitu automation.</p>
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
            <p class="mb-5 p-4 text-gray-700">Akhir-akhir ini, drone merupakan salah satu pengembangan teknologi yang sangat menarik.</p>
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
            <p class="mb-5 p-4 text-gray-700">Survey Team terdiri dari orang-orang yang ahli di bidang hidrografi dan oseanografi.</p>
        </div>
    </div>
</div>

<script>
    const images1 = [
        { src: "<?php echo get_template_directory_uri() . '/assets/images/auto1.jpg'; ?>", desc: "Proses Automation: Implementasi teknologi untuk meningkatkan efisiensi." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/auto2.jpg'; ?>", desc: "Sistem Kontrol PLC: Mengelola dan mengontrol sistem otomatisasi." }
    ];

    const images2 = [
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone1.jpg'; ?>", desc: "Menggunakan drone untuk pemetaan udara." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone2.jpg'; ?>", desc: "Drone dalam operasi pengawasan." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone3.jpg'; ?>", desc: "Pelatihan drone." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone4.jpg'; ?>", desc: "Drone VTOL." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone5.jpg'; ?>", desc: "Drone untuk menyembuarkan api." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone6.jpg'; ?>", desc: "Drone untuk pengiriman barang." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone7.jpg'; ?>", desc: "Drone untuk mengirim pelampung." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone8.jpg'; ?>", desc: "Drone untuk menyebarkan disinvektan." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/drone9.jpg'; ?>", desc: "Penggunaan drone dalam permukaan air." }
    ];

    const images3 = [
        { src: "<?php echo get_template_directory_uri() . '/assets/images/survey1.jpg'; ?>", desc: "Tim survey melakukan pengukuran di lapangan." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/survey2.jpg'; ?>", desc: "tim survey melakukan survey dalam laut" },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/s1.jpg'; ?>", desc: "Pengukuran menggunakan peralatan canggih." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/s2.jpg'; ?>", desc: "Survey menggunakan drone untuk efisiensi." },
        { src: "<?php echo get_template_directory_uri() . '/assets/images/s3.jpg'; ?>", desc: "Survey menggunakan drone untuk efisiensi." }
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