<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ashish Dhakal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link src="/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    {{-- ------------navbar header starts------------------- --}}
    <div class="nav-header container">
        <div class="hero-name">
            <a href="#"> Ashish Dhakal</a>
        </div>
        <div class="nav-bar" id="Topnav-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Education">Education</a></li>
                <li><a href="#Education">Experience</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#Service">Service</a></li>
                <li><a href="#Contact">Contact</a></li>
                <li><div id="menu-btn" class="fas fa-bars"></div></li>
            </ul>
        </div>
    </div>
    {{-- ---------------nav-header ends-------------------- --}}

    {{-- -----------------hero section starts------------------ --}}
    <section class="hero-section container">
        <div class="hero-info">
            <div class="dot-image-three">
                <img src="/img/dot-image.png" alt="">
            </div>

            <div class="intro">
                Hey There 👋 I am <br>
                <span class="span-one">Ashish Dhakal</span><br>
            </div>
            <div class="intro-one">
                Professional<span> Full Stack Developer</span>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean interdum consequat convallis.</p>

            <div class="hero-button">
                <a name="" id="" class="btn btn-primary" href="#Contact" role="button">Contact</a>
                <a name="button-hero" id="" class="btn btn-primary" href="https://www.upwork.com/freelancers/~0190ef82bd42e4d819"
                    role="button">Hire Me</a>
            </div>

        </div>
        <div class="hero-image">

            <img src="/img/hero-image.jpeg" alt="hero-image">
        </div>
        <div class="dot-image-two">
            <img src="/img/dot-image.png" alt="">
        </div>

        <div class="dot-image-one">
            <img src="/img/dot-image.png" alt="">
        </div>
        <br>
    </section>


    {{-- ------------------ hero section ends here------------- --}}

    {{-- -------------------about section starts ----------------- --}}

    <div class="container">
        <section class=" about-section header-section " id="About">
        <h2 class="section-header "><span>About Me</span></h2>
        <p class="about-me-parag">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia impedit sed harum
            eos deleniti porro quos doloremque. Deleniti, dolore ab? Nihil ducimus nulla, quod debitis atque minima
            voluptate sint praesentium. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum velit soluta
            nemo ainer, veniam tenetur numquam rerum. Repellendus, molestiae at molestias quos pariatur quia ducimus
            maiores perspiciatis ab dolorem provident?</p>

        <div class="about-box  ">
            <div class="box-one">
                <span class="num">2+</span>
                <h3>Years <br>experience</h3>
            </div>
            <div class="box-two">
                <span class="num">4</span>
                <h3>Project <br>Compleated</h3>
            </div>
        </div>
    </section>
    </div>

    {{-- -------------------about section ends ----------------- --}}


    {{-- ------------------education section starts-------------------- --}}

    <section class="education container" id="Education">
        <h2 class="section-header"><span>Education and Experience</span></h2>
        <div class="card-combo">
            <div class="edu-card">
                <div class="year">2017</div>
                <div class="level">SEE</div>
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor
                    sit amet.</p>
            </div>
            <div class="edu-card">
                <div class="year">2019</div>
                <div class="level">NEB</div>
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor
                    sit amet.</p>
            </div>
            <div class="edu-card">
                <div class="year">2019-2024</div>
                <div class="level">University</div>
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor
                    sit amet.</p>
            </div>
        </div>
    </section>
    {{-- ------------------education section ends---------------------- --}}


    {{------------------------portofolio section starts------------------}}


<section class="portfolio container" id="Portfolio">

 <h2 class="section-header"><span>Portfolio</span></h2>

<div class="box-container">

    <div class="box">
         <a href="https://github.com/Ashish-Dhakal/Hotel-Management-System" target="_blank"> <img src="img/javaproject.jpg" alt="" ></a> 
    </div>
    
    <div class="box">
        <a href="website/home.html"  target="_blank" ><img src="img/emall-image.png" alt=""> alt="" ></a> 
   </div>

    <div class="box">
        <a href="https://github.com/Ashish-Dhakal/Ecommerce"> <img src="img/travel-web.jpg" alt=""> alt="" ></a>
    </div>
   
    <div class="box">
        <a href="#"> <img src="img/websiteprj-ing.jpg" alt=""> </a>
    </div>

</div>

</section>
    {{------------------------portofolio section ends--------------------}}

    {{------------------------contact section starts---------------------}}

    <section class="service container" id="Service">
        <h2 class="section-header"><span>Service</span></h2>
        <div class="service-box">
                <div class="service-content">
                    <h4>web design</h4>
                    <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo labore cum corrupti quo asperiores ipsam maxime magnam nulla dicta ipsa dolores enim itaque quae dolorum veritatis sapiente, nemo illum ducimus.</div></p>
                </div>
                <div class="service-content">
                    <h4>web design</h4>
                    <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo labore cum corrupti quo asperiores ipsam maxime magnam nulla dicta ipsa dolores enim itaque quae dolorum veritatis sapiente, nemo illum ducimus.</div></p>
                </div>
                <div class="service-content">
                    <h4>web design</h4>
                    <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo labore cum corrupti quo asperiores ipsam maxime magnam nulla dicta ipsa dolores enim itaque quae dolorum veritatis sapiente, nemo illum ducimus.</div></p>
                </div>
                <div class="service-content">
                    <h4>web design</h4>
                    <p><div class="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo labore cum corrupti quo asperiores ipsam maxime magnam nulla dicta ipsa dolores enim itaque quae dolorum veritatis sapiente, nemo illum ducimus.</div></p>
                </div>
                
            </div>

    </section>


    {{------------------------service section ends-----------------------}}



    {{------------------------contact section starts---------------------}}

    <section class="contact container" id="Contact">
        <h2 class="section-header"><span>Contact</span></h2>

        <div class="contact-box">
            <div class="personal-info">
                <div class="social-handler">
                    <li> <i class="fa-brands fa-facebook"></i> </li>
                    <li> <i class="fa-brands fa-instagram"></i> </li>
                    <li> <i class="fa-brands fa-linkedin"></i> </li>
                    <li> <i class="fa-brands fa-twitter"></i> </li>
                    <li> <i class="fa-brands fa-github"></i> </li>
                    <li> <i class="fa-brands fa-twitter"></i> </li>
                </div>
                <div class="address-info">
                    <li><i class="fa-solid fa-envelope"></i> ashishdhakal433@gmial.com</li>
                    <li><i class="fa-solid fa-phone"></i> +977-9863379537</li>
                    <li><i class="fa-solid fa-phone"></i> +977-9824133872</li>
                    <li><i class="fa-solid fa-location-dot"></i> Nepal Pokhara 17 <br>Baralfield , Street no.22</li>
                    <li></li>
                </div>

            </div>

            <div class="contact-form">
                <input class="info" type="text" placeholder="Name"><br>
                <input class="info" type="text" placeholder="E-mail"><br>
                <input class="info" type="text" placeholder="Project"><br>
                <textarea class="info" name="" id="" cols="25" rows="7" placeholder="Your Message......"></textarea><br>
                <a href="" class="btn">Submit</a>
            </div>
        </div>
    </section>



    {{------------------------contact section ends-----------------------}}

  








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/jquery.js"></script>
    <script src="/javascript.js"></script>

</body>

</html>
