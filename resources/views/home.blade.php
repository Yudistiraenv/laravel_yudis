<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbit Company - Home</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #444;
            line-height: 1.6;
        }
        nav {
            background-color: #004d99;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        nav h1 {
            font-size: 26px;
            font-weight: bold;
        }
        nav ul {
            list-style-type: none;
            display: flex;
            gap: 15px;
        }
        nav ul li {
            position: relative;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        nav ul li a:hover {
            color: #ffcc00; /* Gold color */
        }
        .hero {
            background: url('https://source.unsplash.com/1600x600/?business,teamwork') no-repeat center center/cover;
            height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.6);
        }
        .hero h1 {
            font-size: 60px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .hero a {
            background-color: #ffcc00;
            color: #004d99;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .hero a:hover {
            background-color: #e6b800;
        }
        .features {
            display: flex;
            justify-content: space-between;
            margin: 40px auto;
            max-width: 1200px;
            gap: 20px;
        }
        .feature {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
        }
        .feature img {
            width: 100px;
            margin-bottom: 20px;
        }
        .feature h3 {
            font-size: 22px;
            color: #004d99;
            margin-bottom: 10px;
        }
        .feature p {
            font-size: 16px;
            line-height: 1.6;
        }
        .cta {
            background: #004d99;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .cta h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .cta a {
            background-color: #ffcc00;
            color: #004d99;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .cta a:hover {
            background-color: #e6b800;
        }
        footer {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <h1>Orbit Company</h1>
        <ul>
            <li><a href="http://127.0.0.1:8000/">Home</a></li>
            <li><a href="http://127.0.0.1:8000/about">About</a></li>
            <li><a href="http://127.0.0.1:8000/service">Services</a></li>
            <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Orbit Company</h1>
        <p>Your Trusted Partner in Growth</p>
        <a href="http://127.0.0.1:8000/about">Get Started</a>
    </div>

    <!-- Features Section -->
    <div class="features">
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 1">
            <h3>Innovative Solutions</h3>
            <p>We deliver cutting-edge solutions tailored to your needs.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 2">
            <h3>Expert Team</h3>
            <p>Our experienced team ensures the highest quality service.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 3">
            <h3>Reliable Support</h3>
            <p>We are here to support you every step of the way.</p>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <div class="cta">
        <h2>Ready to Transform Your Business?</h2>
        <a href="http://127.0.0.1:8000/contact">Contact Us Today</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Orbit Company. All Rights Reserved.</p>
    </footer>
</body>
</html>
