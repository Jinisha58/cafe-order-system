<?php include('partials-front/menu.php');  ?>

    <!-- foodsearch section starts here -->
    <section class="food-search text-center">
        <div class="container">

          <form action="food-search.php" method="post">
            <input type="search" name="search" placeholder="Search for drinks..">
            <input type="submit" name="submit" value="search" class="btn btn-primary">
          </form>

        </div>
    </section>
    <!-- foodsearch section ends Here -->

    <!-- categories section starts here -->
    <section class="categories">                                                                                                            
        <div class="container">
            <h2 class="text-center">Explore Drinks & Foods</h2>

            <a href="category-drinks.php">
            <div class="box-3 float-container">
                <img src="images/espresso2_half.jpg" alt="Hot Coffee" class="img-responsive img-curve">

                <h3 class="float-text text-white">Coffee</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/iced.jpeg" alt="Iced Coffee" class="img-responsive img-curve">

                <h3 class="float-text text-white">Iced Coffee</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/juice2.jpeg" alt="Fresh Juice" class="img-responsive img-curve">

                <h3 class="float-text text-white">Juice</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- categories section ends Here -->

     <!-- food menu section starts here -->
    <section class="drink-menu">
        <div class="container">
            <h2 class="text-center">Drink Menu</h2>

            <div class="drink-menu-box">
                <div class="drink-menu-img">
                    <img src="images/menu-iced.jpg" alt="iced coffee" class="img-responsive img-curve">
                </div>

                <div class="drink-menu-desc">
                    <h4>Food title</h4>
                    <p class="drink-price">$2.3</p>
                    <p class="drink-detail">made with beans</p>
                <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="drink-menu-box">
                <div class="drink-menu-img">
                    <img src="images/pizza.jpg" alt="Hawaiian pizza" class="img-responsive img-curve">
                </div>

                <div class="drink-menu-desc">
                    <h4>Pizza</h4>
                    <p class="drink-price">$2.3</p>
                    <p class="drink-detail">made with italian sauce, chicken, and organic vegetables.</p>
                <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="drink-menu-box">
                <div class="drink-menu-img">
                    <img src="images/juice.jpg" alt="Juice" class="img-responsive img-curve">
                </div>

                <div class="drink-menu-desc">
                    <h4>Juice</h4>
                    <p class="drink-price">$2.3</p>
                    <p class="drink-detail">made with fresh fruits</p>
                <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="drink-menu-box">
                <div class="drink-menu-img">
                    <img src="images/menu-iced.jpg" alt="iced coffee" class="img-responsive img-curve">
                </div>

                <div class="drink-menu-desc">
                    <h4>iced coffee</h4>
                    <p class="drink-price">$2.3</p>
                    <p class="drink-detail">made with freshly brewed beans </p>
                <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="drink-menu-box">
                <div class="drink-menu-img">
                    <img src="images/momo.jpg" alt="chicken momo" class="img-responsive img-curve">
                </div>

                <div class="drink-menu-desc">
                    <h4>Momo</h4>
                    <p class="drink-price">$2.3</p>
                    <p class="drink-detail">made with vegteables, chicken</p>
                <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="drink-menu-box">
                <div class="drink-menu-img">
                    <img src="images/icedtea.jpg" alt="iced coffee" class="img-responsive img-curve">
                </div>

                <div class="drink-menu-desc">
                    <h4>Iced Tea</h4>
                    <p class="drink-price">$2.3</p>
                    <p class="drink-detail">made with beans</p>
                <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

        </div>

        <p class="text-center">
            <a href="#">See All Drinks</a>
        </p>
    </section>
    <!-- foodm menu section ends Here -->

   <?php include('partials-front/footer.php'); ?>