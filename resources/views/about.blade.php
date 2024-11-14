<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mars-Sama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }
        header a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .biodata {
            line-height: 1.6;
            font-size: 18px;
        }
        .biodata dt {
            font-weight: bold;
            margin-top: 10px;
        }
        .biodata dd {
            margin: 0 0 10px 20px;
        }
        .profile-pic {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 3px solid #007BFF;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="/" style="font-weight: bold; font-size: 20px;">MainContent</a>
        </div>
        <nav>
            <a href="/contact">ContactPerson</a>
            <a href="/home">SignOut</a>
        </nav>
    </header>
    
    <div class="container">
        <h1>Biodata</h1>
        <img src="images/profil.jpg" alt="Profile Picture" class="profile-pic">
        <dl class="biodata">
            <dt>Nama</dt>
            <dd>Mars-Sama</dd>

            <dt>Tempat, Tanggal Lahir</dt>
            <dd>Mars, 25 Oktober 1945</dd>

            <dt>Alamat</dt>
            <dd>Jl. Mars No. 25, Kerajaan Mars, Mars</dd>

            <dt>Pendidikan</dt>
            <dd>Universitas Sebelas Maret, Informatika</dd>

            <dt>Hobi</dt>
            <dd>Menulis, Membaca, dan Bermain Musik</dd>

            <dt>Cita-cita</dt>
            <dd>Menjadi Software Engineer yang Handal</dd>
        </dl>
    </div>
</body>
</html>
