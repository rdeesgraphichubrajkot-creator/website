<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>All Logo Designs</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    background: #ffffff;
    color: #000000;
}

header {
    text-align: center;
    padding: 50px 20px;
}

header h1 {
    font-size: 42px;
    letter-spacing: 1px;
}

header p {
    margin-top: 10px;
    color: #555;
}

.logo-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    padding: 40px;
}

.logo-card {
    background: #f8f8f8;
    border-radius: 20px;
    padding: 30px 20px;
    text-align: center;
    transition: 0.4s;
    border: 1px solid #e5e5e5;
}

.logo-card img {
    width: 130px;
    height: 130px;
    object-fit: contain;
    margin-bottom: 15px;
    transition: 0.3s;
}

.logo-card:hover img {
    transform: scale(1.1);
}

.logo-card h3 {
    margin-bottom: 8px;
}

.logo-card p {
    font-size: 13px;
    color: #555;
}

.logo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.about {
    padding: 50px 30px;
    text-align: center;
    background: #fafafa;
}

.about h2 {
    margin-bottom: 15px;
}

.about p {
    max-width: 600px;
    margin: auto;
    color: #555;
    line-height: 1.6;
}

footer {
    text-align: center;
    padding: 20px;
    color: #777;
}

</style>
</head>

<body>

<header>
    <h1>All Logo Designs</h1>
    <p>Explore different types of creative and professional logos</p>
</header>

<section class="logo-container">

    <div class="logo-card">
        <img src="LOGO/minimal.png" alt="Minimal Logo">
        <h3>Minimal Logo</h3>
        <p>Simple and clean design focused on clarity.</p>
    </div>

    <div class="logo-card">
        <img src="LOGO/logo7.png" alt="Typography Logo">
        <h3>Typography Logo</h3>
        <p>Creative text-based logos with unique fonts.</p>
    </div>

    <div class="logo-card">
        <img src="LOGO/icon5.png" alt="Icon Logo">
        <h3>Icon Logo</h3>
        <p>Symbol-based logos for strong visual identity.</p>
    </div>

    <div class="logo-card">
        <img src="LOGO/logo3.png" alt="Mascot Logo">
        <h3>Mascot Logo</h3>
        <p>Character-based logos that build connection.</p>
    </div>

    <div class="logo-card">
        <img src="LOGO/logo2.png" alt="3D Logo">
        <h3>3D Logo</h3>
        <p>Modern logos with depth and realistic effects.</p>
    </div>

    <div class="logo-card">
        <img src="LOGO/logo6.png" alt="Vintage Logo">
        <h3>Vintage Logo</h3>
        <p>Classic style logos inspired by old trends.</p>
    </div>

</section>

<section class="about">
    <h2>About Logo Design</h2>
    <p>
        A logo is the face of a brand. It represents identity, values, and vision in a simple visual form.
        A well-designed logo creates a strong first impression and helps businesses stand out in the market.
    </p>
</section>

<footer>
    © 2026 Creative Studio | All Rights Reserved
</footer>

</body>
</html>