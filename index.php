<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interstelar</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
  <section class="header">
<nav>
  <a href=" index.php"><img src=""></a>
  <div class="nav-links">
    <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="display.php">Users</a></li>
    <li><a href="signin.php">Log In</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </ul>
  </div>
  <i class="fa-solid fa-bars"  onclick="showMenu()"></i>
</nav>
<div  class = "text-box">
  <h1>Out of this World</h1>
  <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quidem voluptatum nemo? Earum, quisquam!
  </p>
  <a href="signup.php" class="hero-btn">Sign up</a>
</div>

  </section>
  <!--  Offers -->
  <section class ="offers">
    <h1>Our Offers</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime ea, porro cupiditate quas ipsam, sed soluta nesciunt numquam illo voluptate id asperiores esse recusandae rerum adipisci impedit incidunt ratione expedita.</p>
     <div class="row">
    <div class="offer-col">
        <h3>Nebula</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, odit! Soluta sed ipsum quo amet nam! Corrupti laboriosam facilis illo provident, ill</p>
  
    </div>
    <div class="offer-col">
      <h3>Rings of Saturn</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, odit! Soluta sed ipsum quo amet nam! Corrupti
        laboriosam facilis illo provident, ill</p>
    
    </div>
    <div class="offer-col">
      <h3>Jupiter's Red Eye</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, odit! Soluta sed ipsum quo amet nam! Corrupti
        laboriosam facilis illo provident, ill</p>
    
    </div>
    </div>

  </section>
  <section class="branch">
<h1>Our Global Branches</h1>
    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis qu</P>
  </section>
  <div class="row">
  <div class="branch-col">
      <img src="images/pexels-ricardo-cristian-11784697.jpg">
      <div class="layer">
        <h3>Stokholm</h3>
      </div> 
      </div>
   <div class="branch-col">
        <img src="images/pexels-matt-hardy-2568091.jpg">
        <div class="layer">
          <h3>Alaska</h3>
        </div>
        </div>
  <div class="branch-col">
    <img src="images/pexels-peter-fazekas-887864.jpg">
    <div class="layer">
      <h3>Georgian</h3>
    </div>
  </div>
</div>
<!----------Testimonials-->
<section class="testimonials">
  <h1>What people say</h1>
  <p>Lorem ipsum dolor, sit amet consectetur 
  </p>
  <div class="row">
<div class="test-col">
  <img src="images/pexels-ogo-1486213.jpg">
  <div>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam magni cum beatae et! Neque reiciendis, sint adipisci repudiandae dolorum explicabo et ad eius natus quidem, debitis, ut possimus illo consectetur.

    </p>
  </div>
</div>
<div class="test-col">
  <img src="images/pexels-shvets-production-7533347.jpg">
  <div>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam magni cum beatae et! Neque reiciendis, sint
      adipisci repudiandae dolorum explicabo et ad eius natus quidem, debitis, ut possimus illo consectetur.

    </p>
  </div>
</div>


  </div>



</section>

  <!----------JavaScript for toggle menu----------->
  <script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){navLinks.style.right ="0";}
    function hideMenu(){navLinks.style.right="-200px"; }
  </script>
  
</body>
</html>