<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami - Pondok Citarasa Sunda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        * {
            padding:0;
            margin:0;
        }
        body {
            font-family: 'Nunito Sans', sans-serif;
            background-image: url('assets/img/tentang.png'); /* Ganti dengan gambar latar belakang Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Agar latar belakang tetap saat scroll */
            color: #333;
        }
        a {
            color: inherit;
            text-decoration: none;
        }

        /* navbar */
        .navbar {
            display: flex;
            justify-content: flex-start; /* Mengatur item ke kiri */
            align-items: center;
            padding: 0.5rem 1rem;
            background-color: #1A5319;
            color: #fff;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 99;
        }

        .navbar-links {
            display: flex;
            gap: 1rem;
            margin-left: 15px; /* Menambahkan jarak dari kiri */
        }

        .navbar-links a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
        }

        .navbar-links a:hover {
            background-color: #A49393;
            border-radius: 5px;
        }

        .content {
            padding: 100px 15px 25px; /* Menambah padding top agar tidak terpotong navbar */
        }
        .container {
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            background-color: #FEFDED;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            border: 2px solid #d6bda4; /* Tambahkan border untuk efek tradisional */
            background-size: cover;
        }
        .back-button {
            display: block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #67595E;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #A49393;
        }
        h1, h2 {
            color: #67595E;
            font-family: 'Roboto', sans-serif;
        }
        p {
            text-align: justify; /* Menyelaraskan teks agar rata kiri-kanan */
            margin-bottom: 15px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <!-- navbar -->
    <div class="navbar">
        <a href="#" id="btnBars">
            <i class="fa fa-bars"></i>
        </a>
        <div class="navbar-links">
            <a href="index.php">Beranda</a>
            <a href="tentang.php">Tentang Kami</a>
            <a href="hubungi.php">Hubungi Kami</a>
        </div>
    </div>

    <!-- content -->
    <div class="content">
        <div class="container">
            <p><h1>Tentang Kami</h1></p>

            <p>Pondok Citarasa Sunda adalah restoran yang didedikasikan untuk menyajikan kelezatan kuliner khas Sunda dengan sentuhan modern. Berdiri sejak tahun 2023, kami berkomitmen untuk memberikan pengalaman makan yang memuaskan dengan rasa yang autentik dan pelayanan yang ramah.</p>
            <p>Di Pondok Citarasa Sunda, kami percaya bahwa setiap hidangan adalah hasil dari bahan-bahan berkualitas tinggi dan resep yang telah diwariskan secara turun-temurun. Menu kami terdiri dari berbagai pilihan hidangan Sunda yang menggugah selera, mulai dari makanan pembuka yang menggoda hingga hidangan utama yang lezat, serta minuman tradisional yang menyegarkan.</p>
            <p>Kami sangat bangga dengan resep-resep asli yang kami tawarkan, termasuk Nasi Timbel, Sate Maranggi, Ayam Penyet, dan Karedok yang terkenal dengan cita rasa yang otentik dan khas. Setiap hidangan disiapkan dengan penuh perhatian dan kecintaan terhadap tradisi kuliner Sunda.</p>
        </div>
    </div>

    <script type="text/javascript">
        
        var btnBars = document.getElementById('btnBars')
        var sidebar = document.querySelector(".sidebar")

        btnBars.addEventListener('click', function(e){
            e.preventDefault();

            sidebar.classList.toggle('sidebar-show')

        })

    </script>

</body>
</html>
