<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLINIOX|WEBSITE</title>

    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">

     <!-- FONTAWESOME CDN  LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

     <!-- BOXICON CSS LINK -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!-- AOS CSS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


    
</head>
<body>

    <!--========== HEADER SECTION STARTS ==========-->

    <header class="header">
    
        <div id="menu-btn"><i class='bx bx-menu' ></i></div>
        <a href="#" class="logo"><i class='bx bxl-medium-old'></i> CLINIOX </a>

        <nav class="navbar">
            <a href="#home"> Home </a>
            <a href="#about"> About </a>
            <a href="#products"> Products </a>
            <a href="#services"> Services </a>
            <a href="#clinic"> Clinic </a>
            <a  href="#blogs"> Blogs </a>
            <a  href="#book-form"> Contact </a>
            <a href="{{ url('login') }}" class="btn"><i class='bx bx-user' ></i>LOGIN</a>
            <a href="{{ url('register') }}" class="btn"><i class='bx bx-receipt' ></i>REGISTER</a>
        </nav>

     
    </header>


     <!--========== HEADER SECTION ENDS ==========-->

     <!--========== HOME SECTION STARTS ==========-->

     <section class="home" id="home">
        <div class="content">
            <span> BOOK NOW! </span>
            <h3> For your Health and Skin </h3>
            <p> Our board-certified doctors with over a decade of experience handling a wide range of diseases
                 and are qualified to serve our patients under proper supervision.</p>
                <a href="#book-form" class="btn"> Book Appointment </a>
        </div>
     </section>

     <!--========== HOME SECTION ENDS ==========-->

    

      <!--========== ABOUT SECTION STARTS ==========-->

      <section class="about" id="about">
        <div class="video-container">
            <video src="{{asset('assets/images/video1.mp4')}}" muted autoplay loop class="video"></video>
            <div class="controls">
                <span class="control-btn" data-src="{{asset('assets/images/video1.mp4')}}"></span>
                <span class="control-btn" data-src="{{asset('assets/images/video2.mp4')}}"></span>
                <span class="control-btn" data-src="{{asset('assets/images/video3.mp4')}}"></span>
            </div>
        </div>
        <div class="content">
            <span> ABOUT US </span>
            <h3>Why Choose Us?</h3>
            <p>Our patients are our prime concern. We provide high-quality medical care through our qualified and certified team.
