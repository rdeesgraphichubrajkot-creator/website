<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

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
    color: #555;
    margin-top: 10px;
}

.contact-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    padding: 40px;
}

/* FORM */
.contact-form {
    background: #f8f8f8;
    padding: 30px;
    border-radius: 20px;
    border: 1px solid #e5e5e5;
}

.contact-form h2 {
    margin-bottom: 20px;
}

.input-box {
    margin-bottom: 15px;
}

.input-box input,
.input-box textarea {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
}

.input-box textarea {
    resize: none;
    height: 120px;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 10px;
    background: black;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #333;
}

/* MAP */
.map {
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid #e5e5e5;
}

.map iframe {
    width: 100%;
    height: 100%;
    min-height: 400px;
    border: 0;
}

footer {
    text-align: center;
    padding: 20px;
    color: #777;
}

@media(max-width: 768px) {
    .contact-container {
        grid-template-columns: 1fr;
    }
}

</style>
</head>

<body>

<header>
    <h1>Contact Us</h1>
    <p>Let’s create something amazing together</p>
</header>

<section class="contact-container">

    <!-- FORM -->
    <div class="contact-form">
        <h2>Send Message</h2>

        <div class="input-box">
            <input type="text" id="name" placeholder="Your Name">
        </div>

        <div class="input-box">
            <input type="email" id="email" placeholder="Your Email">
        </div>

        <div class="input-box">
            <textarea id="message" placeholder="Your Message"></textarea>
        </div>

        <button onclick="sendToWhatsApp()">Send Message</button>
    </div>

    <!-- MAP -->
    <div class="map">
        <iframe src="https://maps.google.com/maps?q=rajkot&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>

</section>

<footer>
    © 2026 Creative Studio | All Rights Reserved
</footer>

<script>
function sendToWhatsApp() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    var phoneNumber = "919100009844"; // replace with your number

    var url = "https://wa.me/" + phoneNumber + "?text="
        + "Name: " + encodeURIComponent(name) + "%0a"
        + "Email: " + encodeURIComponent(email) + "%0a"
        + "Message: " + encodeURIComponent(message);

    window.open(url, '_blank');
}
</script>

</body>
</html>