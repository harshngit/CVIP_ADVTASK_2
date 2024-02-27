<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Travel intenary</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <!-- font aws link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!-- header secton start-->
    <header class="navbar">
        <div class="header">
            <a href="home.php" class="logo">TravelGo <i class="fa-solid fa-plane-departure"></i></a>
        <div class="header-right">
                <a href="#home">Home</a>
                <a href="#tours">Services</a>
                <a href="#package">Package</a>
                <a href="#aboutus">About us</a>
                <a href="#contact">Contact us</a>
        </div>
        </div>
    </header>
        <!--  header section end -->
    <!--  main section start -->
    <section class="banner" id="home">
            <div class="banner-text-item">
                <div class="banner-heading">
                    <h1>Find your Next tour!</h1>
                </div>
                <form class="form">
                    <input type="text" list="mylist" placeholder="Where would you like to go?">
                    <datalist id="mylist">
                        <option>London</option>
                        <option>Canada</option>
                        <option>Monaco</option>
                        <option>France</option>
                        <option>Japan</option>
                        <option>Switzerland</option>
                        <option>Seoul</option>
                    </datalist>
                    <input type="date" class="date">
                    <a href="#" class="book">book</a>
                </form>
            </div>
        </section>
    <!-- main section ends -->

    <!--  service section starts  -->
    <section  class="services" id="tours">
        <h2 class="heading">Our <span> Services</span></h2>
        <div class="services_items">
                    <div class="card">
                    <i class="fa-solid fa-earth-americas"></i>
                    <h2>800+ Our local Guide</h2>
                    </div>
                    <div class="card">
                    <i class="fa-solid fa-handshake"></i>
                    <h2>100% trust on out Agent</h2>
                    </div>
                    <div class="card">
                    <i class="fa-solid fa-campground"></i></i>
                    <h2>20 Years of  Experience</h2>
                    </div>
                    <div class="card">
                    <i class="fa-solid fa-headphones"></i>
                    <h2>24/7 Customer Support</h2>
                    </div>
                    <div class="card">
                    <i class="fa-solid fa-bus-simple"></i>
                    <h2>Good Quality Travel</h2>
                    </div>
        </div>
    </section>
    <!-- service section ends -->

    <!-- pakages section start -->
    <section class="packages" id="package">
        <h2 class="heading">Choose  Your <span>Package</span></h2>
        <div class="container">
            <div class="row">
                <div class="pak_items">
                    <img src="img/london.jpg" alt="img1">
                    <h2>london</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Commodi ducimus ut consectetur, repellat sequi ex quas beatae, 
                        incidunt ratione accusantium aspernatur!Mollitia consectetur 
                    </p>
                    <h4>Price : <span class="price">1.50L</span></h4>
                    <a href="#"><button class="btn">Book Now</button></a>
                </div>
            </div>

            <div class="row">
                <div class="pak_items">
                    <img src="img/canada.jpeg" alt="img2">
                    <h2>Canada</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Commodi ducimus ut consectetur, repellat sequi ex quas beatae, 
                        incidunt ratione accusantium aspernatur!Mollitia consectetur 
                    </p>
                    <h4>Price : <span class="price">1 L</span></h4>
                    <a href="#"><button class="btn">Book Now</button></a>
                </div>
            </div>

            <div class="row">
                <div class="pak_items">
                    <img src="img/france.jpg" alt="img3">
                    <h2>France</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Commodi ducimus ut consectetur, repellat sequi ex quas beatae, 
                        incidunt ratione accusantium aspernatur!Mollitia consectetur 
                    </p>
                    <h4>Price : <span class="price">1.20L</span></h4>
                    <a href="#"><button class="btn">Book Now</button></a>
                </div>
            </div>

            <div class="row">
                <div class="pak_items">
                    <img src="img/swis.jpg" alt="img4">
                    <h2>Swis</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Commodi ducimus ut consectetur, repellat sequi ex quas beatae, 
                        incidunt ratione accusantium aspernatur!Mollitia consectetur 
                    </p>
                    <h4>Price : <span class="price">2 L</span></h4>
                    <a href=""><button class="btn">Book Now</button></a>
                </div>
            </div>
            <div class="row">
                <div class="pak_items">
                    <img src="img/japan.jpg" alt="img1">
                    <h2>Japan</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Commodi ducimus ut consectetur, repellat sequi ex quas beatae, 
                        incidunt ratione accusantium aspernatur!Mollitia consectetur 
                    </p>
                    <h4>Price : <span class="price">1.50L</span></h4>
                    <a href="#"><button class="btn">Book Now</button></a>
                </div>
            </div>
            <div class="row">
                <div class="pak_items">
                    <img src="img/man.jpg" alt="img1">
                    <h2>Monaco</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Commodi ducimus ut consectetur, repellat sequi ex quas beatae, 
                        incidunt ratione accusantium aspernatur!Mollitia consectetur 
                    </p>
                    <h4>Price : <span class="price">1 L</span></h4>
                    <a href="#"><button class="btn">Book Now</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- pakages section ends -->
    <!-- about section starts -->
    <section class="about" id="aboutus">
            <div class="about-img">
                <img src="img/about.jpg" alt="About Us">
            </div>
            <div class="about-text">
                <small>ABOUT OUR COMPANY</small>
                <h2>We are Go Trip Ravels Support Company</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud</p>
                <a href="#contact">Contact us</a>
            </div>
        </section>
    <!-- about section ends -->
    <!-- contact section start -->
    <section class="contact" id="contact">
	<h1 class="heading"> Contact <span>Me</span>
<div class="container">
	<h1 class="heading1">Fill the form</h1>
	<form action="#">
		<div class="row">
			<label >Name:</label>
			<input type="text" name="name" placeholder="Enter Your Name" required autocomplete="off">
		</div>
		<div class="row">
			<label>Email:</label>
			<input type="email" name="email" placeholder="example@domain.com" required autocomplete="off">
		</div>
		<div class="row">
			<label for="message">Message:</label>
			<textarea name="message" rows="5" cols="30" autocomplete="off"></textarea>
		</div>
		<button type="submit" class="btn">Send Message</button>
	</form>
</div>
</section>
    <!-- contact section ends -->
    <!-- footer secton start -->
    <footer>
        <div class="txt">
            <h1>Created and Devleoped by <span>@codewitharsh</span></h1>
            <img src="img/logoweb.png" alt="">
        </div>
    </footer>
    <!-- footer secton ends -->
    </body>
</html>