We are one of the best health clinics in town, with over 25 certified and qualified doctors serving the community since 1998.?</p>
                 <a href="#" class="btn"> Read More! </a>
        </div>
      </section>

      <!--========== ABOUT SECTION ENDS ==========-->

      <!--========== PRODUCTS SECTION STARTS ==========-->

      <section class="products" id="products">
        <div class="heading">
            <span> OUR PRODUCTS </span>
            <h1> See our Clinic Skin Products </h1>
        </div>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product1.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Moisturizing Lotion </h3>
                        <p>is clinically proven to start repairing the skin's moisture barrier in 24 hours and completely restore it in just 1 week.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product2.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Hydrating Primer </h3>
                        <p>The best primers for dry skin might be the most important products when it comes to extending the longevity of your favorite.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product3.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Radical Dark Spot Corrector </h3>
                        <p>Even Better Clinical Radical Dark Spot Corrector + Interrupter, our most powerful brightening serum, helps correct and disrupt.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product4.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Clarifying Lotion 2 </h3>
                        <p>Always formulated for maximum results without irritation. No parabens. No phthalates. No fragrance. Just happy skin.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product5.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Moisturising Gel </h3>
                        <p>Always formulated for maximum results without irritation. No parabens. No phthalates. No fragrance. Just happy skin</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product6.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Anti Age Moisturizer </h3>
                        <p> From Skinbetter, Isdin, Clinique, and more, these are the best wrinkle creams recommended by dermatologists.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product7.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Hydrytor </h3>
                        <p>Hydrators are ingredients called humectants, such as glycerin or hyaluronic acid, that absorb water from the atmosphere or your.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product8.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Repair Wrinkle </h3>
                        <p>Neutrogena Rapid Wrinkle Repair Retinol Face Moisturizer, Daily Anti-Aging Face Cream with Retinol & Hyaluronic Acid to Fight Fine Lines.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/product8.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3> Repair Wrinkle </h3>
                        <p>Neutrogena Rapid Wrinkle Repair Retinol Face Moisturizer, Daily Anti-Aging Face Cream with Retinol & Hyaluronic Acid to Fight Fine Lines.</p>
                        <a href="#"> Read More! <i class='bx bx-right-arrow-alt' ></i></a>
                    </div>
                </div>


            </div>
      </section>

      <!--========== PRODUCTS SECTION ENDS ==========-->

      <!--========== SERVICE SECTION STARTS ==========-->

      <section class="services" id="services">
        <div class="heading">
        <span> OUR SERVICES </span>
        <h1> Features Included </h1>
        </div>

        <div class="box-container">
            <div class="box">
            <i class='bx bx-plus-medical' ></i>
            <h3> Medical Services </h3>
            <p> emergency, preventative, rehabilitative, long-term, hospital, diagnostic, primary, palliative, and home care. These services are centered around making health care accessible, high quality, and patient-centered. </p>
            </div>

            <div class="box">
            <i class='bx bxl-deezer' ></i>
            <h3> Ultrasound </h3>
            <p> Ultrasound Services provides a full suite of on-demand services including a wide range of ultrasound options, so you can choose the best way to enhance your . </p>
            </div>

            <div class="box">
            <i class='bx bx-bot'></i>
            <h3> Modern Technology </h3>
            <p> From smart beds to automated IV pumps, learn how new nursing technologies are drastically changing patient care around the world. </p>
            </div>

            <div class="box">
            <i class='bx bx-book'></i>
            <h3> Booking Appointment </h3>
            <p>Try to decide first what kind of doctor you need for your appointment or ... Manage clinic schedules and appointments as well as your affiliated doctors. </p>
            </div>

            <div class="box">
            <i class='bx bx-injection'></i>
            <h3> Scar Treatment </h3>
            <p> Laser scar treatment can ease the pain and itch that scars sometimes cause. If a scar limits movement, laser treatment can help you move more freely. Still </p>
            </div>

            <div class="box">
            <i class='bx bxs-capsule'></i>
            <h3> Medical Dermatology </h3>
            <p> Skin MD has a team of board-certified Dermatologists that offers a personalized approach to skin care.Book an appointment in our skin clinic </p>
            </div>



        </div>
      </section>

      <!--========== SERVICE SECTION ENDS ==========-->

       <!--========== CLINIC SECTION STARTS ==========-->

       <section class="clinic" id="clinic">
        <div class="heading">
            <span> OUR CLINIC </span>
            <h1>  Medical And Skin Clinic Facilities </h1>
        </div>

        <div class="box-container">
        <div class="box">
            <img src="{{asset('assets/images/clinic1.jpg')}}" alt="">
            <span> Clinic</span>
            <h3> Facilities and Equipment </h3>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/clinic2.jpg')}}" alt="">
            <span> Clinic</span>
            <h3> Facilities and Equipment </h3>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/clinic3.jpg')}}" alt="">
            <span> Clinic</span>
            <h3> Facilities and Equipment </h3>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/clinic4.jpg')}}" alt="">
            <span> Clinic</span>
            <h3> Facilities and Equipment </h3>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/clinic5.jpg')}}" alt="">
            <span> Clinic</span>
            <h3> Facilities and Equipment </h3>
        </div>

        <div class="box">
            <img src="{{asset('assets/images/clinic6.jpg')}}" alt="">
            <span> Clinic</span>
            <h3> Facilities and Equipment </h3>
        </div>
        </div>
       
       </section>

        <!--========== CLINIC SECTION ENDS ==========-->

        <!--========== REVIEW SECTION STARTS ==========-->

        <section class="review">
            <div class="content">
                <span> TESTIMONIALS </span>
                <h3> Our Client's Feedback </h3>
                <p>Cliniox - they did a wonderful, excellent job for me - in nursing me back to health!!! Even though the Clinic was very busy I did not have to</p>
            </div>
            <div class="box-container">
                <div class="box">
                    <p> Cliniox - they did a wonderful, excellent job for me - in nursing me back to health!!! Even though the Clinic was very busy I did not have to</p>
                    <div class="user">
                        <img src="{{asset('assets/images/testimonial1.png')}}" alt="">
                        <div class="info">
                            <h3> Roger Saris </h3>
                            <span> Patient </span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <p>Cliniox - they did a wonderful, excellent job for me - in nursing me back to health!!! Even though the Clinic was very busy I did not have to </p>
                    <div class="user">
                        <img src="{{asset('assets/images/testimonial2.png')}}" alt="">
                        <div class="info">
                            <h3> Ann Levin </h3>
                            <span> Patient </span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <p>Cliniox - they did a wonderful, excellent job for me - in nursing me back to health!!! Even though the Clinic was very busy I did not have to </p>
                    <div class="user">
                        <img src="{{asset('assets/images/testimonial3.png')}}" alt="">
                        <div class="info">
                            <h3> Randi Saris </h3>
                            <span> Patient </span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <p>Cliniox - they did a wonderful, excellent job for me - in nursing me back to health!!! Even though the Clinic was very busy I did not have to </p>
                    <div class="user">
                        <img src="{{asset('assets/images/testimonial4.png')}}" alt="">
                        <div class="info">
                            <h3> Zaire Aminoff </h3>
                            <span> Patient </span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--========== REVIEW SECTION ENDS ==========-->

         <!--========== BLOGS SECTION STARTS ==========-->

         <section class="blogs" id="blogs">
            <div class="heading">
                <span> BLOGS & POST </span>
                <h1> Our Medical And Skin Treatment </h1>
            </div>
            <div class="box-container">

            
                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/blogs1.jpg')}}" alt="">
                    </div>
                    <div class="content">
                    <a href="#" class="link"> Well Take Care of Your Health & Skin </a>
                    <p> We are one of the best health clinics in town, with over 25 certified and qualified doctors serving the community since 1998.</p>
                         <div class="icon">
                            <a href="#"><i class='bx bx-time-five'></i> January 30, 2023 </a>
                            <a href="#"><i class='bx bx-user' ></i> By: Admin </a>
                         </div>
                </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/blogs2.jpg')}}" alt="">
                    </div>
                    <div class="content">
                    <a href="#" class="link"> Well Take Care of Your Health & Skin </a>
                    <p> We are one of the best health clinics in town, with over 25 certified and qualified doctors serving the community since 1998.</p>
                         <div class="icon">
                            <a href="#"><i class='bx bx-time-five'></i> January 30, 2023 </a>
                            <a href="#"><i class='bx bx-user' ></i> By: Admin </a>
                         </div>
                </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/blogs3.jpg')}}" alt="">
                    </div>
                    <div class="content">
                    <a href="#" class="link"> Well Take Care of Your Health & Skin </a>
                    <p> We are one of the best health clinics in town, with over 25 certified and qualified doctors serving the community since 1998.</p>
                         <div class="icon">
                            <a href="#"><i class='bx bx-time-five'></i> January 30, 2023 </a>
                            <a href="#"><i class='bx bx-user' ></i> By: Admin </a>
                         </div>
                </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/blogs4.png')}}" alt="">
                    </div>
                    <div class="content">
                    <a href="#" class="link"> Well Take Care of Your Health & Skin </a>
                    <p> We are one of the best health clinics in town, with over 25 certified and qualified doctors serving the community since 1998.</p>
                         <div class="icon">
                            <a href="#"><i class='bx bx-time-five'></i> January 30, 2023 </a>
                            <a href="#"><i class='bx bx-user' ></i> By: Admin </a>
                         </div>
                </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/blogs5.jpg')}}" alt="">
                    </div>
                    <div class="content">
                    <a href="#" class="link"> Well Take Care of Your Health & Skin </a>
                    <p> We are one of the best health clinics in town, with over 25 certified and qualified doctors serving the community since 1998.</p>
                         <div class="icon">
                            <a href="#"><i class='bx bx-time-five'></i> January 30, 2023 </a>
                            <a href="#"><i class='bx bx-user' ></i> By: Admin </a>
                         </div>
                </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="{{asset('assets/images/blogs6.jpg')}}" alt="">
                    </div>
                    <div class="content">
                    <a href="#" class="link"> Well Take Care of Your Health & Skin </a>
                    <p> We are one of the best health clinics in town, with over 25 certified and qualified doctors serving the community since 1998.</p>
                         <div class="icon">
                            <a href="#"><i class='bx bx-time-five'></i> January 30, 2023 </a>
                            <a href="#"><i class='bx bx-user' ></i> By: Admin </a>
                         </div>
                </div>
                </div>


                
            </div>
         </section>

          <!--========== BLOGS SECTION ENDS ==========-->

          <!-- CONTACT SECTION START -->

          <section class="book-form" id="book-form">
            <div class="heading">
                <span> GET IN TOUCH </span>
                <h1> Contact Us </h1>
            </div>

                <form action="">

               <div class="inputBox">
                <span>Last Name</span>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
               </div>

               <div class="inputBox">
                <span>First Name</span>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
               </div>

               <div class="inputBox">
                <span>Email</span>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
               </div>

               <div class="inputBox">
                <span>Phone Number</span>
                <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
               </div>

               <div class="inputBox">
                <span>Date</span>
                <input type="date" name="date" class="form-control" required>
               </div>

               <div class="inputBox">
                <span>Time</span>
                <input type="time" name="time" class="form-control" required>
               </div>

               <div class="inputBox">
                <span>Message</span>
                <textarea name="message" placeholder="Message (optional)" rows="3"></textarea>
               </div>

               <input type="submit" name="sumbit" class="btn" value="Book Appointment">

                </form>
            </div>
          </section>
    
          <!-- CONTACT SECTION END -->

          <!--========== BANNER SECTION STARTS ==========-->
            <div class="banner">
                
            
          <div class="content">
            <span> Book Now </span>
            <h3> For your Health and Skin </h3>
            <p> Our board-certified doctors with over a decade of experience handling a wide range of diseases
                 and are qualified to serve our patients under proper supervision.</p>
                <a href="#book-form" class="btn"> Book Appointment </a>
          </div>
          </div>

           <!--========== BANNER SECTION ENDS ==========-->

          <!--========== FOOTER SECTION STARTS ==========-->

          <section class="footer">
            <div class="box-container">
                <div class="box">
                    <a href="#" class="logo"><i class='bx bxl-medium-old'></i> CLINIOX</a>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, esse!</p>
                    <div class="share">
                        <a href="#"><i class='bx bxl-facebook' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-telegram' ></i></a>
                    </div>
                </div>
                
                <div class="box">
                    <h3> QUICK LINKS </h3>
                    <a href="#home" class="links"><i class='bx bx-right-arrow-alt' ></i> Home</a>
                    <a href="#about" class="links"><i class='bx bx-right-arrow-alt' ></i> About</a>
                    <a href="#products" class="links"><i class='bx bx-right-arrow-alt' ></i> Products</a>
                    <a href="#services" class="links"><i class='bx bx-right-arrow-alt' ></i> Services</a>
                    <a href="#clinic" class="links"><i class='bx bx-right-arrow-alt' ></i> Clinic</a>
                    <a href="#blogs" class="links"><i class='bx bx-right-arrow-alt' ></i> Blogs</a>
                </div>

                <div class="box">
                    <h3> CONTACT INFORMATION </h3>
                    <p><i class='bx bx-map' ></i> Calapan City, Oriental Mindoro </p>
                    <p><i class='bx bx-phone' ></i> +123-456-7890 </p>
                    <p><i class='bx bx-envelope' ></i> cliniox@gmail.com </p>
                    <p><i class='bx bx-calendar' ></i> Monday - Saturday </p>
                    <p><i class='bx bx-time-five' ></i> 8:00am - 5:00 pm </p>
                </div>

                <div class="box">
                    <h3> FOR MORE INFO </h3>
                    <p> See the Latest Update </p>
                    <form action="">
                        <input type="email" name="" placeholder="Enter Your Email" class="email" id="">
                        <input type="submit" value="subscribe" class="btn"> 
                    </form>
                </div>

            </div>
          </section>

          <div class="credit"> Created By <span> Cliniox </span> | All Rights Reserved!</div>

            <!--========== FOOTER SECTION ENDS ==========-->









  
<!-- JS  LINK -->
   <script src="{{asset('assets/js/script.js')}}" defer></script>
</body>
</html>