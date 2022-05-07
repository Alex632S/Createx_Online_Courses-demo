<!DOCTYPE html>
<html lang="en">
  <?php
    include('php/include/head.php');
  ?>
  <body class="page__body">
    <header class="menu-wrap">
      <div class="container">
        <?php
          include('php/include/nav.php');
        ?>
      </div>
    </header>
    <section class="contacts"> 
      <div class="container constructor-flex__sb-c">
        <div class="contacts-content">
          <h1 class="contacts-content__title">Contact info</h1>
          <p class="contacts-content__description">Get in touch</p>
          <div class="address-list">
            <div class="address-list__box address-list__box-margin constructor-flex__s-s"><img class="address-list__img" src="./img/contacts/Chat.svg" alt="chat">
              <div class="address-list__box">
                <h2 class="address-list__title">Talk to us:</h2><a class="address-list__link" href="mailon:hello@createx.com"><span class="address-list__description">hello@createx.com</span></a>
              </div>
            </div>
            <div class="address-list__box address-list__box-margin constructor-flex__s-s"><img class="address-list__img" src="./img/contacts/iPhone.svg" alt="iphone">
              <div class="address-list__box">
                <h2 class="address-list__title">Call us:</h2><a class="address-list__link" href="tel:4055550128"><span class="address-list__description">(405) 555-0128</span></a>
              </div>
            </div>
            <div class="address-list__box address-list__box-margin constructor-flex__s-s"><img class="address-list__img" src="./img/contacts/outline.svg" alt="outline">
              <div class="address-list__box">
                <h2 class="address-list__title">Address:</h2><a class="address-list__link" href="#"><span class="address-list__description">2464 Royal Ln. Mesa, New Jersey 45463, USA</span></a>
              </div>
            </div>
            <div class="contacts-list">
              <h3 class="contacts-list__title">Follow us:  </h3>
              <ul class="contacts-list__links constructor-flex__s-s">
                <li><a class="contacts-list__item" href="#"><img class="contacts-list__img" src="./img/contacts/Facebook.svg" alt="facebook"></a></li>
                <li><a class="contacts-list__item" href="#"><img class="contacts-list__img" src="./img/contacts/Twitter.svg" alt="twitter"></a></li>
                <li><a class="contacts-list__item" href="#"><img class="contacts-list__img" src="./img/contacts/YouTube.svg" alt="youtube"></a></li>
                <li><a class="contacts-list__item" href="#"><img class="contacts-list__img" src="./img/contacts/telegram.svg" alt="telegram"></a></li>
                <li><a class="contacts-list__item" href="#"><img class="contacts-list__img" src="./img/contacts/Instagram.svg" alt="instagram"></a></li>
                <li><a class="contacts-list__item" href="#"><img class="contacts-list__img" src="./img/contacts/Linked-In.svg" alt="linked-in"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="contacts-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.031904045848!2d37.62390127851865!3d55.7410583339011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afe7bc7aad7%3A0x131219b817c8ccfd!2sBurger%20Heroes!5e0!3m2!1sru!2sru!4v1650903478401!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
    <?php
      include('php/include/footer.php');
    ?>
    <script src="js/main.min.js"></script>

  </body>
</html>