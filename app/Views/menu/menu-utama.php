<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Sederhana</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
     <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

nav {
    background-color: #333;
}

.menu {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

.menu li {
    margin: 0 15px;
}

.menu a {
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    display: block;
}

.menu a:hover {
    background-color: #575757;
    border-radius: 5px;
}
     </style>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="<?php redirect('home'); ?>">Beranda</a></li>
            <li><a href="<?php redirect('user'); ?>">Users</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>
    
    <section>
        <h1>Selamat Datang di Website Kami!</h1>
        <p>Ini adalah contoh menu sederhana dengan HTML dan CSS.</p>
    </section>
</body>
</html>