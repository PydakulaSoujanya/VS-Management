<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Form</title>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <title>Autorepair</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />


    <style>
        /* Scoped only inside contact-container */
        .contact-container * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .contact-container {
            max-width: 1100px;
            margin: 40px auto;
            background: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            background-color: #fff;
        }

        .contact-container .form-section {
            flex: 1;
            padding: 40px;
            background: white;
        }

        .contact-container .form-section h2 {
            margin-bottom: 25px;
            font-size: 28px;
            font-weight: 600;
            color: #333;
        }

        .contact-container .form-group {
            margin-bottom: 20px;
        }

        .contact-container .form-group input,
        .contact-container .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        .contact-container .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        .contact-container .form-row {
            display: flex;
            gap: 20px;
        }

        .contact-container .form-row .form-group {
            flex: 1;
        }

        .contact-container .send-btn {
            background: linear-gradient(to right, #fdbb2d, #f7921e);
            border: none;
            padding: 12px 25px;
            color: white;
            font-weight: bold;
            font-size: 14px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .contact-container .send-btn:hover {
            opacity: 0.9;
        }

        .contact-container .info-section {
            background: #f7921e;
            color: white;
            padding: 40px;
            width: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-container .info-section h3 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .contact-container .info-item {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .contact-container .info-item i {
            background: white;
            color: #f7921e;
            padding: 10px;
            border-radius: 50%;
            font-size: 16px;
            flex-shrink: 0;
        }

        .contact-container .info-item p {
            margin: 0;
            font-size: 15px;
            line-height: 1.5;
        }

        .contact-container .info-item p strong {
            display: block;
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }

            .contact-container .info-section {
                width: 100%;
            }
        }
        .info-item i {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
        }

        /* Styles for the error message specific to after contact card */
        .map-error-card {
            max-width: 1100px; /* Match contact-container width */
            margin: 20px auto 40px auto; /* Adjust margin to place it below and add bottom margin */
            background-color: #f0f0f0; /* Changed from #fff to light gray ("yash" interpreted as "ash") */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Same shadow as contact-container */
            text-align: center;
            color: #555;
            display: flex; /* Use flexbox for centering content inside */
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .map-error-card .error-icon {
            font-size: 48px;
            color: #888;
            margin-bottom: 10px;
            line-height: 1;
        }

        .map-error-card .error-title {
            font-size: 24px;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .map-error-card .error-message {
            font-size: 16px;
            line-height: 1.5;
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
      <style>
        /* General Body and Footer Styling */
body {
    margin: 0;
    font-family: Arial, sans-serif; /* Or your preferred font */
    background-color: #f0f0f0; /* Example background for the page */
}

footer {
    background-color: #222222; /* Dark background as seen in the image */
    color: #ffffff;
    padding: 60px 0; /* Adjust padding as needed */
    font-size: 14px;
}

.container {
    max-width: 1200px; /* Or your preferred max-width */
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap; /* Allows columns to wrap on smaller screens */
    padding: 0 20px; /* Add some horizontal padding */
}

.footer-column {
    flex: 1; /* Distribute space equally */
    min-width: 250px; /* Minimum width before wrapping */
    margin-bottom: 30px; /* Space between columns on smaller screens */
}

.footer-column h3 {
    color: #ffffff;
    font-size: 18px;
    margin-bottom: 25px;
    position: relative;
}

/* Optional: Underline effect for headers */
.footer-column h3::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px; /* Adjust as needed */
    width: 50px; /* Or a suitable width */
    height: 2px;
    background-color: #ffc107; /* A subtle accent color, adjust if needed */
}

.footer-column p {
    line-height: 1.8;
    color: #ccc; /* Lighter text for paragraphs */
}

.footer-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-column ul li {
    margin-bottom: 15px;
    color: #ccc;
}

.footer-column ul li i {
    margin-right: 10px;
    color: #ffc107; /* Accent color for icons */
}

/* Social Icons */
.social-icons {
    margin-top: 25px;
}

.social-icons a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background-color: #333333; /* Darker background for social icons */
    color: #ffffff;
    border-radius: 50%;
    margin-right: 10px;
    transition: background-color 0.3s ease;
}

.social-icons a:hover {
    background-color: #ffc107; /* Hover effect for social icons */
}

/* Business Hours specific styling */
.footer-column .opening-days,
.footer-column .vacations {
    font-weight: bold;
    color: #ffffff;
    margin-top: 20px;
    margin-bottom: 10px;
}

/* Copyright Section */
.copyright {
    text-align: center;
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid #333333; /* Separator line */
    color: #ccc;
    font-size: 13px;
}

.copyright span {
    color: #ffc107; /* Accent color for the heart icon */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }

    .footer-column {
        text-align: center;
        min-width: unset; /* Remove min-width on smaller screens */
        width: 100%; /* Full width for columns */
    }

    .footer-column h3::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .social-icons {
        justify-content: center; /* Center social icons */
        display: flex;
    }
}
    </style>
</head>
<body>

<div class="top-bar">
    <div class="logo">Autorepair<span>.</span></div>
    <div class="info-section">
        <div class="info-item">
            <i class="fas fa-location-arrow"></i> 721 New York NY 10016
        </div>
        <div class="info-item">
            <i class="fas fa-phone"></i> (+01) 123 456 7890
        </div>
    </div>
    <div class="social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-dribbble"></i>
    </div>
</div>

<div class="nav-bar">
    <div class="nav-links">
        <a href="#" class="active">HOME</a>
        <a href="#">ABOUT</a>
        <a href="#">SERVICES</a>
        <a href="#">PROJECT</a>
        <a href="#">BLOG</a>
        <a href="#">CONTACT</a>
    </div>
    <div class="search-box">
        <input type="text" placeholder="Search">
        <button><i class="fas fa-search"></i></button>
    </div>
</div>

<div style="height: 24rem; background-color: #e2e8f0; display: flex; align-items: center; justify-content: center; border-radius: 0.5rem; margin: 1rem 4rem;">
    <img src="{{ asset('images/bg_2.jpg') }}" alt="Hero Image" style="max-height: 100%; max-width: 100%; object-fit: contain;">
</div>




<div class="contact-container">
    <div class="form-section">
        <h2>Get in touch</h2>
        <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required />
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required />
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="subject" placeholder="Subject" required />
            </div>
            <div class="form-group">
                    <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="send-btn">Send Message</button>
        </form>
    </div>

    <div class="info-section">
        <h3>Contact us</h3>
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <p><strong>Address:</strong> 721 New York NY 10016</p>
        </div>
        <div class="info-item">
            <i class="fas fa-phone"></i>
            <p><strong>Phone:</strong> (+01) 123 456 7890</p>
        </div>
        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p><strong>Email:</strong> info@autorepair.com</p>
        </div>
        <div class="info-item">
            <i class="fas fa-globe"></i>
            <p>
                <strong>Website:</strong>
                <a href="https://yoursite.com" target="_blank" style="color: white; text-decoration: underline;">yoursite.com</a>
            </p>
        </div>
    </div>
</div>

<div class="map-error-card">
    <div class="error-icon">&#x21;</div>
    <h1 class="error-title">Oops! Something went wrong.</h1>
    <p class="error-message">
        This page didn't load Google Maps correctly. See the JavaScript console for technical details.
    </p>
</div>

<footer>
    <div class="container">
        <div class="footer-column">
            <h3>Autorepair.</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Services</h3>
            <ul>
                <li><i class="fas fa-check"></i> Oil Change</li>
                <li><i class="fas fa-check"></i> Batteries</li>
                <li><i class="fas fa-check"></i> Tow Truck</li>
                <li><i class="fas fa-check"></i> Tire Change</li>
                <li><i class="fas fa-check"></i> Engine Repair</li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact Information</h3>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> 203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li><i class="fas fa-phone"></i> +2 392 3929 210</li>
                <li><i class="fas fa-envelope"></i> info@yourdomain.com</li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Business Hours</h3>
            <p class="opening-days">OPENING DAYS:</p>
            <p>Monday - Friday : 9am to 20 pm</p>
            <p>Saturday : 9am to 17 pm</p>
            <p class="vacations">VACATIONS:</p>
            <p>All Sunday Days All Official Holidays</p>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright &copy;2025 All rights reserved | This template is made with &#x2764; by Colorlib</p>
    </div>
</footer>

</body>
</html>