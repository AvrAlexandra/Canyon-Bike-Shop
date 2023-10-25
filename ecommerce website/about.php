<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/cross_about.jpg" style="border-radius: 5%;" alt="">
      </div>

      <div class="content">
         <h3>Mountain Bike | Crosscountry</h3>
         <p>Cross-country bicycles, often referred to as XC bikes, are specifically designed for the demanding discipline of cross-country mountain biking. These
                 bikes are known for their lightweight frames and components, which make them well-suited for covering long distances and climbing steep terrain in off-road environments.
                 Cross-country biking is about endurance, technical skills, and speed, and these bikes are tailored to excel in these conditions. Whether you're racing or exploring the wilderness, 
                 XC bikes are the go-to choice for those who want to conquer challenging trails and enjoy the thrill of the great outdoors.</p>

   </div>
   <br>
   <div class="row">

      <div class="image">
         <img src="images/enduro_bike_about.jpg" style="border-radius: 5%;" alt="">
      </div>

      <div class="content">
         <h3>Mountain Bike | Enduro</h3>
         <p>Enduro bikes are specialized mountain bicycles tailored to the demands of enduro mountain biking, a thrilling discipline that combines both downhill and cross-country 
                elements. These bikes feature full suspension systems with extended travel on both front and rear shocks, making them well-suited for absorbing impacts and providing a smooth and controlled 
                ride over rugged, downhill terrain. Their geometry is optimized for stability and control at high speeds, enabling riders to confidently navigate technical descents. Despite their downhill prowess, 
                enduro bikes are designed to handle uphill climbs efficiently, thanks to features like a wide range of gears and adjustable suspension settings.</p>

   </div>
   <br>
   <div class="row">

      <div class="image">
      <img src="images/downhill.jpg" style="border-radius: 5%;" alt="">
      </div>

      <div class="content">
         <h3>Mountain Bike | Downhill</h3>
         <p>Downhill mountain biking is a thrilling extreme sport that involves descending steep, rugged mountain trails on specialized, sturdy bikes. Riders navigate challenging obstacles and gravity-defying drops 
            while maintaining high speeds. It requires exceptional bike-handling skills, strength, and fearlessness. Downhill bikes are purpose-built with heavy-duty suspension systems and protective gear to withstand 
            the harsh terrain and impacts. This sport offers an exhilarating outdoor experience for those seeking an adrenaline rush.</p>
      </div>

   </div>
   <br>
   <div class="row">

      <div class="image">
      <img src="images/dirt_about.jpg" style="border-radius: 5%;" alt="">
      </div>

      <div class="content">
         <h3>Mountain Bike | Dirt Jump</h3>
         <p>Mountain bike dirt jumps are specially constructed features in outdoor biking parks or trails designed for riders to perform aerial tricks and maneuvers. These jumps are typically made from compacted dirt and 
            shaped to create various launch ramps and landings. Mountain bike enthusiasts use these jumps to execute exciting stunts, such as backflips, tailwhips, and tabletops, often achieving impressive heights and
             distances in the process. Dirt jump riding requires a combination of skill, precision, and courage. Riders use specialized dirt jump bikes that are compact, agile, and sturdy, with features like single-speed
              drivetrains and front suspension forks to withstand the impact of landing. </p>
      </div>

   </div>
   <br>
   <div class="row">

      <div class="image">
      <img src="images/cyclo_about.jpg" style="border-radius: 5%;" alt="">
      </div>

      <div class="content">
         <h3>Road Bike | Cyclocross</h3>
         <p>Cyclocross bikes are specially designed for the demanding world of cyclocross racing, a unique
                 discipline that combines elements of road and off-road cycling. These bikes feature a lightweight and durable frame, drop handlebars, and wide tire 
                 clearance. They are equipped with knobby tires for improved traction on various surfaces, including grass, mud, gravel, and pavement.
                 Cyclocross bikes are known for their versatility and ruggedness, making them suitable for a wide range of applications beyond racing. Commuting,
                 touring, and even off-road adventures become more accessible with these bikes due to their stable and agile handling.</p>
      </div>

   </div>
   <br>
   <div class="row">

      <div class="image">
      <img src="images/race_about.jpg" style="border-radius: 5%;" alt="">
      </div>

      <div class="content">
         <h3>Road Bike | Race</h3>
         <p>Road race bicycles, commonly known as road bikes, are designed for competitive road cycling events, such as road races and time trials.
                They are built with a focus on speed, efficiency, and aerodynamics. Road bikes typically feature lightweight frames, drop handlebars for multiple riding
                 positions, and narrow, high-pressure tires that minimize rolling resistance.These bikes are engineered for smooth and efficient pedaling on paved roads, 
                 making them ideal for long-distance rides and racing. Road race bikes also come with a variety of gear options to accommodate different terrains and riding conditions.</p>
      </div>

   </div>
   <br>
    <div class="row">

      <div class="image">
      <img src="images/team_about.jpg" style="border-radius: 5%;" alt="">
      </div>

      <div class="content">
         <h3>Join the team</h3>
         <p>If you want to be part of our team, as an athlete or as a bicycle mechanic, please contact us!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>





<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>