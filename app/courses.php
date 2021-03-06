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
    <section class="courses">
      <div class="container-column container-column-center">
        <h5 class="section-01-cc__title">Enjoy your studying!</h5>
        <p class="section-01-cc__decription">Our online courses</p>
      </div>
      <div class="container"> 
        <nav class="courses-navigation container-flex">
          <ul class="courses-categories container-flex">
            <li>
              <div class="container-border">
                <button class="courses-categories__btn"><span class="courses-categories__description">All</span></button>
              </div>
            </li>
            <li>
              <div class="container-border">
                <button class="courses-categories__btn"><span class="courses-categories__description">Marketing</span></button>
              </div>
            </li>
            <li>
              <div class="container-border">
                <button class="courses-categories__btn"><span class="courses-categories__description">Management</span></button>
              </div>
            </li>
            <li>
              <div class="container-border">
                <button class="courses-categories__btn"><span class="courses-categories__description">HR & Recruting</span></button>
              </div>
            </li>
            <li>
              <div class="container-border">
                <button class="courses-categories__btn"><span class="courses-categories__description">Design</span></button>
              </div>
            </li>
            <li>
              <div class="container-border">
                <button class="courses-categories__btn"><span class="courses-categories__description">Development</span></button>
              </div>
            </li>
          </ul>
          <div class="categories-search">
            <input class="categories-search__input" type="text" placeholder="Search course...">
            <button class="categories-search__btn"><img class="categories-search__img" src="./img/courses/search.svg" alt="button search"></button>
          </div>
        </nav>
        <div class="courses-cards">
          <div class="container-row">
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-01.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__blue-light">Marketing</span>
                <h4 class="content-card__description">The Ultimate Google Ads Training Course</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$100</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Jerome Bell</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-02.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-blue">Management</span>
                <h4 class="content-card__description">Prduct Management Fundamentals</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$480</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Marvin McKinney</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-03.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-orange">HR & Recruting</span>
                <h4 class="content-card__description">HR  Management and Analytics</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$200</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Leslie Alexander Li</span></div>
              </div>
            </div>
          </div>
          <div class="container-row container-row-padding">
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-04.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__blue-light">Marketing</span>
                <h4 class="content-card__description">Brand Management & PR Communications</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$530</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Kristin Watson</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-05.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-red-02">Design</span>
                <h4 class="content-card__description">Graphic Design Basic</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$500</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Guy Hawkins</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-06.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-blue">Management</span>
                <h4 class="content-card__description">Business Development Management</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$400</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Dianne Russell</span></div>
              </div>
            </div>
          </div>
          <div class="container-row container-row-padding">
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-07.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-blue-02">Development</span>
                <h4 class="content-card__description">Highload Software Architecture</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$600</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Brooklyn Simmons</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-08.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-orange">HR & Recruting</span>
                <h4 class="content-card__description">Human Resources ??? Selection and Recruitment</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$150</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Kathryn Murphy</span></div>
              </div>
            </div>
            <div class="card-section-02">
              <div class="image-card"><img class="image-card__img" src="./img/courses/img-09.jpg" alt="person"></div>
              <div class="content-card"><span class="content-card__mark content-card__mark-red-02">Design</span>
                <h4 class="content-card__description">User Experience. Human-centered Design</h4>
                <div class="content-cost content-cost-flex"><span class="content-cost__value">$240</span><span class="content-cost__description">&nbsp;|&nbsp;</span><span class="content-cost__description">by Cody Fisher</span></div>
              </div>
            </div>
          </div>
          <div class="show-button">      
            <button class="show-button__btn"><img class="show-button__img" src="./img/courses/convert.svg" alt="load"><span class="show-button__descriotion">Load more</span></button>
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