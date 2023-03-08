<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="/css/profile.css">
    <script src="https://kit.fontawesome.com/b75608f116.js" crossorigin="anonymous"></script>
    <title>Jocelyn's Profile</title>
</head>
<body>
    <div class="navbar-container">
        <nav class="navbar is-transparent is-black" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a href="../home" class="navbar-item">
                        Home
                    </a>

                    <a href="../aboutUs" class="navbar-item">
                        About Us
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="profile-container">
        <div class="left-profile">
            <img src="/img/jocelyn.jpg" alt="jocelyn">
            <p class="profile-name">Jocelyn Wievin</p>
            <div class="icon-container">
                <div class="location">
                    <p class="fa-2xl fa-sharp fa-solid fa-location-dot"></p>
                    <p class="nama-jalan">Jl. Sunter Hijau X</p>
                </div>
                <div class="phone">
                    <p class="fa-xl fa-solid fa-phone-volume"></p>
                    <p class="nomor-telpon">087888002552</p>
                </div>
                <div class="email">
                    <p class="fa-xl fa-sharp fa-solid fa-envelope"></p>
                    <p class="alamat-email">jocelyn.wievin@binus.ac.id</p>
                </div>
            </div>
        </div>

        <div class="center-profile">
            <div class="aboutMe">
                <p class="mySection">About Me</p>
                <p>
                Saya merupakan seorang mahasiswa semester 6 di Bina Nusantara dengan jurusan 
                Teknik Informatika dan Statistika. Mata kuliah yang paling saya sukai adalah 
                Computer Networks. Saya merupakan orang yang mudah beradaptasi, cepat tangkap, 
                dan memiliki rasa ketertarikan pada hal-hal baru. Saya tertarik untuk bekerja 
                dalam bidang networking.
                </p>
            </div>

            <div class="exp">
                <p class="mySection">Experience</p>
                <li class="boldFont">2021 - 2022</li>
                <p>Part Time Barista</p>
                <p>Bar Division</p>
                <p>JULY Coffee & Resto</p>
            </div>

            <div class="edu">
                <p class="mySection">Education</p>
                <li class="boldFont">Universitas Bina Nusantara</li>
                <p>2020 - Sekarang (Semester 6)</p>
                <p>Jurusan Teknik Informatika dan Statistika</p>
            </div>
        </div>

        <div class="right-profile">
            <div class="soft-skill">
                <p class="mySection">Soft Skill</p>
                <div class="bar">
                    <p class="namaSkill">Adaptibility</p>
                    <progress class="progress is-info" value="88" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Flexibility</p>
                    <progress class="progress is-danger" value="75" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Teamwork</p>
                    <progress class="progress is-info" value="85" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Creativity</p>
                    <progress class="progress is-success" value="95" max="100"></progress>
                </div>
            </div>

            <div class="hard-skill">
                <p class="mySection">Hard Skill</p>
                <div class="bar">
                    <p class="namaSkill">Badminton</p>
                    <progress class="progress is-success" value="100" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">SQL</p>
                    <progress class="progress is-success" value="95" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Cisco</p>
                    <progress class="progress is-danger" value="78" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Excel</p>
                    <progress class="progress is-info" value="85" max="100"></progress>
                </div>
            </div>

            <div class="hobby">
                <p class="mySection">Hobbies</p>
                <div class="bar">
                    <p class="namaSkill">Sketching</p>
                    <progress class="progress is-info" value="88" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Badminton</p>
                    <progress class="progress is-success" value="100" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Watching Movie</p>
                    <progress class="progress is-danger" value="78" max="100"></progress>
                </div>
            </div>
        </div>
    </div>
</body>
</html>