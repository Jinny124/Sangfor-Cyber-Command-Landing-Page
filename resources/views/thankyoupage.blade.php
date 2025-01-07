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
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .content {
            background-image: url('aboutbg.jpg');
            text-align: center;
            padding: 50px 20px;
        }
        .content img {
            max-width: 100%;
            height: auto;
        }
        .content h1 {
            font-size: 35px;
            color: #333;
            margin-top: 20px;
            font-weight: 1000;
            color: #293660;
        }
        .content p {
            font-size: 18px;
            color: gray;
            font-weight: bold;
        }
        .btn-back {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            font-weight: bold;
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
    
    <div class="content">
   <img alt="" height="600" src="thankyou.jpg" width="700"/>
   <h1>
    Thank You for Your Interest
   </h1>
   <p>
    Our team will contact you within 5 working days
   </p>
   <a class="btn-back" href="{{ route('home') }}">
    BACK TO HOMEPAGE
</a>
  </div>

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
 </body>
</html>

</body>
<script src="{{asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}"></script>    
</html>