@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6 max-w-4xl mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-4">Selamat datang di Sistem Diagnosa Penyakit Mental</h1>
        <p class="text-lg text-gray-700 mb-4">
            Sistem ini dirancang untuk membantu Anda mendeteksi gejala penyakit mental berdasarkan gejala yang Anda alami. 
            Berikut adalah beberapa informasi tentang penyakit mental yang umum terjadi.
        </p>
        
        <!-- Penyakit Mental -->
        <div class="space-y-8">

            <!-- Penyakit Depresi -->
            <div class="flex flex-col md:flex-row items-center space-x-6">
                <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1605517097/attached_image/sakit-jiwa-ternyata-ada-banyak.jpg" alt="Depresi" class="w-60 h-40 object-cover rounded-lg shadow-md">
                <div>
                    <h2 class="text-2xl font-semibold text-red-500">Depresi</h2>
                    <p class="text-gray-700 mt-2">
                        Depresi adalah gangguan mental yang menyebabkan perasaan sedih yang mendalam, hilangnya minat atau kesenangan dalam kegiatan sehari-hari, dan perasaan tak berharga.
                        Beberapa gejalanya meliputi kelelahan, gangguan tidur, dan kesulitan berkonsentrasi.
                    </p>
                    <p class="text-gray-500 mt-2">
                        <strong>Sumber:</strong> <a href="https://www.psychologytoday.com/us/basics/depression" class="text-red-600" target="_blank">Psychology Today</a>
                    </p>
                </div>
            </div>

            <!-- Penyakit Gangguan Kecemasan -->
            <div class="flex flex-col md:flex-row items-center space-x-6">
                <img src="https://img-cdn.medkomtek.com/KiSnECHjYW0IR-KZOEgf5wvj6o8=/0x0/smart/filters:quality(100):format(webp)/article/3z76h5RRiBQ2MGAWxgVVG/original/055578800_1539076187-Awas-5-Gejala-Gangguan-Mental-Ini-Bisa-Saja-Anda-Alami-By-PR-Image-Factory-Shutterstock.jpg" alt="Cemas" class="w-60 h-40 object-cover rounded-lg shadow-md">
                <div>
                    <h2 class="text-2xl font-semibold text-red-500">Gangguan Kecemasan</h2>
                    <p class="text-gray-700 mt-2">
                        Gangguan kecemasan melibatkan kecemasan berlebihan yang mengganggu kehidupan sehari-hari. Gejala bisa termasuk kecemasan yang tidak terkendali, gangguan tidur, dan serangan panik.
                    </p>
                    <p class="text-gray-500 mt-2">
                        <strong>Sumber:</strong> <a href="https://www.nimh.nih.gov/health/topics/anxiety-disorders" class="text-red-600" target="_blank">National Institute of Mental Health</a>
                    </p>
                </div>
            </div>

            <!-- Penyakit Gangguan Bipolar -->
            <div class="flex flex-col md:flex-row items-center space-x-6">
                <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/31040533/gangguan-psikologi-yang-sering-dialami-pria-dewasa-halodoc.jpg.webp" alt="Bipolar" class="w-60 h-40 object-cover rounded-lg shadow-md">
                <div>
                    <h2 class="text-2xl font-semibold text-red-500">Gangguan Bipolar</h2>
                    <p class="text-gray-700 mt-2">
                        Gangguan bipolar melibatkan perubahan suasana hati yang drastis, antara perasaan sangat bahagia dan berenergi (mania) dan perasaan sangat tertekan (depresi).
                    </p>
                    <p class="text-gray-500 mt-2">
                        <strong>Sumber:</strong> <a href="https://www.psychologytoday.com/us/conditions/bipolar-disorder" class="text-red-600" target="_blank">Psychology Today</a>
                    </p>
                </div>
            </div>

            <!-- Penyakit Skizofrenia -->
            <div class="flex flex-col md:flex-row items-center space-x-6">
                <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/01/09041648/Ketahui-Bagaimana-Cara-Tepat-Merawat-ODGJ.jpg" alt="Skizofrenia" class="w-60 h-40 object-cover rounded-lg shadow-md">
                <div>
                    <h2 class="text-2xl font-semibold text-red-500">Skizofrenia</h2>
                    <p class="text-gray-700 mt-2">
                        Skizofrenia adalah gangguan mental yang menyebabkan gangguan dalam berpikir, persepsi, dan perilaku. Penderita sering mengalami halusinasi dan delusi.
                    </p>
                    <p class="text-gray-500 mt-2">
                        <strong>Sumber:</strong> <a href="https://www.nimh.nih.gov/health/topics/schizophrenia" class="text-red-600" target="_blank">National Institute of Mental Health</a>
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection
