<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AshokTour'n'Travels</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- header section starts  -->

    <header>
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="index.html" class="logo">Ashok Tour <span>'n'</span> Travels</a>

        <nav class="navbar">
            <a href="#packages">tour packages</a>
            <a href="#services">taxi services</a>
            <a href="#oneway_services">one-Way taxi</a>
            <a href="#about">About</a>
            <a href="./contact.html">Contact Us</a>
            <!-- <a href="#gallery">gallery</a> -->
            <!-- <a href="#review">review</a> -->
        </nav>

        <div class="icons">
            <!-- <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i> -->
            <a href="tel:+919815374668"><i style="color: #ffa500">Call_Us</i></a>
            <a href="https://wa.me/919815374668"><i style="color:#4FCE5D">Whatsapp_Us</i></a>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here..." />
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>

        <form action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email" />
            <input type="password" class="box" placeholder="enter your password" />
            <input type="submit" value="login now" class="btn" />
            <input type="checkbox" id="remember" />
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have and account? <a href="#">register now</a></p>
        </form>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>dicover new places with us, adventure awaits</p>
            <a href="#packages" class="btn">discover more</a>
        </div>
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>

    <!-- home section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">
        <h1 class="heading">
            <span>t</span>
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span class="space"></span>
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/p-1.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Chandigarh-Shimla-Kufri</h3>
                    <p>
                        4 Days Starting From &#8377;12000
                        4 Days – Etios/Dzire &#8377;12000 | Innova &#8377;16000 | Crysta &#8377;18000 | Tempo Traveller &#8377;20000
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-2.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Chandigarh-Jammu-Katra</h3>
                    <p>
                        4 Days Starting From &#8377;12000
                        4 Days – Etios/Dzire &#8377;12000 | Innova &#8377;16000 | Crysta &#8377;&#8377;18000 | Tempo Traveller &#8377;20000
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-3.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Chandigarh-Dharmashala-Dalhousie</h3>
                    <p>
                        4 Days Starting From &#8377;12000
                        4 Days – Etios/Dzire &#8377;12000 | Innova &#8377;16000 | Crysta &#8377;18000 | Tempo Traveller &#8377;20000
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-4.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Chandigarh-Mussoorie</h3>
                    <p>
                        4 Days Starting From &#8377;12000
                        4 Days – Etios/Dzire &#8377;12000 | Innova &#8377;16000 | Crysta &#8377;18000 | Tempo Traveller &#8377;20000
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-7.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> Chandigarh-Kullu-Manali</h3>
                    <p>
                        4 Days Starting From &#8377;12000
                        4 Days – Etios/Dzire &#8377;12000 | Innova &#8377;16000 | Crysta &#8377;18000 | Tempo Traveller &#8377;20000
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-8.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i> chandigarh-Dalhousie-Khajjiar</h3>
                    <p>
                        4 Days Starting From &#8377;12000
                        4 Days – Etios/Dzire &#8377;12000 | Innova &#8377;16000 | Crysta &#8377;18000 | Tempo Traveller &#8377;20000
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
        <h1 class="heading">
            <span>t</span>
            <span>a</span>
            <span>x</span>
            <span>i</span>
            <span class="space"></span>
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/v-1.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-car"></i> Toyata Etios</h3>
                    <p>
                        &#8377;10/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/v-2.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-car"></i> Maruti Dzire</h3>
                    <p>
                        &#8377;10/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/v-3.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-car"></i> Maruti Ertiga</h3>
                    <p>
                        &#8377;12/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/v-4.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-car"></i> Mahindra Marazzo</h3>
                    <p>
                        &#8377;14/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/v-5.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-car"></i> Toyota Innova</h3>
                    <p>
                        &#8377;14/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/v-6.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-car"></i> Toyota Crysta</h3>
                    <p>
                        &#8377;16/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/v-7.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-car"></i> Toyota Fortuner</h3>
                    <p>
                        &#8377;32/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/v-8.jpg" alt="" />
                <div class="content">
                    <h3><i class="fas fa-shuttle-van"></i> Tempo Traveller</h3>
                    <p>
                        &#8377;20/km - Toll Tax as per actual |
                        Driver Allowances Extra
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>
    </section>



    <section class="services" id="services">
        <h1 class="heading" id="oneway_services">
            <span>o</span>
            <span>n</span>
            <span>e</span>
            <span class="space"></span>
            <span>w</span>
            <span>a</span>
            <span>y</span>
            <span class="space"></span>
            <span>t</span>
            <span>a</span>
            <span>x</span>
            <span>i</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Chandigarh - Delhi</h3>
                    <hr>
                    <p>
                        Etios - &#8377;3000 <br>
                        Dzire - &#8377;3000 <br>
                        Ertiga - &#8377;3500 <br>
                        Innova - &#8377;4000 <br>
                        Crysta - &#8377;4500 <br>
                        Tempo - &#8377;12000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Delhi - Chandigarh</h3>
                    <hr>
                    <p>
                        Etios - &#8377;3000 <br>
                        Dzire - &#8377;3000 <br>
                        Ertiga - &#8377;3500 <br>
                        Innova - &#8377;4000 <br>
                        Crysta - &#8377;4500 <br>
                        Tempo - &#8377;12000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>


            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Chandigarh-Manali</h3>
                    <hr>
                    <p>
                        Etios - &#8377;4500 <br>
                        Dzire - &#8377;4500 <br>
                        Ertiga - &#8377;5500 <br>
                        Innova - &#8377;6500 <br>
                        Crysta - &#8377;7500 <br>
                        Tempo - &#8377;14000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Manali-Chandigarh</h3>
                    <hr>
                    <p>
                        Etios - &#8377;4500 <br>
                        Dzire - &#8377;4500 <br>
                        Ertiga - &#8377;5500 <br>
                        Innova - &#8377;6500 <br>
                        Crysta - &#8377;7500 <br>
                        Tempo - &#8377;14000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Delhi-Manali</h3>
                    <hr>
                    <p>
                        Etios - &#8377;7500 <br>
                        Dzire - &#8377;7500 <br>
                        Ertiga - &#8377;9000 <br>
                        Innova - &#8377;1100 <br>
                        Crysta - &#8377;12000 <br>
                        Tempo - &#8377;25000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Manali-Delhi</h3>
                    <hr>
                    <p>
                        Etios - &#8377;7500 <br>
                        Dzire - &#8377;7500 <br>
                        Ertiga - &#8377;9000 <br>
                        Innova - &#8377;1100 <br>
                        Crysta - &#8377;12000 <br>
                        Tempo - &#8377;25000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Chandigarh-Shimla</h3>
                    <hr>
                    <p>
                        Etios - &#8377;2500 <br>
                        Dzire - &#8377;2500 <br>
                        Ertiga - &#8377;3500 <br>
                        Innova - &#8377;4000 <br>
                        Crysta - &#8377;4500 <br>
                        Tempo - &#8377;7000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Shimla-Chandigarh</h3>
                    <hr>
                    <p>
                        Etios - &#8377;2500 <br>
                        Dzire - &#8377;2500 <br>
                        Ertiga - &#8377;3500 <br>
                        Innova - &#8377;4000 <br>
                        Crysta - &#8377;4500 <br>
                        Tempo - &#8377;7000 <br>
                    </p>
                    <a href="tel:+919815374668" class="btn">Book Now</a>
                </div>
            </div>
