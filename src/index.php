<?php include 'includes/header.php'; ?>
<?php include 'includes/top.php'; ?>
<?php include 'includes/navigation.php'; ?>
    
<main>
  <!-- MAIN SECTION -->
  <section class="section-main">
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--1" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--2" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--3" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--4" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--5" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--6" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--7" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--8" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--9" />
    <img src="img/cloud.png" alt="background cloud" class="cloud cloud--10" />

    <div class="row">
      <div class="col-1-of-2">
        <div class="main__text-box">
          <div class="u-left-text u-margin-bottom-medium">
            <h1 class="heading-primary">
              Welcome <span class="heading-primary--sub">home</span>
            </h1>
          </div>

          <p class="paragraph paragraph--white u-margin-bottom-medium">
            C² manages all your renting needs. Pay your bills, find local deals, connect with other tenants, and request repairs, all from one platform.
          </p>

          <a href="#popup-video" id="video-btn" class="btn btn--transparent btn--color-white">
            Watch the video <span class="icon-play"></span>
          </a>
        </div>
      </div>
      <div class="col-1-of-2">
        <div class="main__img-box">
          <img src="img/home/world.png" alt="World" class="main__img" data-aos="fade-left" />
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section class="section-about">
    <div class="row">
      <div class="about__text-box">
        <div class="u-margin-bottom-medium">
          <h2 class="heading-secondary heading--white">
            C² is for you!
          </h2>
        </div>
        <p class="paragraph paragraph--white">
          Whether you’re a renter, owner, or property manager, the C² platform provides tools and connections to make your life easier.
        </p>
      </div>
        
      <div class="about__img-box" data-aos="fade-right">
        <img src="img/home/home-about.png" alt="Image" class="about__img">
      </div>
    </div>
  </section>
      
  <!-- FEATURES SECTION -->
  <section class="section-features">
    <div class="row">
      <div class="col-1-of-3">
        <div class="feature-box">
          <div class="feature-box__img-box feature-box__img-yellow" data-aos="fade-up" data-aos-delay="100">
            <img src="img/home/tenant.png" alt="Tenant" class="feature-box__img">
          </div>
          <div class="u-center-text u-margin-bottom-large relative-elem">
            <span class="title__bg title__bg--yellow"></span>
            <h2 class="heading-tertiary heading--white">Tenant</h2>
          </div>
          <p class="paragraph paragraph--black">
            Get the most out of your rental
          </p>
          <a href="tenant.html" class="btn btn--color-red">Learn More</a>
        </div>
      </div>

      <div class="col-1-of-3">
        <div class="feature-box">
          <div class="feature-box__img-box feature-box__img-blue" data-aos="fade-up" data-aos-delay="300">
            <img src="img/home/manager.png" alt="Manager" class="feature-box__img">
          </div>
          <div class="u-center-text u-margin-bottom-large relative-elem">
            <span class="title__bg title__bg--blue"></span>
            <h2 class="heading-tertiary heading--white">Manager</h2>
          </div>
          <p class="paragraph paragraph--black">
            Manage like the pro you are
          </p>
          <a href="manager.html" class="btn btn--color-red">Learn More</a>
        </div>
      </div>

      <div class="col-1-of-3">
        <div class="feature-box">
          <div class="feature-box__img-box feature-box__img-red" data-aos="fade-up" data-aos-delay="500">
            <img src="img/home/landlord.png" alt="Landlord" class="feature-box__img">
          </div>
          <div class="u-center-text u-margin-bottom-large relative-elem">
            <span class="title__bg title__bg--red"></span>
            <h2 class="heading-tertiary heading--white">Landlord</h2>
          </div>
          <p class="paragraph paragraph--black">
            Turn property into prosperity
          </p>
          <a href="landlord.html" class="btn btn--color-red">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/templates/decor.php'; ?>
  <?php include 'includes/templates/app.php'; ?>

</main>
    
<?php include 'includes/popups.php'; ?>
<?php include 'includes/footer.php'; ?>
    

