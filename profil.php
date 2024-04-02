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
                    <a href="landingpage.php">BACK</a>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.profile {
    display: flex;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-image {
    padding: 20px;
}

.profile-image img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-details {
    padding: 20px;
}

.name {
    font-size: 24px;
    margin-bottom: 10px;
}

.bio {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.social-links {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.social-links li {
    display: inline;
    margin-right: 10px;
}

.social-link {
    text-decoration: none;
    color: #333;
    padding: 5px 10px;
    border-radius: 5px;
    background-color: #ccc;
    transition: background-color 0.3s ease;
}

.social-link:hover {
    background-color: #999;
}
a {
  display: inline-block;
  padding: 5px 10px;
  background-color: #4CAF50; 
  color: white; 
  text-decoration: none; 
  border-radius: 5px;
  border: none; /
  cursor: pointer; 
  transition: background-color 0.3s; 
}
a:hover {
  background-color:  #45a049; 
}
