<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @vite('resources/css/app.css')
    <title>Nyehaat.id</title>
    <link rel="icon" href="img/logo/logo_shape.png"/>
    <style>
        html {
            scroll-behavior: smooth;
        }

        h1 {
            font-family: "Nunito Sans";
        }

        h2,
        a {
            font-family: "Roboto";
            font-weight: 700;
        }

        p {
            font-family: "Roboto";
            font-weight: 400;
        }
    </style>
</head>
<body class="overflow-x-hidden">
<img src="img/logo/logo_black.png" class="absolute right-5 top-5 w-40 lg:w-52 hidden md:block" alt=""/>
<img src="img/logo/logo_white.png" class="absolute right-5 top-5 w-32 lg:w-52 md:hidden" alt=""/>

<div class="hidden md:block">
    <div class="flex">
        <div class="w-full relative">
            <img src="img/decoration/BigWave.svg" class="w-0 md:w-full hidden md:block" alt=""/>
            <div class="absolute top-5 md:top-10 xl:top-20 left-5 md:left-10 xl:left-20">
                <nav class="text-white">
                    <a href="#menu" class="md:text-lg lg:text-xl">Menu</a>
                    <a href="#pesan" class="ml-3 md:ml-10 md:text-lg lg:text-xl">Pesan</a>
                    <a href="#promo" class="ml-3 md:ml-10 md:text-lg lg:text-xl">Promo</a>
                    <a href="#testimoni" class="ml-3 md:ml-10 md:text-lg lg:text-xl">Testimoni</a>
                </nav>
                <h1 class="font-nunito text-3xl md:text-5xl lg:text-6xl text-white mt-5">
                    MAKAN SEHAT, <br/>
                    HIDUP NYEHAAT
                </h1>
                <p class="text-white w-8/12 md:w-full my-3 md:my-5 text-normal">Bingung makan apa yang sesuai dengan penyakit anda?<br>Yuk pakai Nyehaat.id!</p>
                <a href="/form"
                   class="text-green rounded-md text-lg lg:text-xl bg-white py-1 lg:py-2 px-3 lg:px-5 hover:bg-gray-200 transition">Pesan
                    Sekarang</a>
            </div>
        </div>

        <div class="md:w-3/12 lg:w-5/12 xl:w-8/12 relative">
            <img src="img/decoration/phone.png" class="absolute w-96 -left-16 top-52 lg:top-32 drop-shadow-2xl" alt=""/>
            <img src="img/decoration/bokchoy.png" class="absolute w-80 -right-24 top-48 hidden xl:block"
                 style="transform: rotate(-30deg)" alt=""/>
            <img src="img/decoration/vege1.svg" class="absolute w-32 right-96 top-5 hidden xl:block" alt=""/>
            <img src="img/decoration/vege2.svg" class="absolute w-12 right-60 top-6 xl:top-16 hidden lg:block" alt=""/>
            <img src="img/decoration/vege3.svg" class="absolute w-14 xl:w-20 right-10 top-20 xl:top-28" alt=""/>
            <img src="img/decoration/vege4.svg" class="absolute w-14 right-44 top-96 hidden xl:block" alt=""/>
            <img src="img/decoration/vege5.svg" class="absolute w-14" style="top: 70vh; right: 45vw" alt=""/>
            <img src="img/decoration/vege6.svg" class="absolute w-24 hidden lg:block" style="top: 80vh; right: 55vw"
                 alt=""/>
            <img src="img/decoration/vege7.svg" class="absolute w-20 right-48 hidden xl:block" style="top: 80vh"
                 alt=""/>
            <img src="img/decoration/vege8.svg" class="absolute w-20 right-10 xl:right-20" style="top: 70vh" alt=""/>
        </div>
    </div>
</div>

<div class="md:hidden bg-green py-12">
    <div class="text-center">
        <h1 class="font-nunito text-white mt-5 text-4xl">
            MAKAN SEHAT, <br/>
            HIDUP NYEHAAT
        </h1>
        <p class="text-white p-5 text-normal">Bingung makan apa yang sesuai dengan penyakit anda? Yuk pakai Nyehaat.id!</p>
        <a href="" class="text-green rounded-md text-lg lg:text-xl bg-white py-2 px-5 hover:bg-gray-200 transition">Pesan
            Sekarang</a>
    </div>
</div>
<img src="img/decoration/greenwave2.svg" class="w-full -mt-1 md:hidden mb-5" alt=""/>

