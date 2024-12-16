<?php
session_start();

if (empty($_SESSION['aid']))
    $_SESSION['aid'] = -1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ByteBazaar</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css" />


</head>

<body>
    <section id="header">
        <a href="index.php"><img src="img/logo.png" class="logo" alt="" /></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

                <?php

                if ($_SESSION['aid'] < 0) {
                    echo "   <li><a href='login.php'>login</a></li>
            <li><a href='signup.php'>SignUp</a></li>
            ";
                } else {
                    echo "   <li><a href='profile.php'>profile</a></li>
          ";
                }
                ?>
                <li><a href="admin.php">Admin</a></li>
                <li id="lg-bag">
                    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                </li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h2>It’s Time for<br> a Change</h2>
        
        
        <p>lorem ipsum </p>
        <a href="shop.php">
            <button>Shop Now</button>
        </a>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row">  
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img src="https://i.ibb.co/QP6Nmpf/image-1-about.jpg" alt=""></a></figure>
                        <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img src="https://i.ibb.co/JvN0NVB/image-2-about.jpg" alt=""></a></figure>
                    </div>
                </div>              
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Company</span>
                            <h2>We are leader in <br>Industrial market Since 1992</h2>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</div>
                        <ul class="list-style-one">
                            <li>Lorem Ipsum is simply dummy tex</li>
                            <li>Consectetur adipisicing elit</li>
                            <li>Sed do eiusmod tempor incididunt</li>
                        </ul>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                
            </div>
        </div>
    </section>

    <section>
        <div class="container-card">
            
            <div class="card card1"><div class="svg_card"> <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>product</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="icon" fill="#000000" transform="translate(64.000000, 34.346667)"> <path d="M192,7.10542736e-15 L384,110.851252 L384,332.553755 L192,443.405007 L1.42108547e-14,332.553755 L1.42108547e-14,110.851252 L192,7.10542736e-15 Z M127.999,206.918 L128,357.189 L170.666667,381.824 L170.666667,231.552 L127.999,206.918 Z M42.6666667,157.653333 L42.6666667,307.920144 L85.333,332.555 L85.333,182.286 L42.6666667,157.653333 Z M275.991,97.759 L150.413,170.595 L192,194.605531 L317.866667,121.936377 L275.991,97.759 Z M192,49.267223 L66.1333333,121.936377 L107.795,145.989 L233.374,73.154 L192,49.267223 Z" id="Combined-Shape"> </path> </g> </g> </g></svg></div>
            <p class="card-title p_card1 " >Zero-cost Possibilities</p>
            <p class="card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable rates. No interest charged, ever.</p>
        </div>
            <div class="card card2"> <div class="svg_card"><svg fill="#000000" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M2,14H5V11H2Zm9,0h3V11H11ZM2,5H5V2H2Zm9-3V5h3V2ZM6.5,5h3V2h-3Zm0,9h3V11h-3ZM11,9.5h3v-3H11Zm-4.5,0h3v-3h-3ZM2,9.5H5v-3H2Z"></path> </g> </g></svg></div><p class="card-title">Zero-cost Possibilities</p>
            <p class="card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable rates. No interest charged, ever.</p></div>
            
            <div class="card card2"><div class="svg_card"><svg fill="#000000"  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M504.584,207.257l-45.661-4.233c-4.878-18.674-12.319-36.538-22.181-53.248l29.299-35.284 c2.696-3.246,2.475-8.012-0.509-10.996l-57.229-57.229c-2.985-2.984-7.749-3.205-10.997-0.509l-35.343,29.346 c-16.719-9.835-34.593-17.249-53.279-22.1l-4.227-45.589c-0.389-4.202-3.914-7.415-8.134-7.415h-80.933 c-4.22,0-7.745,3.214-8.135,7.416l-4.233,45.661c-18.677,4.878-36.539,12.32-53.248,22.18L114.491,45.96 c-3.246-2.696-8.011-2.476-10.996,0.509l-57.229,57.227c-2.984,2.984-3.205,7.75-0.509,10.996l29.347,35.343 c-9.835,16.718-17.249,34.592-22.101,53.279l-45.589,4.226C3.214,207.93,0,211.455,0,215.676v80.65 c0,4.22,3.214,7.745,7.416,8.135l45.589,4.226c4.852,18.688,12.266,36.561,22.101,53.28l-29.347,35.343 c-2.696,3.246-2.475,8.012,0.509,10.996l57.229,57.229c2.985,2.985,7.751,3.206,10.996,0.509l35.284-29.298 c16.71,9.862,34.571,17.302,53.248,22.179l4.233,45.661c0.389,4.202,3.915,7.416,8.135,7.416h80.933 c4.22,0,7.745-3.214,8.135-7.416l4.227-45.589c18.686-4.851,36.56-12.265,53.279-22.101l35.343,29.346 c3.247,2.698,8.011,2.474,10.997-0.509l57.229-57.229c2.984-2.984,3.204-7.75,0.509-10.996l-29.299-35.284 c9.861-16.708,17.302-34.571,22.179-53.248l45.661-4.233c4.202-0.389,7.416-3.915,7.416-8.135v-81.217 C512,211.172,508.786,207.646,504.584,207.257z M495.66,289.161l-44.034,4.082c-3.509,0.325-6.414,2.863-7.206,6.297 c-4.829,20.908-13.107,40.782-24.605,59.068c-1.88,2.99-1.625,6.851,0.631,9.568l28.268,34.043l-46.695,46.695l-34.095-28.309 c-2.714-2.253-6.568-2.512-9.557-0.637c-18.299,11.467-38.184,19.714-59.103,24.514c-3.439,0.789-5.983,3.696-6.308,7.209 l-4.076,43.97H222.84l-4.082-44.034c-0.325-3.509-2.863-6.413-6.297-7.206c-20.907-4.829-40.78-13.107-59.068-24.604 c-2.989-1.879-6.85-1.625-9.568,0.632l-34.043,28.267l-46.695-46.695l28.31-34.094c2.254-2.715,2.511-6.569,0.637-9.558 c-11.466-18.297-19.714-38.183-24.514-59.104c-0.789-3.439-3.696-5.983-7.209-6.308l-43.971-4.076v-65.754l43.971-4.075 c3.513-0.326,6.421-2.869,7.209-6.309c4.8-20.921,13.048-40.806,24.514-59.103c1.874-2.989,1.617-6.843-0.637-9.558l-28.31-34.094 l46.695-46.695l34.043,28.267c2.718,2.257,6.578,2.512,9.568,0.631c18.286-11.497,38.159-19.775,59.068-24.604 c3.433-0.793,5.971-3.698,6.297-7.206l4.082-44.035h66.037l4.076,43.971c0.326,3.513,2.869,6.421,6.308,7.209 c20.919,4.799,40.804,13.047,59.103,24.514c2.989,1.873,6.844,1.617,9.557-0.637l34.095-28.309l46.695,46.695l-28.268,34.043 c-2.256,2.717-2.511,6.578-0.631,9.568c11.499,18.289,19.776,38.163,24.605,59.068c0.793,3.434,3.698,5.972,7.206,6.297 l44.034,4.081V289.161z"></path> </g> </g> <g> <g> <path d="M256,78.979c-97.61,0-177.021,79.411-177.021,177.021c0,40.904,14.34,80.832,40.378,112.425 c2.869,3.482,8.019,3.979,11.502,1.109c3.482-2.869,3.978-8.019,1.109-11.501c-23.634-28.675-36.648-64.911-36.648-102.033 C95.319,167.401,167.4,95.32,256,95.32s160.681,72.081,160.681,160.681S344.6,416.681,256,416.681 c-37.123,0-73.359-13.015-102.033-36.648c-3.483-2.87-8.631-2.373-11.501,1.109c-2.869,3.482-2.374,8.631,1.109,11.501 c31.593,26.038,71.52,40.378,112.425,40.378c97.61,0,177.021-79.411,177.021-177.021S353.61,78.979,256,78.979z"></path> </g> </g> <g> <g> <path d="M256,111.659c-79.59,0-144.34,64.752-144.34,144.341S176.41,400.341,256,400.341s144.34-64.751,144.34-144.34 C400.34,176.41,335.59,111.659,256,111.659z M374.962,208.757l-52.009,16.899c-7.365-16.186-20.422-29.243-36.608-36.608 l16.899-52.009C335.884,150.047,361.953,176.117,374.962,208.757z M313.191,256.002c0,31.536-25.657,57.191-57.191,57.191 c-31.536,0-57.191-25.656-57.191-57.191c0-31.537,25.656-57.193,57.191-57.193C287.535,198.809,313.191,224.466,313.191,256.002z M256,127.999c10.941,0.001,21.564,1.383,31.707,3.977l-16.893,51.991c-4.787-0.983-9.741-1.5-14.814-1.5 c-5.073,0-10.028,0.516-14.814,1.5l-16.893-51.991C234.436,129.382,245.059,127.999,256,127.999z M208.757,137.039l16.899,52.009 c-16.186,7.365-29.242,20.422-36.607,36.608l-52.009-16.899C150.046,176.117,176.116,150.047,208.757,137.039z M128,256.001 c0-10.94,1.382-21.564,3.977-31.707l51.991,16.893c-0.983,4.787-1.5,9.741-1.5,14.814c0,5.073,0.516,10.028,1.5,14.814 l-51.991,16.893C129.382,277.564,128,266.942,128,256.001z M137.038,303.245l52.009-16.899 c7.365,16.186,20.421,29.242,36.607,36.607l-16.899,52.009C176.116,361.954,150.048,335.885,137.038,303.245z M256,384.002 c-10.94-0.001-21.564-1.382-31.707-3.977l16.893-51.991c4.787,0.983,9.741,1.5,14.814,1.5c5.073,0,10.028-0.516,14.814-1.5 l16.893,51.991C277.564,382.619,266.94,384.002,256,384.002z M303.243,374.963l-16.899-52.009 c16.186-7.365,29.243-20.422,36.608-36.608l52.009,16.899C361.952,335.885,335.884,361.954,303.243,374.963z M328.032,270.815 c0.983-4.787,1.5-9.741,1.5-14.814c0-5.073-0.516-10.028-1.5-14.814l51.991-16.893c2.595,10.144,3.977,20.767,3.977,31.707 c0,10.94-1.382,21.564-3.977,31.707L328.032,270.815z"></path> </g> </g> </g></svg></div><p class="card-title">Zero-cost Possibilities</p>
            <p class="card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable rates. No interest charged, ever.</p>
            </div>
            <div class="card card1"><div class="svg_card"><svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect y="270.13" width="159.1" height="38.222"></rect> </g> </g> <g> <g> <rect y="407.342" width="159.1" height="38.222"></rect> </g> </g> <g> <g> <polygon points="502.771,201.521 9.229,201.521 0,206.575 0,239.745 159.099,239.745 352.901,239.745 512,239.745 512,206.575 "></polygon> </g> </g> <g> <g> <rect y="338.741" width="159.1" height="38.222"></rect> </g> </g> <g> <g> <polygon points="256,66.432 190.064,102.528 321.936,102.528 "></polygon> </g> </g> <g> <g> <polygon points="377.442,132.913 134.558,132.913 64.736,171.136 447.264,171.136 "></polygon> </g> </g> <g> <g> <rect x="352.9" y="407.342" width="159.1" height="38.222"></rect> </g> </g> <g> <g> <rect x="352.9" y="270.13" width="159.1" height="38.222"></rect> </g> </g> <g> <g> <rect x="352.9" y="338.741" width="159.1" height="38.222"></rect> </g> </g> <g> <g> <rect x="189.486" y="270.13" width="133.029" height="175.437"></rect> </g> </g> </g></svg></div><p class="card-title p_card1" >Zero-cost Possibilities</p>
            <p class="card-description">Hubble lets users borrow USDH for a one-time 0.5% fee. No variable rates. No interest charged, ever.</p>
            </div>
            
        </div>
    </section>

    
    <section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="https://picsum.photos/id/1011/800/450" alt="" />
      </figure>
      <div class="article-body">
        <h2>This is some title</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <a href="#" class="read-more">
          Read more <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="https://picsum.photos/id/1005/800/450" alt="" />
      </figure>
      <div class="article-body">
        <h2>This is some title</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <a href="#" class="read-more">
          Read more <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="https://picsum.photos/id/103/800/450" alt="" />
      </figure>
      <div class="article-body">
        <h2>This is some title</h2>
        <p>
          Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
        </p>
        <a href="#" class="read-more">
          Read more <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
