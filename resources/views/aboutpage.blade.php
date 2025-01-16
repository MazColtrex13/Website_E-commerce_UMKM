@extends('layouts.master')

@section('content')
    <div class="bg-[#F5F5F5] py-5">
        <div class="container px-4 mx-auto text-center">




            <div>
                <h1 class="text-3xl font-semibold text-[#9a031fdd] mb-6 pl-2">
                    <a href="{{ route('home') }}" class="text-[#9a031fdd]">Halaman Utama</a> / Tentang Kami
                </h1>
            </div>

            <!-- Image Section -->

            <img src="{{ asset('images/firstsliderpic.webp') }}" alt="About Us Image"
                class="top-0 object-cover w-full rounded-lg h-96">



            <!-- Description Section -->
            <div class="mt-12">
                <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700 ">
                    Selamat Datang di <strong class="text-[#9a031fdd]">Pemadam Kelaparan</strong>, Tempat terbaik untuk mengatasi rasa lapar Anda dengan sajian lezat yang ramah kantong. 
                    Dari makanan tradisional hingga minuman segar, kami hadir untuk memberikan pengalaman kuliner terbaik dengan harga yang bersahabat. 
                    Rasa mewah, harga murah!
                </p>
            </div>

            <!-- Mission Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-semibold text-[#9a031fdd] mb-4">Misi Kami</h3>
                <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700">
                  Di<strong class="text-[#9a031fdd]">Pemadam Kelaparan</strong>, Menjadi solusi utama dalam menyediakan makanan yang lezat, terjangkau, dan berkualitas bagi masyarakat, 
                  serta berkontribusi dalam mengurangi kelaparan di setiap lapisan masyarakat.
                </p>
            </div>

            <!-- Vision Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-semibold text-[#9a031fdd] mb-4">Visi Kami</h3>
                <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700">
                Menyediakan makanan berkualitas dengan harga terjangkau:
                Memberikan pilihan makanan yang sehat, lezat, dan ekonomis untuk semua kalangan.

                Mengutamakan pelayanan pelanggan:
                Memberikan pengalaman terbaik melalui layanan cepat, ramah, dan profesional.

                Berinovasi dalam menu dan penyajian:
                Menghadirkan variasi menu sesuai dengan tren dan kebutuhan pelanggan tanpa mengorbankan nilai gizi.

                Berperan dalam pemberdayaan masyarakat lokal:
                Melibatkan petani, nelayan, dan pelaku usaha kecil sebagai mitra dalam rantai pasokan bahan makanan.

                Mengurangi limbah makanan:
                Mengelola sisa makanan dengan program donasi untuk masyarakat yang membutuhkan.

                Meningkatkan kesadaran sosial terhadap kelaparan:
                Berkolaborasi dengan komunitas dan organisasi sosial untuk menjalankan program bantuan makanan bagi mereka yang kurang mampu.
                </p>

            </div>



        </div>


    </div>
@endsection
