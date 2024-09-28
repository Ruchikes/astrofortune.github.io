<?php include"plugin/header.php";
?>

<!-- Header Image Section -->
<section class='about-bg py-4'>
<div class='text-light text-center py-5'>
<h2>Contact Us</h2>

<div class='d-inline-flex text-center'>
<div class='pt-1'><a href='index.php' style='text-decoration:none; color: white'>Home</a></div>
<i class="fa fa-bullseye px-2 fs-2" aria-hidden="true"></i>
<div class='pt-1'>Contact</div>
</div>

</div>
</section>

<!-- Header Image Section Ends -->


<!-- Contact Section -->

<section class='py-5'>
<div class='container'>

<div class='text-center'>
    <h2 class='heading2'>Get In Touch With Us</h2>
    <img src='assets/images/hr-img.png' class='py-2 img-fluid hr-img'/>
    <p class='px-2 text-muted'>Connect with our astrology experts. Reach out for personalized guidance and celestial insights. Let's start your journey!</p>
</div>

<div class='row py-2'>

<div class='col-lg-6 col-12'>


<div class='my-4'>
<i class="me-3 contact-icon fa fa-map-marker" aria-hidden="true"></i>
<p class='d-inline px-1 text-muted'>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
</div>

<div class='my-4'>
<i class="me-3 contact-icon fa fa-phone" aria-hidden="true"></i>
<p class='d-inline px-1'>
<!-- <a class='text-muted' style='text-decoration:none;' href='tel:1234567XXX'>+ 1234567XXX ,</a> -->
<a class='text-muted' style='text-decoration:none;' href='tel:7042745984'>+ 7042745984</a></p>
</div>

<div class='my-4'>
<i class="me-3 contact-icon fa fa-envelope" aria-hidden="true"></i>
<p class='d-inline px-1'>
<!-- <a class='text-muted' style='text-decoration:none;' href='mailto:support@gmail.com'>support@gmail.com ,</a> -->
<a class='text-muted' style='text-decoration:none;' href='mailto:astrofortune4u@gmail.com'>astrofortune4u@gmail.com</a></p>
</div>

<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.083031331051!2d77.36992837451952!3d28.627273475667607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5b78a810a75%3A0xd43c03300365d7bc!2sXTREME%20DIGITAL%20SOLUTIONS%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1704953524249!5m2!1sen!2sin"
    width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

</div>
<!-- Left Section Ends -->


<div class='col-lg-6 col-12 py-2'>

<form class="row g-3 py-2" method="post" action="sendmail.php">

  <div class="col-12">
    <input type="text" style='border: 1px solid var(--card-border); border-radius: 20px;'
    class="form-control py-2 ps-4 my-1" name='name' id="inputText" placeholder="Name">
  </div>

  <div class="col-12">
    <input type="email" style='border: 1px solid var(--card-border); border-radius: 20px;'
    class="form-control py-2 ps-4 my-1" id="inputEmail4" name='email' placeholder="Email Address">
  </div>
  <div class="col-12">
    <input type="tel"  style='border: 1px solid var(--card-border); border-radius: 20px;'
    class="form-control py-2 ps-4 my-1" id="inputNumber" name="phone" placeholder="Phone" required>
  </div>
  <div class="col-12">
    <input type="text" style='border: 1px solid var(--card-border); border-radius: 20px;'
    class="form-control py-2 ps-4 my-1" id="inputText" name='subject' placeholder="Subject">
  </div>
  <div class="col-12">
    <input type="text" style='border: 1px solid var(--card-border); border-radius: 20px; height:9rem;'
    class="form-control ps-4 my-1" id="inputText" name="message" placeholder="Message">
  </div>

  <div class="col-12">
    <button type="submit" name="submit" class="btn about-btn">Send Message</button>
  </div>
</form>

</div>
<!-- Right Section Ends -->

</div>
<!-- Row Ends -->

</div>
</section>

<!-- Contact Section Ends -->


<?php include"plugin/footer.php";
?>
