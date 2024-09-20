<?php include('partials-front/menu.php');  ?>

    <!-- foodsearch section starts here -->
    <section class="food-search">
        <div class="container">

            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

          <form action="#" class="order">
            <fieldset>
                <legend>Selected Drink</legend>

                <div class="drink-menu-img">
                    <img src="images/menu-iced.jpg" alt="iced coffee" class="img-responsive img-curve">
                </div>

                <div class="drink-menu-desc">
                    <h3>Food Title</h3>
                    <p class="drink-price">$2.3</p>

                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                </div>

            </fieldset>

            </form>

        </div>
    </section>
    <!-- foodsearch section ends Here -->

    
    <?php include('partials-front/footer.php');  ?>