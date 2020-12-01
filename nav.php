<div id="navigation">
    <div id="logo"><img src=images/logo.png width="400px" height="250px"></div>
    <div id="name">Pizzeria Soprano</div>
    <div id="secondary">
        <div id="clock"></div>
    <?php
        if(isset($_SESSION['user']))
        {
            echo '<div id="logout" ><a id="logout-text" href="logout-mechanism.php">Wyloguj się</a></div>';
        }
    ?>
    </div>
    <div style="clear:both;"></div>
    <div id="pasek">
        <a href="index.php" class="wybor">Strona główna</a>
        <a href="my-account.php" class="wybor">Moje konto</a>
        <a href="menu.php" class="wybor">Menu</a>
        <a href="order-pizza.php" class="wybor">Zamów pizze</a>
    </div>
</div>
<div style="clear:both;"></div>
<script src="clock.js"></script>

