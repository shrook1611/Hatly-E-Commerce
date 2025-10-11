<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-orange: #ff6b35;
            --dark-orange: #e55a2b;
            --light-orange: #ff8c61;
            --bg-light: #fff5f0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .btn-orange {
            background-color: var(--primary-orange);
            color: white;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-orange:hover {
            background-color: var(--dark-orange);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color: white;
        }

        .navbar-brand {
            color: var(--primary-orange) !important;
            font-size: 1.8rem;
            font-weight: bold;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-orange) !important;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--bg-light) 0%, #fff 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: var(--light-orange);
            opacity: 0.1;
            border-radius: 50%;
            top: -200px;
            right: -100px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 30px;
        }

        .hero-image {
            max-width: 100%;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .category-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .category-icon {
            font-size: 3rem;
            color: var(--primary-orange);
            margin-bottom: 15px;
        }

        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-orange);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .feature-box {
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary-orange);
            margin-bottom: 15px;
        }

        .stats-section {
            background-color: var(--primary-orange);
            color: white;
            padding: 60px 0;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
        }

        .newsletter-section {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--dark-orange) 100%);
            color: white;
            padding: 80px 0;
        }

        .newsletter-input {
            border: none;
            border-radius: 50px;
            padding: 15px 25px;
        }

        .newsletter-btn {
            background-color: #333;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-weight: 600;
        }

        .newsletter-btn:hover {
            background-color: #000;
            color: white;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            padding: 50px 0 20px;
        }

        .footer-link {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-link:hover {
            color: var(--primary-orange);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .section-subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 50px;
        }
    </style>
</head>