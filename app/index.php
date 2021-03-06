<!DOCTYPE html>
<html lang="en">
  <?php
    include('php/include/head.php');
  ?>
  <body class="page__body"> 
    <header class="header"> 
      <div class="container">
        <?php
          include('php/include/nav.php');
        ?>
      </div>
      <div class="box-min">
        <div class="container container-flex header-middle-margin">
          <div class="container-column cc-size">
            <ul class="cc-wrap cc-wrap-flex">
              <li>
                <button class="header-btn"> <img class="header-btn__img" src="./img/button/play.svg" alt="button play"></button>
              </li>
              <li><span class="header-btn__description">Play showreel</span></li>
            </ul>
            <div class="cc-wrap">
              <h1 class="header-title">Enjoy studying with Createx Online Courses</h1>
            </div>
            <ul class="cc-wrap cc-wrap-flex">
              <li> 
                <button class="button-global-opacity"> <span class="button-global-opacity__title">About us</span></button>
              </li>
              <li> 
                <button class="button-global" onclick="document.location='courses.php'"> <span class="button-global__title">Explore courses</span></button>
              </li>
            </ul>
          </div>
          <div class="container-image ci-size"><img class="container-image__img" src="./img/header/illustration.svg" alt="banner"></div>
        </div>
      </div>
      <div class="container">
        <ul class="header-bottom header-row">
          <li>
            <h2 class="header-row__title">1200 <span class="header-row__description">Students graduated</span></h2>
          </li>
          <li>     
            <div class="dot-red"> </div>
          </li>
          <li>
            <h2 class="header-row__title">84 <span class="header-row__description">Completed courses</span></h2>
          </li>
          <li>     
            <div class="dot-red"> </div>
          </li>
          <li>
            <h2 class="header-row__title">16 <span class="header-row__description">Qualified tutors</span></h2>
          </li>
          <li>     
            <div class="dot-red"> </div>
          </li>
          <li>
            <h2 class="header-row__title">5 <span class="header-row__description">Years of experience</span></h2>
          </li>
        </ul>
      </div>
    </header>
    <section class="section-01"> 
      <div class="container container-flex container-flex-start"> 
        <div class="banner"> <img class="banner__img" src="./img/section-01/image.jpg" alt="banner"></div>
        <div class="container-column">
          <ul class="section-01-cc cc-wrap cc-wrap-flex">
            <li>
              <h2 class="section-01-cc__title">Who we are </h2>
            </li>
            <li>
              <p class="section-01-cc__decription">Why Createx?</p>
            </li>
            <li>
              <div class="footer-top-column__link"><span class="section-01-cc-inner"><img class="section-01-cc__img" src="./img/section-01/check.svg" alt="bullet"></span>
                <p class="section-01-cc__text">A fermentum in morbi pretium aliquam adipiscing donec tempus.</p>
              </div>
            </li>
            <li>
              <div class="footer-top-column__link"><span class="section-01-cc-inner"><img class="section-01-cc__img" src="./img/section-01/check.svg" alt="bullet"></span>
                <p class="section-01-cc__text">Vulputate placerat amet pulvinar lorem nisl.</p>
              </div>
            </li>
            <li>
              <div class="footer-top-column__link"><span class="section-01-cc-inner"><img class="section-01-cc__img" src="./img/section-01/check.svg" alt="bullet"></span>
                <p class="section-01-cc__text">Consequat feugiat habitant gravida quisque elit bibendum id adipiscing sed.</p>
              </div>
            </li>
            <li>
              <div class="footer-top-column__link"><span class="section-01-cc-inner"><img class="section-01-cc__img" src="./img/section-01/check.svg" alt="bullet"></span>
                <p class="section-01-cc__text">Etiam duis lobortis in fames ultrices commodo nibh.</p>
              </div>
            </li>
            <li>
              <div class="footer-top-column__link"><span class="section-01-cc-inner"><img class="section-01-cc__img" src="./img/section-01/check.svg" alt="bullet"></span>
                <p class="section-01-cc__text">Tincidunt sagittis neque sem ac eget.</p>
              </div>
            </li>
            <li>
              <div class="footer-top-column__link"><span class="section-01-cc-inner"><img class="section-01-cc__img" src="./img/section-01/check.svg" alt="bullet"></span>
                <p class="section-01-cc__text">Ultricies amet justo et eget quisque purus vulputate dapibus tortor.</p>
              </div>
            </li>
            <li>
              <button class="button-global button-global-margin"><span class="button-global__title">More about us</span></button>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section-02">
      <div class="container">
        <div class="container-column">
          <div class="section-02-header footer-top-column__link">
            <div class="section-header-inner container-column">
              <h3 class="section-01-cc__title">Ready to learn?</h3>
              <p class="section-01-cc__decription">Featured Courses</p>
            </div>
            <button class="button-global-opacity" onclick="document.location='courses.php'"><span class="button-global-opacity__title">View all courses</span></button>
          </div>
          <div class="container-row container-row-padding">
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/card/image-01.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__blue-light">Marketing</span>
                <h4 class="content-card__description">The Ultimate Google Ads Training Course</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$100</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Jerome Bell</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/card/image-02.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-blue">Management</span>
                <h4 class="content-card__description">Prduct Management Fundamentals</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$480</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Marvin McKinney</span></div>
              </div>
            </div>
          </div>
          <div class="container-row">
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/card/image-03.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-orange">HR & Recruting</span>
                <h4 class="content-card__description">HR  Management and Analytics</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$200</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Leslie Alexander Li</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/card/image-04.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__blue-light">Marketing</span>
                <h4 class="content-card__description">Brand Management & PR Communications</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$530</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Kristin Watson</span></div>
              </div>
            </div>
          </div>
          <div class="container-row">
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/card/image-05.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-blue">Management</span>
                <h4 class="content-card__description">Business Development Management</h4>
                <div class="content-cost content-cost-flex">
                  <span class="content-cost__value">$400</span>
                  <span class="content-cost__description">&nbsp;|&nbsp;</span>
                  <span class="content-cost__description">by Dianne Russell</span>
                </div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/card/image-06.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-red-02">Design</span>
                <h4 class="content-card__description">Graphic Design Basic</h4>
                <div class="content-cost content-cost-flex"> 
                  <span class="content-cost__value">$500</span>
                  <span class="content-cost__description">&nbsp;|&nbsp;</span>
                  <span class="content-cost__description">by Guy Hawkins</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-03"> 
      <div class="container"> 
        <div class="container-column container-column-center">
          <div class="section-header-inner container-column">
            <h3 class="section-01-cc__title">Our benefits</h3>
            <p class="section-01-cc__decription">That???s how we do it</p>
          </div>
          <ul class="list-categorys">
            <li>
              <button class="list-categorys__btn list-categorys__btn-active"><span class="list-categorys__description list-categorys__star">Experienced Tutors</span></button>
            </li>
            <li>
              <button class="list-categorys__btn"> <span class="list-categorys__description list-categorys__support">Feedback & Support</span></button>
            </li>
            <li>
              <button class="list-categorys__btn"> <span class="list-categorys__description list-categorys__library"> 24/7 Online Library</span></button>
            </li>
            <li>
              <button class="list-categorys__btn"> 
                <span class="list-categorys__description list-categorys__community">Community</span>
              </button>
            </li>
          </ul>
          <div class="section-03-bottom container-flex">
            <div class="container-description container-column">
              <h4 class="container-description__title">Only practicing tutors</h4>
              <p class="container-description__text">Urna nisi, arcu cras nunc. Aenean quam est lobortis mi non fames dictum suspendisse. Morbi mauris cras massa ut dolor quis sociis mollis augue. Nunc, sodales tortor sit diam mi amet massa. Fermentum diam diam sociis vestibulum. Nulla nisl accumsan, id dignissim massa ut amet. Amet enim, nisi tempus vehicula.</p>
            </div>
            <div class="container-image"> 
              <img class="container-image__img" src="./img/section-03/learn.svg" alt="people learn">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-04">
      <div class="container-column container-column-center">
        <h5 class="section-01-cc__title">Our Events</h5>
        <p class="section-01-cc__decription">Lectures & workshops</p>
      </div>
      <div class="container">
        <div class="container-column">
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">05</h5>
              <div class="container-column">
                <p class="card-date-head__month">August</p>
                <p class="card-date-head__time">11:00 ??? 14:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Formation of the organizational structure of the company in the face of uncertainty.</h5>
              <p class="card-date-middle__subtitle">Onine master-class</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more</span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">24</h5>
              <div class="container-column">
                <p class="card-date-head__month">July</p>
                <p class="card-date-head__time">11:00 ??? 12:30</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Building a customer service department. Best Practices.</h5>
              <p class="card-date-middle__subtitle">Onine lecture</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more</span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">16</h5>
              <div class="container-column">
                <p class="card-date-head__month">July</p>
                <p class="card-date-head__time">10:00 ??? 13:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">How to apply methods of speculative design in practice. Worldbuilding prototyping.</h5>
              <p class="card-date-middle__subtitle">Onine workshop</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more</span></button>
          </div>
          <ul class="section-04-row">
            <li> 
              <h5 class="section-04-row__title">Do you want more?</h5>
            </li>
            <li> 
              <button class="button-global" onclick="document.location='events.php'"> <span class="button-global__title">Explore all events</span></button>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section-05"> 
      <div class="container container-flex">
        <div class="container-column">
          <h5 class="section-01-cc__title">Createx Certificate</h5>
          <p class="section-01-cc__decription">Your expertise will be confirmed</p>
          <p class="section-05__description">We are accredited by international professional organizations and institutes:</p>
          <div class="container-flex container-flex-padding"><img class="section-05__img" src="./img/section-05/img-01.png" alt="mark"><img class="section-05__img" src="./img/section-05/img-02.png" alt="mark"><img class="section-05__img" src="./img/section-05/img-03.png" alt="mark"></div>
        </div>
        <div class="section-05-image"> <img class="section-05-image__img" src="./img/section-05/img-m.jpg" alt="certificate"></div>
      </div>
    </section>
    <section class="slider">
      <div class="container"> 
        <div class="slider-row"> 
          <div class="container-column">
            <h5 class="section-01-cc__title">Best tutors are all here</h5>
            <p class="section-01-cc__decription">Meet our team</p>
          </div>
          <div class="slider-arrows slider-row">
            <button class="slider-arrows__btn"><img class="slider-arrows__img" src="./img/slider/arrow.svg" alt="arrow-prew"></button>
            <button class="slider-arrows__btn"><img class="slider-arrows__img" src="./img/slider/arrow.svg" alt="arrow-next"></button>
          </div>
        </div>
        <div class="slider-content"> 
          <div class="slider-item">
            <div class="slider-item-image"> <img class="slider-item-image__img" src="./img/slider/image-01.png" alt="person"></div>
            <div class="slider-description"> 
              <h5 class="slider-description__title">Dianne Russell </h5>
              <p class="slider-description__subtitle">Founder and CEO    </p>
            </div>
          </div>
          <div class="slider-item">
            <div class="slider-item-image"> <img class="slider-item-image__img" src="./img/slider/image-02.png" alt="person"></div>
            <div class="slider-description"> 
              <h5 class="slider-description__title">Jerome Bell </h5>
              <p class="slider-description__subtitle">Founder and Program Director    </p>
            </div>
          </div>
          <div class="slider-item">
            <div class="slider-item-image"> <img class="slider-item-image__img" src="./img/slider/image-03.png" alt="person"></div>
            <div class="slider-description"> 
              <h5 class="slider-description__title">Kristin Watson </h5>
              <p class="slider-description__subtitle">Marketer, Curator of Marketing Course    </p>
            </div>
          </div>
          <div class="slider-item">
            <div class="slider-item-image"> <img class="slider-item-image__img" src="./img/slider/image-04.png" alt="person"></div>
            <div class="slider-description"> 
              <h5 class="slider-description__title">Marvin McKinney</h5>
              <p class="slider-description__subtitle">PM, Curator of Management Course  </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slider-single"> 
      <div class="container-column container-column-center">
        <h5 class="section-01-cc__title">TESTIMONIALS</h5>
        <p class="section-01-cc__decription">What our students say</p>
      </div>
      <div class="container container-flex">
        <div class="slider-single-arrow">
          <button class="slider-single-arrow__btn"><img class="slider-single-arrow__img" src="./img/slider/arrow.svg" alt="arrow-prew"></button>
        </div>
        <div class="testimonial-wrap">
          <div class="testimonial container-flex">
            <div class="testimonial-header"><img class="testimonial-header__img" src="./img/slider-single/braces.svg" alt="bracets"></div>
            <div class="testimonial-bottom container-column">   
              <div class="testimonial-bottom-header">
                <p class="testimonial-bottom-header__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, amet lectus quam viverra mus lobortis fermentum amet, eu. Pulvinar eu sed purus facilisi. Vitae id turpis tempus ornare turpis quis non. Congue tortor in euismod vulputate etiam eros. Pulvinar neque pharetra arcu diam maecenas diam integer in.</p>
              </div>
              <div class="testimonial-bottom-bottom container-flex"><img class="testimonial-bottom-bottom__img" src="./img/slider-single/image.png" alt="person">
                <div class="container-column">
                  <h5 class="testimonial-bottom-bottom__title">Eleanor Pena</h5>
                  <p class="testimonial-bottom-bottom__description">Position, Course</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-single-arrow slider-single-arrow-transform">
          <button class="slider-single-arrow__btn"><img class="slider-single-arrow__img" src="./img/slider/arrow.svg" alt="arrow-next"></button>
        </div>
      </div>
      <div class="slider-dots container-flex">
        <div class="slider-dots__item"></div>
        <div class="slider-dots__item"></div>
        <div class="slider-dots__item"></div>
        <div class="slider-dots__item"></div>
        <div class="slider-dots__item"></div>
      </div>
    </section>
    <section class="blog">
      <div class="container">
        <div class="section-02-header footer-top-column__link">
          <div class="section-header-inner container-column">
            <h3 class="section-01-cc__title">Our blog</h3>
            <p class="section-01-cc__decription">Latest posts</p>
          </div>
          <button class="button-global" onclick="document.location='blog.php'"><span class="button-global__title">Go to blog</span></button>
        </div>
        <div class="heading-container container-flex">
          <div class="heading heading-01">
            <div class="heading-header">
              <button class="heading-header__btn"><span class="heading-header__description">Podcast</span></button>
            </div>
            <ul class="heading-middle container-flex">
              <li><span class="heading-middle__title">Marketing</span></li>
              <li><span class="heading-middle__line">|</span></li>
              <li><span class="heading-middle__description">September 4, 2020</span></li>
              <li><span class="heading-middle__line">|</span></li>
              <li><span class="heading-middle__time">36 min</span></li>
            </ul>
            <div class="heading-footer">
              <h5 class="heading-footer__title">What is traffic arbitrage and does it really make money?</h5>
              <p class="heading-footer__text">Pharetra, ullamcorper iaculis viverra parturient sed id sed. Convallis proin dignissim lacus, purus gravida...</p>
              <div class="container-flex">
                <div class="heading-footer__description">Listen</div>
                <button class="heading-footer__btn"><img class="heading-footer__img" src="./img/blog/right.svg" alt="arrow"></button>
              </div>
            </div>
          </div>
          <div class="heading heading-02">
            <div class="heading-header">
              <button class="heading-header__btn"><span class="heading-header__description">Video</span></button>
            </div>
            <ul class="heading-middle container-flex">
              <li><span class="heading-middle__title">Management</span></li>
              <li><span class="heading-middle__line">|</span></li>
              <li><span class="heading-middle__description">August 25, 2020</span></li>
              <li><span class="heading-middle__line">|</span></li>
              <li><span class="heading-middle__time">45 min</span></li>
            </ul>
            <div class="heading-footer">
              <h5 class="heading-footer__title">What to do and who to talk to if you want to get feedback on the product</h5>
              <p class="heading-footer__text">Neque a, senectus consectetur odio in aliquet nec eu. Ultricies ac nibh urna urna sagittis faucibus...</p>
              <div class="container-flex">
                <div class="heading-footer__description">Watch</div>
                <button class="heading-footer__btn"><img class="heading-footer__img" src="./img/blog/right.svg" alt="arrow"></button>
              </div>
            </div>
          </div>
          <div class="heading heading-03">
            <div class="heading-header">
              <button class="heading-header__btn"><span class="heading-header__description">Article</span></button>
            </div>
            <ul class="heading-middle container-flex">
              <li><span class="heading-middle__title">Design</span></li>
              <li><span class="heading-middle__line">|</span></li>
              <li><span class="heading-middle__description">August 8, 2020</span></li>
            </ul>
            <div class="heading-footer">
              <h5 class="heading-footer__title">Should you choose a creative profession if you are attracted to creativity?</h5>
              <p class="heading-footer__text">Curabitur nisl tincidunt eros venenatis vestibulum ac placerat. Tortor, viverra sed vulputate ultrices...</p>
              <div class="container-flex">
                <div class="heading-footer__description">Read</div>
                <button class="heading-footer__btn"><img class="heading-footer__img" src="./img/blog/right.svg" alt="arrow"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-bottom">
      <div class="container-column container-column-center">
        <h5 class="section-01-cc__title">Don???t miss anything</h5>
        <p class="section-01-cc__decription">Subscribe to the Createx School announcements</p>
      </div>
      <form class="container-form"> 
        <input class="container-form__input" type="text" placeholder="Your working email">
        <button class="button-global"><span class="button-global__title">Subscribe</span></button>
      </form>
    </section>
    <?php
      include('php/include/footer.php');
    ?>
    <script src="js/main.min.js"></script>
  </body>
</html>