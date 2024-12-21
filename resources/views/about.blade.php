<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ZenMerch Store</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navigation Bar */
        nav {
            background-color: #007BFF;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        nav h1 {
            font-size: 24px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        nav ul li a {
            color: white;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover,
        nav ul li a.active {
            background-color: #0056b3;
        }

        /* About Banner */
        .about-banner {
            background: url('https://source.unsplash.com/1600x600/?fashion,clothing') no-repeat center center/cover;
            color: black;
            text-align: center;
            padding: 80px 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .about-banner h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .about-banner p {
            font-size: 18px;
        }

        /* About Container */
        .about-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* About Content */
        .about-content {
            margin-bottom: 30px;
        }
        .about-content h3 {
            font-size: 24px;
            color: #007BFF;
            margin-bottom: 10px;
        }
        .about-content p,
        .about-content ul {
            font-size: 16px;
            margin-bottom: 15px;
        }
        .about-content ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .about-content ul li {
            margin-bottom: 8px;
        }

        /* Contact Info */
        .contact-info a {
            color: #007BFF;
            font-weight: bold;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            text-align: center;
            background: #007BFF;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <h1>Orbit Store</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html" class="active">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

    <!-- About Section -->
    <header class="about-banner">
        <h2>Orbit Store</h2>
        <p>Your trusted destination for stylish clothes, hoodies, and long pants.</p>
    </header>

    <div class="about-container">
        <!-- Mission and Vision -->
        <section class="about-content">
            <h3>Our Mission</h3>
            <p>
                Orbit Store is committed to providing high-quality clothing that combines comfort and style at affordable prices.
            </p>

            <h3>Our Vision</h3>
            <p>
                To become a leading clothing brand loved by customers worldwide, with designs that define modern fashion.
            </p>
        </section>

        <!-- Story -->
        <section class="about-content">
            <h3>Our Story</h3>
            <p>
                Established in 2023, Orbit Store started with a simple idea: to create fashionable clothing that suits everyone's style. 
                From casual clothes to trendy hoodies and comfortable long pants, we ensure every product is made with care and precision.
            </p>
        </section>

        <!-- Commitment -->
        <section class="about-content">
            <h3>Why Choose Us?</h3>
            <ul>
                <li>High-quality materials that guarantee comfort.</li>
                <li>Unique and modern designs for every occasion.</li>
                <li>Customer-focused service with fast delivery.</li>
            </ul>
        </section>

        <!-- Contact Section -->
        <section class="about-content contact-info">
            <h3>Get in Touch</h3>
            <p>Have questions or feedback? Contact us at:</p>
            <ul>
                <li>Email: <a href="mailto:support@orbit.com">support@orbit.com</a></li>
                <li>Instagram: <a href="https://instagram.com/orbit" target="_blank">@orbitstore</a></li>
            </ul>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Orbit. All Rights Reserved.</p>
    </footer>
</body>
</html>
