<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0d0d0d, #2c2c2c);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            overflow: hidden;
        }
        .profile-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8);
            overflow: hidden;
            width: 90%;
            max-width: 800px;
            padding: 60px;
            backdrop-filter: blur(20px);
            opacity: 0;
            transform: scale(0.9);
            animation: fadeInZoom 1.8s ease-out forwards;
        }
        .profile-img {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        .profile-img img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid #ffdd57;
            box-shadow: 0 0 25px rgba(255, 221, 87, 0.8);
            transition: transform 0.4s ease, box-shadow 0.4s ease, filter 0.4s ease;
        }
        .profile-img img:hover {
            transform: scale(1.2);
            box-shadow: 0 0 50px rgba(255, 221, 87, 1);
            filter: brightness(1.3);
        }
        .profile-info {
            text-align: center;
        }
        .profile-info h1 {
            font-family: 'Merriweather', serif;
            font-size: 38px;
            margin-bottom: 15px;
            color: #ffdd57;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 0.5s;
        }
        .profile-info p {
            font-size: 22px;
            color: #dcdcdc;
            margin-bottom: 35px;
            line-height: 1.7;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 0.7s;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 1s;
        }
        th, td {
            text-align: left;
            padding: 20px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        th {
            background-color: rgba(255, 221, 87, 0.1);
            color: #ffdd57;
            font-weight: 700;
            font-family: 'Merriweather', serif;
        }
        td {
            font-size: 18px;
            color: #f2f2f2;
        }
        td a {
            color: #ffdd57;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        td a:hover {
            color: #fff;
        }
        .profile-info h1::after {
            content: '';
            display: block;
            width: 70px;
            height: 5px;
            background-color: #ffdd57;
            margin: 25px auto 0 auto;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 1.2s;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            font-size: 18px;
            font-family: 'Merriweather', serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-color: #ffdd57;
            color: #1b1b1b;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            animation-delay: 1.5s;
        }
        .back-button:hover {
            background-color: #ffd700;
            transform: scale(1.05);
        }
        @keyframes fadeInZoom {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-img">
        <img src="image/visa2.jpg" alt="Foto Profil">
    </div>
    <div class="profile-info">
        <h1>Feren Navisa Ramadani</h1>
        <p>Siswi SMKN 1 Cirebon, Jurusan Rekayasa Perangkat Lunak</p>
    </div>
    <table>
        <tr>
            <th>Nama</th>
            <td><a href="Ferennavisaramadani">Feren Navisa Ramadani</a></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><a href="tarataskeenf@gmail.com">verennavisa@gmail.com</a></td>
        </tr>
        <tr>
            <th>No.hp</th>
            <td><a href="tel:+6285795527768">+62 895 602 902 121</a></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><a href="Karang Jalak Mekar, Jl. Sibanteng, Kec.Kesambi, Kel.Sunyaragi, Kota Cirebon Jawa Barat 45132">Karang jalak mekar, Jl. Sibanteng, Kec.Kesambi, Kel.sunyaragi, Kota Cirebon Jawa Barat 45132 </a></td>
        </tr>
    </table>
    <a href="index.php" class="back-button">Back</a>
</div>

</body>
</html>