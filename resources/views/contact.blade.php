<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Orbit Store</title>
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

        /* Contact Container */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        .button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #007BFF;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }

        /* Contact Info */
        .contact-info {
            margin-top: 20px;
            text-align: center;
        }
        .contact-info h3 {
            font-size: 20px;
            color: #007BFF;
            margin-bottom: 10px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .contact-info a {
            color: #007BFF;
            text-decoration: none;
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
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html" class="active">Contact</a></li>
        </ul>
    </nav>

    <!-- Contact Container -->
    <div class="container">
        <h1>Contact Us</h1>
        <!-- Formulir Kontak -->
        <form>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="button">Send Message</button>
        </form>

        <!-- Informasi Kontak -->
        <div class="contact-info">
            <h3>Or Contact Us Directly:</h3>
            <p>Email: <a href="mailto:support@zenmerch.com">support@OrbitStore.com</a></p>
            <p>Phone: <a href="tel:+123456789">+123 456 789</a></p>
            <p>Address: Jl. Raya No. 123, Purbalingga, Indonesia</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Orbit. All Rights Reserved.</p>
    </footer>
</body>
</html>