<div class="mb-10" id="menu">
    <h1 class="text-center text-green text-3xl md:text-5xl">Menu Populer</h1>
    <p class="text-center text-lg md:text-xl my-3 px-5">Seluruh resep dari menu kami telah disetujui oleh ahli gizi</p>
    <div class="flex justify-center items-center">
        <div class="w-11/12 xl:w-9/12">
            <div class="md:grid grid-cols-3 gap-5 xl:gap-10">
                <div class="h-fit shadow-lg rounded-lg mb-5 md:mb-0">
                    <img src="img/menu/1.png" alt="" class="h-64 w-full rounded-t-lg object-cover"/>
                    <div class="p-5">
                        <h2 class="text-xl mb-2">Ayam Jahe</h2>
                        <div class="flex items-center gap-2 mb-2">
                            <p>Aman untuk</p>
                            <div class="bg-gray-200 rounded-full">
                                <p class="text-gray-700 font-bold text-xs px-3 py-1">Darah Tinggi</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-2">
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="text-center px-3 py-2">
                                    Kalori <br/>
                                    290 kcal
                                </h2>
                            </div>
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="text-center px-3 py-2">
                                    Protein <br/>
                                    36.7 g
                                </h2>
                            </div>
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="hidden md:block lg:hidden text-center px-3 py-2">
                                    Karbo <br/>
                                    23.9 g
                                </h2>
                                <h2 class="md:hidden lg:block text-center px-3 py-2">
                                    Karbohidrat <br/>
                                    23.9 g
                                </h2>
                            </div>
                        </div>
                        <p class="text-justify">Ayam jahe perpaduan kuah jahe yang gurih dan ayam lembut didukung dengan bahan-bahan makanan yang kaya akan Saponin, Alkaloid, dan Terpenoid untuk membantu menurunkan tekanan darah yang tinggi serta merelaksasikan pembuluh darah.</p>
                    </div>
                </div>
                <div class="h-fit shadow-lg rounded-lg mb-5 md:mb-0">
                    <img src="img/menu/2.png" alt="" class="h-64 w-full rounded-t-lg object-cover"/>
                    <div class="p-5">
                        <h2 class="text-xl mb-2">Tumis Jamur & Tahu Saus Tiram</h2>
                        <div class="flex items-center gap-2 mb-2">
                            <p>Aman untuk</p>
                            <div class="bg-gray-200 rounded-full">
                                <p class="text-gray-700 font-bold text-xs px-3 py-1">Diabetes</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-2">
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="text-center px-3 py-2">
                                    Kalori <br/>
                                    171 kcal
                                </h2>
                            </div>
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="text-center px-3 py-2">
                                    Protein <br/>
                                    7.7 g
                                </h2>
                            </div>
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="hidden md:block lg:hidden text-center px-3 py-2">
                                    Karbo <br/>
                                    8.6 g
                                </h2>
                                <h2 class="md:hidden lg:block text-center px-3 py-2">
                                    Karbohidrat <br/>
                                    8.6 g
                                </h2>
                            </div>
                        </div>
                        <p class="text-justify">Tumis jamur dan tahu saus tiram memiliki perpaduan bahan makanan yang rendah lemak dan kalori sehingga menjaga kadar gula darah anda tetap rendah. Penggunaan nasi merah menjadi alternatif yang pas untuk menggantikan nasi putih yang memiliki kandungan gula yang tinggi.</p>
                    </div>
                </div>
                <div class="h-fit shadow-lg rounded-lg">
                    <img src="img/menu/3.png" alt="" class="h-64 w-full rounded-t-lg object-cover"/>
                    <div class="p-5">
                        <h2 class="text-xl mb-2">Pea & Spinach Carbonara</h2>
                        <div class="flex items-center gap-2 mb-2">
                            <p>Aman untuk</p>
                            <div class="bg-gray-200 rounded-full">
                                <p class="text-gray-700 font-bold text-xs px-3 py-1">Penyakit Jantung</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-2">
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="text-center px-3 py-2">
                                    Kalori <br/>
                                    430 kcal
                                </h2>
                            </div>
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="text-center px-3 py-2">
                                    Protein <br/>
                                    20.2 g
                                </h2>
                            </div>
                            <div class="rounded-md bg-green text-white text-xs">
                                <h2 class="hidden md:block lg:hidden text-center px-3 py-2">
                                    Karbo <br/>
                                    54.1 g
                                </h2>
                                <h2 class="md:hidden lg:block text-center px-3 py-2">
                                    Karbohidrat <br/>
                                    54.1 g
                                </h2>
                            </div>
                        </div>
                        <p class="text-justify">Pea & Spinach Carbonara didukung dengan bahan-bahan yang penuh dengan vitamin-K, bersodium rendah, dan rendah lemak untuk membantu menjaga arteri dan mendukung pembekuan darah yang cepat, sehingga sangat sehat untuk jantung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<img src="img/decoration/greenwave.svg" class="w-full -mb-1" alt=""/>