</section>

<section class="contact-section">
        <div class="contact-container">
            <!-- Section Title -->
            <h2 class="contact-title">CONTACT US</h2>
            <div class="contact-wrapper">
                <!-- Left: Contact Form -->
                <div class="contact-form-wrapper">
                    <form class="contact-form" action="#">
                        <div class="contact-input-group">
                            <input type="text" class="contact-input" placeholder="Name*" required>
                            <input type="email" class="contact-input" placeholder="Email*" required>
                        </div>
                        <input type="text" class="contact-input contact-subject" placeholder="Subject" required>
                        <textarea class="contact-input contact-message" placeholder="Message" rows="5"></textarea>
                        <button type="submit" class="contact-button">Submit</button>
                    </form>
                </div>
                <!-- Right: Contact Information -->
                <div class="contact-info-wrapper">
                    <h3 class="contact-info-title">MPC GROUP</h3>
                    <p class="contact-info-subtitle">CHI TKHARBI9A</p>
                    <p class="contact-info-detail"><strong>Phone:</strong> 123-456-7890</p>
                    <p class="contact-info-detail"><strong>Email:</strong> name@domain.com</p>
                    <p class="contact-info-detail"><strong>Website:</strong> www.domain.com</p>
                    <!-- Social Links -->
                    <div class="contact-social-links">
                        <a href="#" class="contact-social-link"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="contact-social-link"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="contact-social-link"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="contact-social-link"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Font Awesome Script -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
<section class="logo-section">
<div class="logo-container">
        <div class="logo-box">
            <img src="img/logos/abb-partner.jpg" alt="Endress+Hauser Logo">
        </div>
        <div class="logo-box">
            <img src="img/logos/eh-partner.jpg" alt="ABB Logo">
        </div>
        <div class="logo-box">
            <img src="img/logos/valmet-partner.png" alt="Valmet Logo">
        </div>
        <div class="logo-box">
            <img src="img/logos/flexim-logo.jpg" alt="Valmet Logo">
        </div>
        <div class="logo-box">
            <img src="img/logos/spirax-logo.jpg" alt="Valmet Logo">
        </div>

    </div>
</section>
<div class="footer">
        © Copyright Yourname. Design And Developed By MPC GROUP
        <div class="back-to-top" onclick="scrollToTop()">
            <span>↑</span>
        </div>
    </div>

    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

    
    <script src="script.js"></script>
</body>

</html>

<script>
window.addEventListener("onunload", function() {
  // Call a PHP script to log out the user
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "logout.php", false);
  xhr.send();
});
</script>