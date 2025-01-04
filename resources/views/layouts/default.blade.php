<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: wheat;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        /* Header */
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }

        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            padding: 0;
            list-style: none;
        }

        header li {
            display: inline;
            padding: 0 20px 0 20px;
        }

        header h1 {
            float: left;
            color: #fff;
        }

        header nav {
            float: right;
            margin-top: 10px;
        }

        /* Hero Section */
        .hero {
            background: navy;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .hero .btn {
            display: inline-block;
            color: #333;
            background: #fff;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 5px;
        }

        .hero .btn:hover {
            background: #ccc;
        }

        /* About Section */
        .about,
        .info,
        .contact {
            padding: 50px 0;
            text-align: center;
        }

        h2 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        /* Fitur Section */
        .pict {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .info .fitur {
            margin-bottom: 20px;
        }

        .info {
            padding: 30px;
        }

        .fitur-box {
            background-color: #ffc107;
            padding: 20px;
            border-radius: 10px;
        }

        /* Footer */
        footer {
            background-color: navy;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <section id="home" class="hero">
        <div class="container">
            <h2 style="color: white;">✨ Welcome to Do-ty List ✨</h2>
            <p style="margin-top: 40px">Cape karena lupa tugas terus? Let Do-ty List come to the rescue!</p>
            <p>Do-ty List akan mempermudah kamu untuk mencatat segala tugas mu beserta deadline-nya!</p>
            <p>Let's be productive with Do-ty List!</p>
            <a href="#info" class="btn">Learn More</a>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p style="font-size: 20px; text-align: justify;">Kenalin nih Do-ty List, teman terbaik buat ngatur
                tugas-tugas
                kamu! Dibuat buat bikin aktivitas sehari-hari kamu lebih mudah. Do-ty List bakal bantu kamu biar nggak
                lupa sama hal-hal yang harus dikerjain. Mau itu tugas kuliah, urusan kerjaan, pekerjaan rumah, atau
                tujuan pribadi,
                Do-ty List kasih cara yang simple tapi keren buat ngatur semua tugas kamu. Kamu juga bisa cantumin
                deadline untuk tugas loh! <br> Dengan Do-ty List, kamu bisa
                jadi lebih produktif dan tenang, karena semua yang harus kamu lakukan ada di satu tempat dan gampang
                diakses. Yuk, mulai pakai Do-ty List dan rasain sendiri betapa mudahnya jadi lebih teratur setiap
                hari!</p>
        </div>
    </section>
    <section id="info" class="info">
        <div class="container fitur-box">
            <img src="{{ Vite::asset('resources/images/pandaa.png') }}" alt="Profile Picture" class="pict">
            <h2 class="mb-5 mt-3">Manfaatkan Fitur ini !</h2>
            <div class="fitur">
                <h3><b>Tambah Tugas  ✔</b></h3>
                <p style="font-size: 20px">Kamu bisa memanfaatkan fitur <b>Tambah Tugas</b> untuk mencatat list tugas-tugas mu, loh!</p>
            </div>
            <div class="fitur">
                <h3><b>Edit Tugas  ✔</b></h3>
                <p style="font-size: 20px">Kamu bisa memanfaatkan fitur <b>Edit Tugas</b> untuk mengedit list tugas-tugas mu, dan ubah status tugaas mu, loh!</p>
            </div>
            <div class="fitur">
                <h3><b>Lihat Tugas  ✔</b></h3>
                <p style="font-size: 20px">Kamu bisa memanfaatkan fitur <b>Lihat Tugas</b> untuk melihat detail dari tugas mu, loh!</p>
            </div>
            <div class="fitur">
                <h3><b>Export to Excel</b></h3>
                <p style="font-size: 20px">Kamu bisa memanfaatkan fitur <b>Export to Excel</b> kalau kamu ingin export semua tugas mu ke bentuk Excel, loh!</p>
            </div>
            <div class="fitur">
                <h3><b>Export to PDF</b></h3>
                <p style="font-size: 20px">Kamu bisa memanfaatkan fitur <b>Export to PDF</b> kalau kamu ingin export semua tugas mu ke bentuk PDF, loh!</p>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div>
                <p>Ada kritik & saran? Feel free to reach out to us on</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/telkomuniversity_surabaya/">
                            <img src="https://w7.pngwing.com/pngs/336/165/png-transparent-instagram-instagram-logo-3d-instagram-logo-social-media-logo-application-3d-icon.png"
                                alt="Instagram" style="width: 50px;">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://api.whatsapp.com/send/?phone=6281122339123&text&type=phone_number&app_absent=0">
                            <img src="https://png.pngtree.com/element_our/md/20180626/md_5b321c98efaa6.jpg"
                                alt="WhatsApp" style="width: 50px;">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://id.linkedin.com/school/telkom-university/">
                            <img src="https://images.rawpixel.com/image_png_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjk4Mi1kNS0xMF8xLnBuZw.png"
                                alt="Linkedin" style="width: 50px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Do-ty List</p>
        </div>
    </footer>
</body>

</html>
