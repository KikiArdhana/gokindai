<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
</head>
<body>


<!-- Navbar -->
<?php include 'component/navbar.php'; ?>

<!-- Home -->
<section id="home">
    <div class="ml-10 relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-left"> <!-- Teks rata kiri -->
            <div class="flex flex-col">
    <h1 class="text-balance text-4xl font-bold tracking-tight text-white sm:text-6xl">
        it’s not just <span class="highlight">FOOD</span>,
    </h1>
    <h1 class="text-balance text-4xl font-bold tracking-tight text-white sm:text-6xl mt-2">
        it’s an <span class="highlight">EXPERIENCE</span>.
    </h1>
    </div>
                <p class="mt-6 text-lg leading-8 text-white">reo aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex items-center justify-start gap-x-6">
    <a href="menu.php" class="rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-black shadow-lg hover:bg-gray-200 hover:text-black transform transition-transform duration-300 hover:scale-110">
        View Menu
    </a>
    <a href="rewards.php" class="rounded-full bg-rose-400  px-4 py-2.5 text-sm font-semibold text-white shadow-lg hover:bg-rose-200 hover:text-black transform transition-transform duration-300 hover:scale-110">
        Check Rewards
    </a>
</div>
            </div>
        </div>
    </div>
</section>


<!-- Reward -->
<section id="reward" class="flex flex-col justify-center items-center ">
    <div class="mt-10 text-center">
        <h1 class="text-balance text-4xl font-bold tracking-tight text-white sm:text-6xl">
            Poin Anda, Hadiah Anda
            <h2 class="font-semibold py-2 text-white mt-2 text-2xl ">Cek sekarang untuk Promo Spesial!</h2>
        </h1>
        <form class="flex justify-center items-center mt-8 relative">
    <div class="relative w-96">
        <input 
            type="search" 
            placeholder="Masukkan nomor telepon anda..." 
            class="px-8 py-3 w-full text-sm rounded-full border-none shadow-lg focus:outline-none focus:ring-2 focus:ring-black pr-10"
        >
        <span class="absolute right-7 top-1/2 transform -translate-y-1/2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 2a9 9 0 100 18 9 9 0 000-18zM21 21l-4.35-4.35" />
            </svg>
        </span>
    </div>
</form>
  </div>
</section>


<section id="about" class="flex justify-between items-start w-full  py-10 mt-10">
    <div class="container flex justify-between items-start w-full">
        <!-- Kolom kiri untuk teks deskripsi -->
        <div class="w-1/2 ">
            <!-- Judul di tengah atas -->
            <h1 class="text-sm font-bold tracking-tight text-white sm:text-3xl mb-8 text-center">
                About us & Place
            </h1>

            <h3 class="text-l font-semibold mb-4 text-white">Selamat datang di Kindai, Resto spesialis masakan Banjar</h3>
            <p class="mb-4 text-sm text-white">
                Kindai hadir membawa cita rasa khas Banjarmasin ke tengah-tengah Yogyakarta. Kami bangga menyajikan hidangan autentik dari tanah Kalimantan Selatan, di mana setiap piring menghidangkan kenikmatan dan kehangatan tradisi Banjar.
            </p>
            <p class="mb-4 text-sm text-white">
                Nikmati kelezatan nasi kuning kami yang dipadukan dengan pilihan lauk yang beragam, atau cicipi segarnya soto banjar—dapat disajikan dengan nasi ataupun ketupat, sesuai selera Anda. Setiap hidangan di Kindai dimasak dengan penuh cinta dan menggunakan bahan-bahan segar berkualitas, menjadikan pengalaman bersantap Anda di sini tak terlupakan.
            </p>
        </div>

        <!-- Kolom kanan untuk carousel -->
    </div>
</section>


<section id="menu" class="flex  justify-center items-start ">
    <h1 class="text-balance text-sm font-semibold tracking-tight text-white sm:text-4xl mb-4">Khas Kindai</h1>
</section>

<section id="contact" class="flex flex-col justify-center items-center mt-8 w-full">
    <h1 class="justiyfy-center text-balance text-sm font-bold tracking-tight text-white sm:text-4xl mb-4">Contact Us</h1>
    
    <!-- Kontainer yang membagi halaman menjadi dua kolom -->
    </div>
    
    <!-- Tombol Buka di Google Maps -->
    <a 
        href="https://maps.app.goo.gl/NusQUnVUbuD7Uj6Q6" 
        target="_blank" 
        class="mt-8 px-8 py-2  text-sm font-semibold hover:bg-rose-900 text-black bg-white rounded-full shadow-lg hover:bg-rose-200 hover:text-black transition duration-300"
    >
        Open in Google Maps
    </a>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
