<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .bg-navy {
        background-color: navy !important; 
        color: white; 
        }
        .hero-section {
            background-image: url('homebg.jpg');
            color: white;
            text-align: center;
            padding: 250px 20px;
        }
        .hero-section h1{
            font-size: 40px;
            font-weight: 1000;
        }
        .hero-section p{
            font-size: 20px;
            margin: 5px 0; 
            line-height: 1;
        }
        .about-section {
            background-image: url('aboutbg.jpg');
            padding: 80px 20px;
        }
        .about-section h1{
            font-size: 40px;
            font-weight: 1000;
        }
        .about-section p{
            color: gray;
            font-size: 16px;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h5{
            color: #293660;
            font-weight: bold;
        }
        .form-container p{
            color: gray;
            font-weight: bold;
        }
        .free-trial-text {
            margin-top: 20px;
            font-size: 16px;
            font-weight: 500;
        }
        .advantages-section{  
            background-image: url('/advantagesbg.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .advantages-section h1{
            text-align: center;
            font-weight: 1000;
            color: white;
        }
        .card{
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            text-align: center; 
            border: 1px solid #ddd; 
            border-radius: 8px;
            background-color: #fff;
            height: 100%; 
            justify-content: center; 
        }
        .card img {
            max-width: 100px;
            height: auto; 
            margin-bottom: 15px; 
        }
        .card-title {
            font-size: 1.25rem;
            text-align: center;
            font-weight: bold;
            font-weight: 1000;
            color: #293660;
        }
        .features-section h1{
            text-align: center;
            font-weight: 1000;
            color: #293660;
        }
        .feature-title {
            font-size: 1.25rem;
            text-align: center;
            font-weight: 1000;
            color: #293660;
        }
        .feature-description {
            font-size: 16px;
            margin-top: 10px;
        }
        .feature-icon {
            width: 100px;
            height: 100px;
        }
        .feature-card {
            text-align: center;
            padding: 20px;
        }
        .value-section{
            background-image: url('/valuebg.jpg');
        }
        .value-section h1{
            text-align: center;
            color: #293660;
            font-size: 30px;
            font-weight: 1000;
        }
        .value-list {
            list-style: none;
            padding-left: 350px;
        }
        .value-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: bold;
            color: gray;
            justify-content: left;
            padding: 100px
            color: #555;
        }
        .value-list .checkmark {
            color: green;
            font-weight: bold;
            margin-right: 10px;
            font-size: 18px;
        }
        .container h3{
            background-color: #293660; 
            color: white; 
            font-weight: 1000;
            padding: 30px;
            text-align: center;
            margin top: 10; 
            transform: translateY(-50%);
        }
        .container h4{
            text-align: center;
            color: #293660;
            font-size: 30px;
            font-weight: 1000;
        }
        .explore-section p{
            text-align: center;
            color: gray;
            font-size: 20px;
        }

        .explore-section .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .explore-section .card img {
            max-width: 100px;
            margin: 20px auto;
        }
        .explore-section .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
        }
        .footer {
            background: linear-gradient(to right, #0a4e9b, #1b9a59);
            color: white;
            padding: 40px 0;
        }
        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .footer .contact-info {
            max-width: 50%;
        }
        .footer .contact-info h5 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .footer .contact-info p {
            margin: 0;
            line-height: 1.6;
        }
        .footer .contact-info p strong {
            display: block;
            margin-top: 10px;
        }
        .footer .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        .footer .social-icons a {
            color: white;
            font-size: 1.5rem;
        }
        .footer .world-map {
            max-width: 50%;
            text-align: right;
        }
        .footer .world-map img {
            max-width: 100%;
            height: auto;
        }
        .footer-bottom {
            background-color: navy;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .footer-bottom p{
            text-align: center;
            font-size: 20px;
        }
        
       
    </style>
</head>
<body>
     <!-- Navbar -->
    <div class="d-flex justify-content-end bg-navy ">
                <a class="nav-link text-white" href="#">ID</a>
                <a class="nav-link text-white" href="#">EN</a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container ">
            <a class="navbar-brand" href="#">
                <img src="https://s3-alpha-sig.figma.com/img/b770/ab23/dde583d96d48cc2fd42b9b1eac0a1a37?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=hGlq8OQbO54-Z4wQCchfqVa47JPgQibWJKNkkhlR~K2bxBVHfUp1CnZ-A1qHiz7OIM90aj-nC0MFxnTNQTax6-Hrf40okmsc4n41z1EmwjgbJZJlr0yO5ZnE1IO2k0FIpr0-GidYuQvum4vTudLK~SeCaAnhvPXxOojgjjPkbnPLWkkioRprjmtyqzZEgofgqmmU9JCQ7dnJ86v0ZgqtHgD8iiLveGD8K1z7OWFlFsM74jHtaMQByzF7LPYGwJCKWSHVk7-8SDkP3Wg1cGMZlaI5L~CdHXJh4Fi4ZNXZIJGL6zkxrCRVEb8M11JRKXkfdIcc6SBErYsy4rE4gmy1MA__" alt="Logo" height="40">
                <img src="https://s3-alpha-sig.figma.com/img/28fd/b84f/1c6b98f5a92df3b5d7804ec9f2cab645?Expires=1737331200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=L4cuv0MtxqKhQ4b8UGwyyyAnp4lJ2Ri7hBUdqwIfxiHZ89O2cL0dADivjBUrAa8LMIfzTGzUI6c1AvUFEsZIhuMqaVwG7QmtIZTN2vWNHJ6q2jsjAQ0qBoKpUa4KQb5chtU9R6MjddtQqYwnVB~BUbCyhHSqd-oG7ugmiPi4kVk9mTiF0aDn9KmGGlTUznM~qQ8bIdleLz17uPo-fZJILCu~O6S2OtKvWCwtco2IY5843C0RzX8H~p2y3ttF-RJNwTzUVHpRa~dRJOE86EtFXDVeIZHBetyP2u3i9KVpFMsGifW6fvDdPGEA2-qhPhG15npGNSsR6sXNFACUjHNsdQ__" alt="Logo" height="40">
            </a>
            
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-start fw-bold">
            <h1 class="fs-1 lh-1">Cybersecurity Made Simple </h1>
            <h1 class="fs-1 lh-1">with Sangfor Cyber Command</h1>
            <br> 
            <p>Simplify your cybersecurity with Sangfor Cyber </p>
            <p>Command's user-friendly interface and </p>
            <p>comprehensive threat protection.</p>
            <a href="#" class="btn btn-success btn-lg mt-3">FREE TRIAL</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color: #293660;">About Sangfor</h1>
                <h1 style="color: #293660;">Cyber Command</h1>
                <br>
                    <p>Sangfor Cyber Command falls into Network Detection & 
                        Response (NDR) Solutions which is a comprehensive 
                        security management platform designed to protect 
                        businesses from cyber threats.</p>
                    <p>It provides a range of security solutions such as threat detection,
                         incident response, and compliance management. With Sangfor Cyber Command, 
                         organizations can monitor their network traffic, analyze security events, 
                         and respond to incidents quickly and efficiently.</p>
                    <p> The platform uses advanced machine learning algorithms and 
                        big data analytics to identify and prevent cyber-attacks before 
                        they cause damage.  It also offers a user-friendly dashboard that 
                        enables businesses to track their security posture in real-time and 
                        make informed decisions based on the insights provided.</p>
                    <p>Overall, Sangfor Cyber Command is a powerful tool for businesses 
                        looking to strengthen their cybersecurity defenses and safeguard their 
                        assets from modern-day threats.</p>
                </div>
                <div class="col-md-6">
                    <div class="form-container text-dark">
                    <h5>Dapatkan Free Trial selama 1 bulan,</h5>
                        <p>analisa keamanan network anda dan lihat hasilnya!</p>
                        <form action="{{ route('thankyou') }}" method="POST">
                            @csrf
                            <div class="row">
                            <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name* </label>
                            <input type="text" class="form-control" placeholder="First Name" required>
                         </div>
                        <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name*</label>
                            <input type="text" class="form-control" placeholder="Last Name" required>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Corporate Email*</label>
                            <input type="email" class="form-control" placeholder="Corporate Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">Job Title*</label>
                            <input type="text" class="form-control" placeholder="Job Title" required>
                        </div>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name*</label>
                            <input type="text" class="form-control" placeholder="Company Name" required>
                        </div>
                        <label for="industry" class="form-label">Industry*</label>
                        <select class="form-control" required> 
                        <option value="" disabled selected>Select Industry</option>
                        <option value="industry1">IT</option>
                        <option value="industry2">Finance</option>
                        <option value="industry3">Cyber Security</option>
                        </select>
                        <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number*</label>
                                <input type="text" class="form-control" placeholder="Phone Number" required>
                                </div> 
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agreement" name="agreement" required>
                                <label for="agreement" class="form-check-label">
                                click this box to agree to be contacted by  our team and
                                get great deals on Sangfor for Helios!
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-success w-100">SEND</button>
                            
                        </form>
                        
        
                           
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Advantages Section -->
   <section class="advantages-section py-5">
   <h1>Sangfor Cyber Command Advantages</h1>

   <div class="row mt-5">

    <div class="col-md-6 mb-4">
     <div class="card p-4">
      <img alt="advanced threat detection" height="80" src="threatdetection.jpg" width="80"/>
      <h5 class="card-title">
       Advanced Threat Detection
      </h5>
      <p class="card-text">
       Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.
      </p>
     </div>
    </div>

    <div class="col-md-6 mb-4">
     <div class="card p-4">
      <img alt="Icon representing network visibility and control" height="80" src="networkvisibility.jpg" width="80"/>
      <h5 class="card-title">
       Network Visibility and Control
      </h5>
      <p class="card-text">
       Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.
      </p>
     </div>
    </div>

    <div class="col-md-6 mb-4">
     <div class="card p-4">
      <img alt="Icon representing cloud security" height="80" src="cloudsecurity.jpg" width="80"/>
      <h5 class="card-title">
       Cloud Security
      </h5>
      <p class="card-text">
       Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.
      </p>
     </div>
    </div>

    <div class="col-md-6 mb-4">
     <div class="card p-4">
      <img alt="Icon representing comprehensive security management" height="80" src="securitymanagement.jpg" width="80"/>
      <h5 class="card-title">
       Comprehensive Security Management
      </h5>
      <p class="card-text">
       Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.
      </p>
     </div>
    </div>
   </section>

   <!-- Features Section -->
   <section>
   <section class="features-section py-5">
    <h1> Sangfor Cyber Command Features </h1>
    
    <div class="container text-center mt-5">

   <div class="row">
    <div class="col-md-4 feature-card">
     <img alt="Icon representing threat intelligence" class="feature-icon" height="100" src="threatintelligence.jpg" width="100"/>
     <h2 class="feature-title">
      Threat Intelligence
     </h2>
     <p class="feature-description">
      Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.
     </p>
    </div>
    <div class="col-md-4 feature-card">
     <img alt="Icon representing real-time detections" class="feature-icon" height="100" src="realtimedetection.jpg" width="100"/>
     <h2 class="feature-title">
      Real-Time Detections
     </h2>
     <p class="feature-description">
      Real-time alert system provides instant notification of potential security incidents.
     </p>
    </div>
    <div class="col-md-4 feature-card">
     <img alt="Icon representing threats investigation" class="feature-icon" height="100" src="threatinvestigation.jpg" width="100"/>
     <h2 class="feature-title">
      Threats Investigation
     </h2>
     <p class="feature-description">
      In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
     </p>
    </div>
   </div>
   <div class="row mt-4">
    <div class="col-md-4 offset-md-2 feature-card">
     <img alt="Icon representing comprehensive security solutions" class="feature-icon" height="100" src="securitycomp.jpg" width="100"/>
     <h2 class="feature-title">
      Comprehensive Security Solutions
     </h2>
     <p class="feature-description">
      In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
     </p>
    </div>
    <div class="col-md-4 feature-card">
     <img alt="Icon representing rapid response" class="feature-icon" height="100" src="rapidresponse.jpg" width="100"/>
     <h2 class="feature-title">
      Rapid Response
     </h2>
     <p class="feature-description">
      Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.
     </p>
    </div>
   </div>
  </div>
   </section>

    <!-- Value Section -->
  <section class="value-section py-5">
  <h1> Sangfor Cyber Command's</h1>
  <h1>Value to Customers</h1>
  <br>
  <div class="content">
    
        <ul class="value-list">
      <li><span class="checkmark">✔</span> Detect known dan unknown threats</li>
      <li><span class="checkmark">✔</span> Much better visibility of security posture of the entire infrastructure</li>
      <li><span class="checkmark">✔</span> Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</li>
      <li><span class="checkmark">✔</span> Faster Response to improve overall security control</li>
      <li><span class="checkmark">✔</span> Much more cost effective than other solutions such as SIEM</li>
        </ul>
    </div>
   <br>
   <br>
   <br>
   </section>

   <!-- reference Section -->
   <section class="customers-reference">
   <div class="container">
    <h3> Cyber Command Customers Reference</h3>
    <br>
    <br>
    <br>
    <div class="d-flex justify-content-center flex-wrap">
     <img alt="logo" src="logo consumer.jpg" width="1312.96" height= "121" /> 
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    </div>
   </div>

  <div class="explore-section">
   <div class="container">
    <h4>Explore Sangfor Cyber Command with Helios</h4>
    <p>Helios Informatika Nusantara as Sangfor Distributor will provide</p>
    <br>
    <br>
    <br>

    <div class="row">
     <div class="col-md-4">
      <div class="card">
       <img alt="NDR Implementation icon" class="card-img-top" height="100" src="ndr.jpg" width="100"/>
       <div class="card-body">
        <h5 class="card-title">
         NDR Implementation
        </h5>
       </div>
      </div>
     </div>
     <div class="col-md-4">
      <div class="card">
       <img alt="Incident Response and Threat Hunting icon" class="card-img-top" height="100" src="incident.jpg" width="100"/>
       <div class="card-body">
        <h5 class="card-title">
         Incident Response and Threat Hunting
        </h5>
       </div>
      </div>
     </div>
     <div class="col-md-4">
      <div class="card">
       <img alt="Device Security Maintenance icon" class="card-img-top" height="100" src="maintenance.jpg" width="100"/>
       <div class="card-body">
        <h5 class="card-title">
         Device Security Maintenance
        </h5>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
        <br>
        <br>
        <br>
        <br>
        <footer class="footer">
   <div class="container">
    <div class="contact-info">
     <h5>
      PT. Helios Informatika Nusantara
     </h5>
     <p>
      Centennial Tower, 12th Floor,
      <br/>
      Jl. Jendral Gatot Subroto
      <br/>
      No. Kav 24-25, Jakarta
      <br/>
      12930 Indonesia
     </p>
     <p>
      <strong>
       Phone:
      </strong>
      +62 21 8062 2220
      <br/>
      <strong>
       Email:
      </strong>
      Tencent@helios.id
     </p>
     <br>
     <div class="social-icons">
                <img src="Facebook.png" alt="Facebook">
                <img src="ig.png" alt="Instagram">
                <img src="Twitter.png" alt="Twitter">
                <img src="Youtube.jpg" alt="YouTube">
                <img src="Linkedin.jpg" alt="LinkedIn">
            </div>
    </div>
    <div class="world-map">
     <img alt="World map illustration with dots" height="500" src="worldmap.jpg" width="700"/>
    </div>
   </div>
  </footer>
  <div class="footer-bottom">
   <p>
    © 2023 - PT. Helios Informatika Nusantara - All Right Reserved
   </p>
  </div>
    
   
   </section>
  

  
</body>
<script src="{{asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}"></script>    
</html>