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
    <section class="events">
      <div class="container-column container-column-center">
        <h5 class="section-01-cc__title">Our events</h5>
        <p class="section-01-cc__decription">Lectures, workshops & master-classes</p>
      </div>
      <div class="container">
        <ul class="filter">
          <li>
            <div class="cell"><span class="cell__title">Event category</span>
              <div class="target-cell">all themes</div>
            </div>
          </li>
          <li>    
            <div class="cell"><span class="cell__title">Sort by</span>
              <div class="target-cell">newest</div>
            </div>
          </li>
          <li>
            <div class="cell"><span class="cell__title">Show</span>
              <div class="target-cell">9</div>
            </div>
          </li>
          <li>
            <form class="search-events cell">
              <input class="search-events__input" type="text" placeholder="Search event...">
              <button class="search-events__btn container-flex-center-all"><img class="search-events__img" src="./img/courses/search.svg" alt="serach"></button>
            </form>
          </li>
          <li>
            <div class="view-cell cell">
              <button class="view-cell__btn container-flex-center-all"><img class="view-cell__img" src="./img/input/list.svg" alt="list"></button>
              <button class="view-cell__btn container-flex-center-all"><img class="view-cell__img" src="./img/input/grid.svg" alt="grid"></button>
            </div>
          </li>
        </ul>
        <div class="date-cards"> 
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">05</h5>
              <div class="container-column">
                <p class="card-date-head__month">August</p>
                <p class="card-date-head__time">11:00 – 14:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Formation of the organizational structure of the company in the face of uncertainty.</h5>
              <p class="card-date-middle__subtitle">Onine master-class</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more                </span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">24</h5>
              <div class="container-column">
                <p class="card-date-head__month">July</p>
                <p class="card-date-head__time">11:00 – 12:30</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Building a customer service department. Best Practices.</h5>
              <p class="card-date-middle__subtitle">Onine lecture</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more               </span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">16</h5>
              <div class="container-column">
                <p class="card-date-head__month">July</p>
                <p class="card-date-head__time">10:00 – 13:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">How to apply methods of speculative design in practice. Worldbuilding prototyping.</h5>
              <p class="card-date-middle__subtitle">Onine workshop</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more              </span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">10</h5>
              <div class="container-column">
                <p class="card-date-head__month">July</p>
                <p class="card-date-head__time">09:00 – 14:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Find and evaluate: search and assessment tools for candidates.</h5>
              <p class="card-date-middle__subtitle">Onine workshop</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more            </span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">27</h5>
              <div class="container-column">
                <p class="card-date-head__month">July</p>
                <p class="card-date-head__time">15:00 – 19:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Connection to Microsoft Excel and Google Sheets, Data Visualization in Power BI.</h5>
              <p class="card-date-middle__subtitle">Onine master-class</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more        </span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">15</h5>
              <div class="container-column">
                <p class="card-date-head__month">July</p>
                <p class="card-date-head__time">10:00 – 12:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Marketing or growth hacking: main differences and what business needs.</h5>
              <p class="card-date-middle__subtitle">Onine lecture</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more </span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">29</h5>
              <div class="container-column">
                <p class="card-date-head__month">May</p>
                <p class="card-date-head__time">11:00 – 13:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">Who is a project manager and do I want to be PM?</h5>
              <p class="card-date-middle__subtitle">Onine lecture</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more</span></button>
          </div>
          <div class="card-date">
            <div class="card-date-head">
              <h5 class="card-date-head__day">18</h5>
              <div class="container-column">
                <p class="card-date-head__month">May</p>
                <p class="card-date-head__time">10:00 – 12:00</p>
              </div>
            </div>
            <div class="card-date-middle">
              <h5 class="card-date-middle__title">The company's business page as an additional tool to support the announcement of vacancies.</h5>
              <p class="card-date-middle__subtitle">Onine lecture</p>
            </div>
            <button class="button-global-opacity"> <span class="button-global-opacity__title">View more</span></button>
          </div>
        </div>
        <ul class="spectrum container-flex">
          <li> <a class="spectrum__link" href="#"><span class="spectrum__num">1  </span></a></li>
          <li> <a class="spectrum__link" href="#"><span class="spectrum__num">2      </span></a></li>
          <li> <a class="spectrum__link" href="#"><span class="spectrum__num">3      </span></a></li>
          <li> <a class="spectrum__link" href="#"><span class="spectrum__num">4</span></a></li>
          <li> 
            <button class="spectrum__btn container-flex-center-all"><img class="spectrum__img" src="./img/input/right-arrow.svg" alt="arrow"></button>
          </li>
        </ul>
      </div>
    </section>
    <section class="section-bottom">
      <div class="container-column container-column-center">
        <h5 class="section-01-cc__title">Don’t miss anything</h5>
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
  </body>
</html>