<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us | XYZ Rentals</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/about.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }

    .hero {
      background: url('css/images/bg_3.jpg') center/cover no-repeat;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
      position: relative;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
      position: relative;
      z-index: 1;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
    }

    .hero-content p {
      font-size: 1rem;
      color: #ddd;
    }

    .about-section {
      max-width: 1100px;
      margin: 3rem auto;
      padding: 0 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .about-image {
      flex: 1 1 40%;
    }

    .about-image img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .about-content {
      flex: 1 1 55%;
    }

    .about-content h2 {
      font-size: 2rem;
      color: #333;
    }

    .about-content p {
      color: #555;
      line-height: 1.6;
      margin-bottom: 1rem;
    }

    .feature-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      margin-top: 1.5rem;
    }

    .card {
      flex: 1 1 30%;
      background: #fff;
      border-radius: 10px;
      padding: 1rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      color: #007BFF;
      margin-bottom: 0.5rem;
    }

    .card p {
      color: #444;
      font-size: 0.95rem;
    }

    @media (max-width: 768px) {
      .about-section {
        flex-direction: column;
        text-align: center;
      }

      .feature-cards {
        flex-direction: column;
      }

      .card {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>

<div class="hero">
  <div class="hero-content">
    <p>HOME > ABOUT US</p>
    <h1>About Us</h1>
  </div>
</div>

<section class="about-section">
  <div class="about-image">
    <img src="css/images/bg_3.jpg" alt="Car Rental Showroom">
  </div>
  <div class="about-content">
    <h2>Find Your Perfect Ride</h2>
    <p>
      At Our Rentals, we make vehicle rentals easy, affordable, and reliable.
      Our goal is to help you find the ideal car for your lifestyle—whether you're heading on a luxury trip, planning an off-road adventure, or need a fuel-efficient option for city driving.
    </p>

    <div class="feature-cards">
      <div class="card">
        <h3>Luxury Cars</h3>
        <p>Explore our collection of high-end luxury cars for a refined and stylish driving experience.</p>
      </div>
      <div class="card">
        <h3>Offroad Cars</h3>
        <p>Choose from our range of SUVs and 4WDs, designed for all terrains and outdoor escapades.</p>
      </div>
      <div class="card">
        <h3>Economical Cars</h3>
        <p>Save on fuel with our selection of compact, cost-efficient vehicles ideal for daily commuting.</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>
