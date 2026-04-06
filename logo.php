<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Explore Designs</title>

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
    padding: 40px 20px;
}

header h1 {
    font-size: 40px;
}

header p {
    margin-top: 10px;
    color: #555;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 40px;
}

.card {
    background: #f5f5f5;
    border-radius: 20px;
    overflow: hidden;
    transition: 0.4s;
    cursor: pointer;
    text-decoration: none;
    color: black;
    border: 1px solid #ddd;
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-content {
    padding: 20px;
}

.card h3 {
    margin-bottom: 10px;
}

.card p {
    font-size: 14px;
    color: #444;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.details {
    padding: 40px;
    background: #fafafa;
}

.details h2 {
    margin-bottom: 15px;
}

.details p {
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
    <h1>Explore Creative Designs</h1>
    <p>Discover unique graphic design ideas and inspiration</p>
</header>

<section class="gallery">

    <a href="all-logo.php" class="card">
        <img src="LOGO/logo1.png" alt="Logo Design">
        <div class="card-content">
            <h3>Logo Design</h3>
            <p>Creative and modern logo concepts for brands.</p>
        </div>
    </a>

    <a href="branding.php" class="card">
        <img src="LOGO/brand.jpeg" alt="Branding">
        <div class="card-content">
            <h3>Brand Identity</h3>
            <p>Build strong brand identity with unique visuals.</p>
        </div>
    </a>

    <a href="uiux.php" class="card">
        <img src="LOGO/logo3.png" alt="UI UX">
        <div class="card-content">
            <h3>UI/UX Design</h3>
            <p>Modern UI/UX for apps and websites.</p>
        </div>
    </a>

    <a href="poster.php" class="card">
        <img src="LOGO/poster.jpeg" alt="Poster">
        <div class="card-content">
            <h3>Poster Design</h3>
            <p>Eye-catching posters for marketing and events.</p>
        </div>
    </a>

</section>

<section class="details">
    <h2>About Our Designs</h2>
    <p>
        We create high-quality, modern, and creative designs that help businesses stand out. 
        Our focus is on clean aesthetics, user-friendly interfaces, and strong branding strategies.
        Each design is crafted with attention to detail and current trends.
    </p>
</section>

<footer>
    © 2026 Creative Studio | All Rights Reserved
</footer>

</body>
</html>