<!DOCTYPE html>
    <html>
    <head>
    <link href="http://fonts.cdnfonts.com/css/neoneon" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
 </head>

    <body class="storepagecss">
   


    <?php 
                //TO ADD IF SIGNED IN OR NOT
                // USER MUST NOT ENTER THE SHOP IF NOT SIGNED IN AKA A SESSION IN PLACE !!!!!
    //if (!isset($_SESSION)) { header ('location : welcomepage.php'); }
                        // if ( session_status() === PHP_SESSION_NONE || $_SESSION['logged'] == false )
    //font-family: 'IBM Plex Mono',sans-serif;
    ?>

  <?php include 'upbar.php'; ?>
 <br><br>

<div style=" width:70%; margin:auto;">
     <h1 align=center style="color:white; font-family: Neoneon,sans-serif; font-size: 60px; line-height: 1.3em; font-weight: 400;">
         Welcome to JEWXRLY store
    </h1>
</div>


<div> <!-- TOP SELLERS BIG PICTURES -->
</div>

<!-- Categories : NECKLACE/ RINGS/ BRACELETS/ MEN / WOMEN / COUPLES
        With an explore more on hover showing more of this category (simple sql)-->





<div>
&nbsp;&nbsp;&nbsp; <span class="txt123" style="color:white; font-size:18px;"> Men rings &nbsp;&nbsp;</span>
<span class="expmore" style="color:cyan;"> </span>
</div>

<div class="itemsscroll1" style="color:white; display:flex;">
  <div style="margin:10px;">
      <div>
        //img
      </div>
      <div>
        abcefd
      </div>
  </div>
  <div style="margin:10px;">
      hijklm
  </div>
  <div style="margin:10px;">
      nopqrs
  </div>

</div>
<!-- THIS IS A SCROLL TEST !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
&nbsp;&nbsp;&nbsp;&nbsp;
<div class="container">
  <button type="button" id="moveLeft" class="btn-nav">
  </button>
  <div class="container-indicators">
    <div class="indicator active" data-index=0></div>
    <div class="indicator" data-index=1></div>
    <div class="indicator" data-index=2></div>
  </div>
  <div class="slider" id="mySlider">
    <div class="movie" id="movie0">
      <img src="imgs/movie1.jpg" alt="" srcset=""/>
      <div class="description">
         <!-- BUTTONS TO ADD : Like / Add to Cart  / View more info-->
        <div class="description__buttons-container">
          <div class="description__button"><i class="fas fa-play"></i></div>
          <div class="description__button"><i class="fas fa-plus"></i></div>
          <div class="description__button"><i class="fas fa-thumbs-up"></i></div>
          <div class="description__button"><i class="fas fa-thumbs-down"></i></div>
          <div class="description__button"><i class="fas fa-chevron-down"></i></div>
        </div>
         <!-- Price and Rating !!!-->
        <div class="description__text-container">
        <!--  <span class="description__match">97% Match</span> -->
          <span class="description__rating">5.4/10</span>
          <span class="description__length">Price : 12$</span>
          <br><br>
          <span>Explosive</span>
          <span>&middot;</span>
          <span>Exciting</span>
          <span>&middot;</span>
          <span>Family</span>
        </div>
      </div>
    </div>
  </div>
  <button type="button" id="moveRight" class="btn-nav">
    ᐅ
  </button>
</div>

















<!-- THIS IS A SCROLL TEST !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
hi
<script>
//THIS IS A SCROLL TEST 

const slider = document.querySelector(".slider");
const btnLeft = document.getElementById("moveLeft");
const btnRight = document.getElementById("moveRight");
const indicators = document.querySelectorAll(".indicator");
let baseSliderWidth = slider.offsetWidth;
let activeIndex = 0; // the current page on the slider
let movies = [
  {
    src: "imgs/movie1.jpg",
  },
  {
    src: "imgs/movie2.jpg",
  },
  {
    src: "imgs/movie3.jpg",
  },
  {
    src :"imgs/testmm1.jfif",
  },
  {
    src :"imgs/testmm2.jfif",
  },
  // ...
];
// Fill the slider with all the movies in the "movies" array
function populateSlider() {
  movies.forEach((image) => {
    // Clone the initial movie thats included in the html, then replace the image with a different one
    const newMovie = document.getElementById("movie0");
    let clone = newMovie.cloneNode(true);
    let img = clone.querySelector("img");
    img.src = image.src;
    slider.insertBefore(clone, slider.childNodes[slider.childNodes.length - 1]);
  });
}
populateSlider();
populateSlider();
// delete the initial movie in the html
const initialMovie = document.getElementById("movie0");
initialMovie.remove();
// Update the indicators that show which page we're currently on
function updateIndicators(index) {
  indicators.forEach((indicator) => {
    indicator.classList.remove("active");
  });
  let newActiveIndicator = indicators[index];
  newActiveIndicator.classList.add("active");
}
// Scroll Left button
btnLeft.addEventListener("click", (e) => {
  let movieWidth = document.querySelector(".movie").getBoundingClientRect()
    .width;
  let scrollDistance = movieWidth * 6; // Scroll the length of 6 movies. TODO: make work for mobile because (4 movies/page instead of 6)
  slider.scrollBy({
    top: 0,
    left: -scrollDistance,
    behavior: "smooth",
  });
  activeIndex = (activeIndex - 1) % 3;
  console.log(activeIndex);
  updateIndicators(activeIndex);
});
// Scroll Right button
btnRight.addEventListener("click", (e) => {
  let movieWidth = document.querySelector(".movie").getBoundingClientRect()
    .width;
  let scrollDistance = movieWidth * 6; // Scroll the length of 6 movies. TODO: make work for mobile because (4 movies/page instead of 6)
  console.log(`movieWidth = ${movieWidth}`);
  console.log(`scrolling right ${scrollDistance}`);
  // if we're on the last page
  if (activeIndex == 2) {
    // duplicate all the items in the slider (this is how we make 'looping' slider)
    populateSlider();
    slider.scrollBy({
      top: 0,
      left: +scrollDistance,
      behavior: "smooth",
    });
    activeIndex = 0;
    updateIndicators(activeIndex);
  } else {
    slider.scrollBy({
      top: 0,
      left: +scrollDistance,
      behavior: "smooth",
    });
    activeIndex = (activeIndex + 1) % 3;
    console.log(activeIndex);
    updateIndicators(activeIndex);
  }
});







//END OF SCROLL TEST 







$(document).ready(function(){
  $(".txt123").mouseenter(function(){
    $(".txt123").animate({'font-size':'25px'},"slow");
    
    $(".expmore").html("Explore more >");
  });
  $(".txt123").mouseleave(function(){
    $(".txt123").animate({'font-size':'18px'},"slow");
  
    $(".expmore").html(" >");
  });

});

</script>

    </body>
    </html>