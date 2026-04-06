<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Poster Designs</title>

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
}

header p {
    margin-top: 10px;
    color: #555;
}

.poster-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    padding: 40px;
}

.poster-card {
    background: #f8f8f8;
    border-radius: 20px;
    overflow: hidden;
    transition: 0.4s;
    border: 1px solid #e5e5e5;
}

.poster-card img {
    width: 100%;
    height: 300px; /* bigger image size */
    object-fit: cover;
}

.poster-content {
    padding: 20px;
    text-align: center;
}

.poster-content h3 {
    margin-bottom: 8px;
}

.poster-content p {
    font-size: 13px;
    color: #555;
}

.poster-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
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
    <h1>Poster Design Showcase</h1>
    <p>Creative and eye-catching posters for every purpose</p>
</header>

<section class="poster-container">

    <div class="poster-card">
        <img src="LOGO/poster1.jpg" alt="Event Poster">
        <div class="poster-content">
            <h3>Event Poster</h3>
            <p>Designed to attract attention for events and shows.</p>
        </div>
    </div>

    <div class="poster-card">
        <img src="LOGO/poster2.jpg" alt="Movie Poster">
        <div class="poster-content">
            <h3>Movie Poster</h3>
            <p>Creative storytelling through visual composition.</p>
        </div>
    </div>

    <div class="poster-card">
        <img src="LOGO/poster3.jpg" alt="Marketing Poster">
        <div class="poster-content">
            <h3>Marketing Poster</h3>
            <p>Promotional posters that boost brand visibility.</p>
        </div>
    </div>

    <div class="poster-card">
        <img src="LOGO/poster4.jpg" alt="Festival Poster">
        <div class="poster-content">
            <h3>Festival Poster</h3>
            <p>Colorful designs for cultural and festive occasions.</p>
        </div>
    </div>

</section>

<section class="about">
    <h2>About Poster Design</h2>
    <p>
        Poster design is all about visual impact and communication. It combines typography, images, and layout to deliver a strong message.
        A well-designed poster grabs attention instantly and conveys information in a creative and effective way.
    </p>
</section>

<footer>
    © 2026 Creative Studio | All Rights Reserved
</footer>

</body>
</html>