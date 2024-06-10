<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Keren</title>
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="profile-image">
                <img src="me.jpg" alt="Profile Picture">
            </div>
            <div class="profile-details">
                <h2 class="name">Maudina Mey Nur Hidayah</h2>
                <p>Hobby : Voly</p>
                <p>Sekolah :Smk telkom Sidoarjo</p>
                <p>Tempat tinggal :Sidoarjo</p>
                <p>Jenis kelamin :Perempuan</p>
                <p>Agama :Islam</p>
                <p class="bio">I am a simple woman who just likes to look at the sky, but I have a hobby of playing voly and I want to jump into the world of athletes... However, I will carry out my predetermined destiny with all trials and sincerity</p>
                <p>"Allah tidak akan mengubah keadaan suatu kaum sehingga mereka mengubah keadaan yang ada pada diri mereka sendiri."</p>
                <ul class="social-links">
                    <li><a href="https://www.instagram.com/mogiimud_?igsh=cnRrZW10bHRrOGM1" class="social-link">Instagram</a></li>
                    <li><a href="https://open.spotify.com/user/31vmtdlbxlrikfa2ycl55thsybm4?si=794be962f1044144" class="social-link">spotify</a></li>
                    <li><a href="https://www.tiktok.com/@niecy_zyy?_t=8klkGHk80EZ&_r=1" class="social-link">Tik Tok</a></li>
                     <a href="landing_ku2.php">BACK</a>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #ffe6f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
a {
            display: inline-block;
            padding: 10px 20px; /* Tambahan padding untuk efek 3D */
            background-color: #ff66b2; /* Warna background pink */
            color: white; /* Warna teks putih */
            text-decoration: none;
            border-radius: 5px;
            border: 2px solid #ff3399; /* Tambahkan border untuk efek 3D */
            box-shadow: 0 5px #ff3399; /* Bayangan untuk efek 3D */
            cursor: pointer;
            transition: all 0.3s;
        }

        a:hover {
            background-color: #ff3399; /* Warna background pink lebih gelap saat hover */
            box-shadow: 0 3px #ff0066; /* Mengurangi bayangan untuk efek 3D */
            transform: translateY(-2px); /* Efek naik saat hover */
        }

        a:active {
            background-color: #ff0066; /* Warna background pink lebih gelap saat aktif */
            box-shadow: 0 2px #ff3399; /* Mengurangi bayangan lebih jauh */
            transform: translateY(2px); /* Efek turun saat aktif */
        }
.container {
    background-color: #ffccf2;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    width: 80%;
    max-width: 600px;
}

.profile {
    text-align: center;
}

.profile-image img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
}

.profile-details {
    color: #ff4da6;
}

.profile-details .name {
    font-size: 24px;
    margin: 10px 0;
    text-shadow: 1px 1px 2px #ff99cc;
}

.profile-details p {
    margin: 5px 0;
    font-size: 16px;
}

.profile-details .bio {
    font-style: italic;
    margin-top: 15px;
    color: #ff4da6;
}

.social-links {
    list-style-type: none;
    padding: 0;
    margin: 20px 0 0 0;
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-links li {
    display: inline;
}

.social-link {
    text-decoration: none;
    color: white;
    background-color: #ff99cc;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease;
}

.social-link:hover {
    background-color: #ff66b3;
}

a[href="landingku2.php"] {
    display: block;
    margin: 20px auto;
    text-align: center;
    color: white;
    background-color: #ff99cc;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-decoration: none;
    width: fit-content;
    transition: background-color 0.3s ease;
}

a[href="landingku2.php"]:hover {
    background-color: #ff66b3;
}

</style>
   

