<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Catering Management System</title>
  <script src="https://use.fontawesome.com/7488f3a572.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><link rel="stylesheet" href="./style1.css">

 
  <style type="text/css">
    body{ background: url();
      no-repeat center center fixed;
  background-size: cover;
  font-family: sans-serif; }
  </style>
</head>
<body>




<input type="checkbox" id="cartToggle" name="toggle" />

    <!-- Menu -->
    <nav class="navbar">
      <h2 id="logo">Catering company 1</h2>
      <div>
        <label for="cartToggle" class="toggleCart btnStyle btnStyle2"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <i class="fa fa-circle" aria-hidden="true"></i>
        <span class="num"></span>
</label>
      </div>
    </nav><!-- End of Navigation -->

    <div class="body-content">

    <!-- Cart -->
    <nav class="cart">
      <h3>List of orders: <span>0$</span></h3>
      <ol id="listOfOrders">
      </ol>
      <a class="btnStyle btnStyle3 finishOrder">Finish Order</a>
    </nav>

      <div class="recipe-menu">

        <!-- Recipe 1 -->
        <div class="recipe">
          <p class="name">Hamburger</p>
          <img src="https://www.kingsford.com/wp-content/uploads/2014/11/kfd-howtohamburger-Burgers_5_0391-1024x621.jpg">
          <a class="btnStyle3 btnStyle addToCart" id="addToCartHamburger">Add to Cart</a>
          <p class="price"><span>15</span>$</p>
          <div id="checkOrderHamburger" title="Hamburger">
            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe1">
              <li><input type="checkbox" checked>Sesame Bun</li>
              <li><input type="checkbox" checked>Ground Beef Patty</li>
              <li><input type="checkbox" checked>Onion</li>
              <li><input type="checkbox" checked>Pickle</li>
              <li><input type="checkbox" checked>Lettuce Salad</li>
            </ul>
            <a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>
            <a class="btnStyle listOver">Done</a>
            <h4 class="totalDialog" id="totalDialog1">Total: <span>15</span>$</h4>
          </div>
        </div>

        <!-- Recipe 2 -->
        <div class="recipe">
          <p class="name">Macaroni</p>
          <img src="https://www.planetveggie.co.uk/wp-content/uploads/2014/08/spinach-pesto-mozzarella-pasta.jpg">
          <a class="btnStyle3 btnStyle addToCart" id="addToCartMacaroni">Add to Cart</a>
          <p class="price"><span>15</span>$</p>
          <div id="checkOrderMacaroni" title="Macaroni">
            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe2">
              <li><input type="checkbox" checked>Macaroni</li>
              <li><input type="checkbox" checked>Paprica</li>
              <li><input type="checkbox" checked>Tomato</li>
              <li><input type="checkbox" checked>Chease</li>
              <li><input type="checkbox" checked>Zucchini</li>
            </ul>
            <a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>
            <a class="btnStyle listOver">Done</a>
            <h4 class="totalDialog" id="totalDialog2">Total: <span>15</span>$</h4>
          </div>
        </div>

        <!-- Recipe 3 -->
        <div class="recipe">
          <p class="name">Pizza</p>
          <img src="https://i.kinja-img.com/gawker-media/image/upload/wafswectpmbr0zmug9ly.jpg">
          <a class="btnStyle3 btnStyle addToCart" id="addToCartPizza">Add to Cart</a>
          <p class="price"><span>18</span>$</p>
          <div id="checkOrderPizza" title="Pizza">
            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe3">
              <li><input type="checkbox" checked>Tomato Sauce</li>
              <li><input type="checkbox" checked>Cheese</li>
              <li><input type="checkbox" checked>Peperoni</li>
              <li><input type="checkbox" checked>Olives</li>
              <li><input type="checkbox" checked>Mushrooms</li>
              <li><input type="checkbox" checked>Basil</li>
            </ul>
            <a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>
            <a class="btnStyle listOver">Done</a>
            <h4 class="totalDialog" id="totalDialog3">Total: <span>15</span>$</h4>
          </div>
        </div>

        <!-- Recipe 4 -->
        <div class="recipe">
          <p class="name">Salad</p>
          <img src="http://tarasmulticulturaltable.com/wp-content/uploads/2015/03/Shopska-2-of-3-1024x680.jpg">
          <a class="btnStyle3 btnStyle addToCart" id="addToCartSalad">Add to Cart</a>
          <p class="price"><span>9</span>$</p>
          <div id="checkOrderSalad" title="Salad">
            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe4">
              <li><input type="checkbox" checked>Tomato</li>
              <li><input type="checkbox" checked>Cucumber</li>
              <li><input type="checkbox" checked>Cheese</li>
            </ul>
            <a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>
            <a class="btnStyle listOver">Done</a>
            <h4 class="totalDialog" id="totalDialog4">Total: <span>9</span>$</h4>
          </div>
        </div>

        <!-- Recipe 5 -->
        <div class="recipe">
          <p class="name">Spaghetti</p>
          <img src="https://cdn.instructables.com/FY0/BMNB/IB226AMH/FY0BMNBIB226AMH.MEDIUM.jpg">
          <a class="btnStyle3 btnStyle addToCart" id="addToCartSpaghetti">Add to Cart</a>
          <p class="price"><span>12</span>$</p>
          <div id="checkOrderSpaghetti" title="Spaghetti">
            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe5">
              <li><input type="checkbox" checked>Spaghetti</li>
              <li><input type="checkbox" checked>Tomato Sauce</li>
              <li><input type="checkbox" checked>Ground Beef</li>
              <li><input type="checkbox" checked>Onion</li>
            </ul>
            <a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>
            <a class="btnStyle listOver">Done</a>
            <h4 class="totalDialog" id="totalDialog5">Total: <span>12</span>$</h4>
          </div>
        </div>

        <!-- Recipe 6 -->
        
        <div class="recipe">
          <p class="name">Risotto</p>
          <img src="http://assets.simplyrecipes.com/wp-content/uploads/2011/04/17174801/mushroom-risotto-horiz-a-1800.jpg">
          <a class="btnStyle3 btnStyle addToCart" id="addToCartRisotto">Add to Cart</a>
          <p class="price"><span>9</span>$</p>
          <div id="checkOrderRisotto" title="Risotto">
            <h3 class="listHeading">List of Ingredients:</h3>
            <ul class="listOfIngredients" id="recipe6">
              <li><input type="checkbox" checked>Risotto Rice</li>
              <li><input type="checkbox" checked>Chicken Stock</li>
              <li><input type="checkbox" checked>Onion</li>
            </ul>
            <a class="btnStyle3 btnStyle addIngredient">Add Ingredient</a>
            <a class="btnStyle listOver">Done</a>
            <h4 class="totalDialog" id="totalDialog6">Total: <span>9</span>$</h4>
          </div>
        </div>

      </div>
    </div>

    <div id="finishOrderDialog" title="Confirm Order">
      <div id="finalOrderList">
        <h3>Your Orders:</h3>
        <ol></ol>
      </div>
      <div id="buyerInfo">
        <form  action="storcat.php" method="POST">
        <input type="text" id="buyerName" name="username" placeholder="Enter Name">
        <input type="text" id="buyerNumber" name="cell_no" placeholder="Enter Phone Number">
        <input type="text" id="buyerAddress" name="address" placeholder="Enter Address">
        <input type="text" id="buyerAddress" name="amount" placeholder="Enter the amount pop up in right side">
        <input type="submit" class="button" value="Confirm">
      </form>
        <!-- <a class="btnStyle order">Order!</ a>-->
      </div>
    </div>

    <div id="thanksMessage">
      <h1>Thank you for the order</h1>
      <h3>We will have it delivered soon</h3>
    </div>
<!-- partial -->
  <script  src="./script1.js"></script>

</body>
</html>