h
        </div>
    </section>




    <section class="services" id="services">
        <h1 class="heading" id="about">
            <span>a</span>
            <span>b</span>
            <span>o</span>
            <span>u</span>
            <span>t</span>
            <span class="space"></span>
            <span>u</span>
            <span>s</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <div class="content">
                    <h3><i class="fas fa-car"></i>Why Ashok Tour 'n' Travels?</h3>
                    <hr>

                    <p>Ashok Tour 'n' Travels is one of the oldest and reputeted tours company for more than a decade. <br>
                        We have the most skilled and professional co-workers who have explored the destinations and the road map <br>
                        for multiple times. We have the passion, dedication and plan for every trip you wish of. <br>
                        <strong>Come with us, explore beyond your imagination.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>






    <!-- footer section  -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Find Us</h3>
                <p>
                    SCF 1, Kalka Shimla National Highway Road, Wadhawa Nagar Hotal NEO Classic Backside Dhakoli, Zirakpur, Chandigarh
                </p><br>
                <p>Phone:+91-9815374668</p><br>
                <p>Mail:<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2544564d4a4e514a50574b51574453404956654248444c490b464a48">[email&#160;protected]</a></p>
            </div>
            <div class="box">
                <h3>popular destination</h3>
                <a href="#">Shimla</a>
                <a href="#">Ladakh</a>
                <a href="#">Manali</a>
                <a href="#">Chandigarh</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#packages">tour packages</a>
                <a href="#services">taxi services</a>
                <a href="#oneway_services">one-Way taxi</a>
                <a href="#about">about</a>
                <a href="./contact.html">Contact Us</a>
                <!-- <a href="#">gallery</a>
            <a href="#">review</a> -->
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/Ashok-Tour-Travels-105122087549206/">facebook</a>
                <!-- <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a> -->
            </div>

            <h1 class="credit">
                created by <span> <strong>Ashok Tour 'n' Travels</strong> </span> | all
                rights reserved!
            </h1>
    </section>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>

</html>