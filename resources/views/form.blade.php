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
<body>
<div class="flex justify-center items-center">
    <div class="bg-white w-screen md:w-1/2 min-h-screen">
        <img src="img/logo/logo_black.png" class="m-5 lg:m-8 w-40 lg:w-52" alt=""/>
        <div class="p-7 lg:p-10 bg-white">
            <h2 class="text-2xl mb-5">Yuk daftarkan diri untuk selalu mendapatkan penawaran terbaik dari Nyehaat.id</h2>
            <form action="/log_user" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-6">
                    <label for="exampleInputName" class="form-label inline-block mb-2 text-gray-700">Nama</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleInputName"
                        aria-describedby="emailHelp"
                        placeholder="John Doe"
                    />
                </div>
                <div class="form-group mb-6">
                    <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleInputEmail2"
                        aria-describedby="emailHelp"
                        placeholder="johndoe@example.com"
                    />
                </div>
                <div class="form-group mb-6">
                    <label for="exampleInputNomor" class="form-label inline-block mb-2 text-gray-700">Nomor
                        Telepon</label>
                    <input
                        type="tel"
                        name="phone_number"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleInputNomor"
                        placeholder="08*********"
                    />
                </div>
                <button
                    id="modalbutton"
                    type="submit"
                    class="w-full px-6 py-2.5 border-2 border-green hover:border-green bg-green text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-white hover:text-green hover:shadow-lg focus:bg-white focus:text-green focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
    <div class="bg-green hidden md:flex justify-center items-center w-1/2 min-h-screen">
        <div>
            <img src="img/decoration/phone2.png" class="w-1/3 m-auto" alt=""/>
            <h1 class="font-nunito text-3xl text-white mt-5 text-center px-10">MAKAN SEHAT, HIDUP NYEHAAT</h1>
        </div>
    </div>
</div>
</body>
</html>
