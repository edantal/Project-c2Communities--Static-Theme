<?php include 'includes/header.php'; ?>
<?php include 'includes/top.php'; ?>
<?php include 'includes/navigation.php'; ?>
    
<main>
  <!-- MAIN SECTION -->
  <section class="section__inner-header background--blue">
    <div class="row relative">
        
      <div class="inner-header__text-box">
        <div class="u-margin-bottom-medium">
          <h2 class="heading-tertiary heading--white">
            Contact Us
          </h2>
        </div>
        <p class="paragraph paragraph--small paragraph--white">
          Enter your details and we will get back to you
        </p>

        <div class="contact">
          <form action="#" class="form">
            <div class="form__group form__group--half">
              <input type="text" id="name" class="form__input" placeholder="Full name" name="name" required />
              <label for="name" class="form__label">Full name</label>
            </div>
            <div class="form__group form__group--half">
              <input type="email" id="email" class="form__input" placeholder="Email" name="email" required />
              <label for="email" class="form__label">Email</label>
            </div>
            <div class="form__group">
              <input type="text" id="subject" class="form__input" placeholder="Subject" name="subject" required />
              <label for="subject" class="form__label">Subject</label>
            </div>
            <div class="form__group">
              <textarea id="message" name="message" class="form__textarea" placeholder="Message"></textarea>
              <label for="message" class="form__label">Message</label>
            </div>
            <div class="form__group">
              <button class="btn btn--white btn--color-blue-yellow form__submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
          
      <div class="inner-header__img-box">
        <img src="img/home/contact.png" alt="Contact Us" class="inner-header__img inner-header__img--medium">
      </div>
          
    </div>
  </section>

  <?php include 'includes/templates/map.php'; ?>
  <?php include 'includes/templates/app.php'; ?>

</main>
    
<?php include 'includes/popups.php'; ?>
<?php include 'includes/footer.php'; ?>