<div class="bg-green" id="pesan">
    <h1 class="text-center text-white text-3xl md:text-5xl p-5">Bagaimana Cara Pesan?</h1>
    <div class="flex justify-center items-center">
        <div class="w-10/12 xl:w-9/12">
            <div class="md:grid grid-cols-3 gap-10 my-5">
                <div class="mb-5 md:mb-0">
                    <img src="img/pesan/menu.svg" class="m-auto h-24 md:h-32" alt=""/>
                    <h2 class="text-center text-white pt-3 text-2xl">Masukkan Data Anda</h2>
                    <p class="text-center text-white py-3">Nyehaat.id menyediakan variasi menu sehat yang disajikan
                        untuk menyesuaikan pantangan anda</p>
                </div>
                <div class="mb-5 md:mb-0">
                    <img src="img/pesan/pesan.svg" class="m-auto h-24 md:h-32" alt=""/>
                    <h2 class="text-center text-white pt-3 text-2xl">Pesan</h2>
                    <p class="text-center text-white py-3">Layanan PO dibuka pada hari Senin hingga Kamis. Pemesanan
                        akan dibantu oleh Customer Service Nyehaat.id melalui WhatsApp.</p>
                </div>
                <div class="mb-5 md:mb-0">
                    <img src="img/pesan/pengiriman.svg" class="m-auto h-24 md:h-32" alt=""/>
                    <h2 class="text-center text-white pt-3 text-2xl">Pengiriman</h2>
                    <p class="text-center text-white py-3">Setelah melakukan pemesanan, makanan akan dikirimkan pada
                        hari Sabtu dan Minggu.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-image: url(img/PromoBg.png)" class="bg-cover bg-no-repeat h-96" id="promo">
    <div class="flex flex-col justify-center items-center h-full">
        <h1 class="text-center text-green text-3xl md:text-5xl">Free Delivery</h1>
        <p class="text-center mt-2 px-5 text-2xl">Dapatkan gratis ongkir untuk transaksi pertama anda.</p>
        <div class="flex justify-center py-3">
            <a href="/form"
               class="text-white rounded-md text-lg lg:text-xl bg-green py-1 lg:py-2 px-3 lg:px-5 hover:bg-gr-600 transition">Dapatkan
                Promo Sekarang</a>
        </div>
    </div>
</div>

<div class="bg-green" id="testimoni">
    <h1 class="text-center text-white text-6xl pt-10">"</h1>
    <div class="lg:grid grid-cols-3 gap-20 px-5 md:px-10 flex flex-row items-center">
        <div class="pb-5 md:pb-0">
            <p class="text-center text-white text-xl md:text-2xl">
                Pertama kali menjadi customer Nyehaat.id, saya sangat terkesan dengan menu Nasi Ayam Jahe yang disajikan
                untuk pengidap Diabetes dan darah tinggi. Ayamnya dan nasinya semuanya nikmat! Tidak lupa, pelayanannya
                selalu datang pada waktu yang tepat dan makanannya terbungkus rapi.
            </p>
            <h2 class="text-center text-white text-xl md:text-2xl py-5">Rafi</h2>
        </div>
        <div class="pb-5 md:pb-0">
            <p class="text-center text-white text-xl md:text-2xl">Bakal pesan lagi! Nyehaat.id berhasil membuat pola
                makan saya semakin sehat dalam kurun waktu 1 minggu setelah memakai pelayanan mereka. Terima kasih
                Nyehaat.id</p>
            <h2 class="text-center text-white text-xl md:text-2xl py-5">Abdul</h2>
        </div>
        <div class="pb-5 md:pb-0">
            <p class="text-center text-white text-xl md:text-2xl">Nyehaat.id keren! Layanan ini berhasil membantu saya
                dan anak perempuan saya untuk menurunkan berat badan dan glukosa di darah kami tanpa kontrol dokter
                berlanjut! Terima kasih banyak Nyehaat.id</p>
            <h2 class="text-center text-white text-xl md:text-2xl py-5">Setya</h2>
        </div>
    </div>
</div>
<img src="img/decoration/greenwave2.svg" class="w-full -mt-1" alt=""/>

<div class="py-5">
    <div class="ml-3 md:ml-8">
        <img src="img/logo/logo_black.png" class="w-40" alt=""/>
    </div>
    <div class="md:grid grid-cols-3 gap-20 ml-0 md:ml-10 mt-5 px-5 md:px-0">
        <div class="mb-3">
            <h2 class="text-2xl">Kantor</h2>
            <p>UC Ventures, CitraLand CBD Boulevard, Made, Sambikerep, Surabaya, Jawa Timur 60219</p>
        </div>
        <div class="mb-3">
            <h2 class="text-2xl">Hubungi Kami</h2>
            <div class="flex items-center gap-2 py-2">
                <img src="img/icon/email.svg" alt="" class="w-7 md:w-10"/>
                <p>nyehaat.id@gmail.com</p>
            </div>
            <div class="flex items-center gap-2 py-2">
                <img src="img/icon/whatsapp.svg" alt="" class="w-7 md:w-10"/>
                <p>081231149830</p>
            </div>
        </div>
        <div>
            <h2 class="text-2xl">Sosial Media</h2>
            <div class="flex items-center gap-2 py-2">
                <img src="img/icon/instagram.svg" alt="" class="w-7 md:w-10"/>
                <p>nyehaat.id</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
