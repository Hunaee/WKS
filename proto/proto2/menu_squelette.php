
    <div id="menu_bannieres">
        
        <img src="img/logocorrect.svg" alt="logo" id="logo_img" onclick="window.location.href = 'index.php';" style="cursor:pointer;">
            <a href="index.php" class="menu">Home</a>
            <a href="index.php?page=catalogue" class="menu">Catalogue</a>
            <a href="index.php?page=contact" class="menu">Contact</a>
            <a href="index.php?page=wishlist" class="menu">Wishlist</a>

            <button id="btn_inscription" onclick="window.location.href='inscription.php';">M'inscrire</button>
    </div>
    
    <!-- Mobile -->
    <div id="menu_banniere_mobile">
    <!-- Logo -->
        <h2 id="titre_mobile" onclick="window.location.href='index.php';">Core-ect</h2>
        <img src="img/logocorrect.svg" alt="logo" id="logo_img_mobile" style="cursor:pointer;" >
            <!-- Bloc non affiché  -->
            <div id="bloc_menu">
                <a href="index.php" class="menu">Home</a>
                <a href="index.php?page=catalogue" class="menu">Catalogue</a>
                <a href="index.php?page=contact" class="menu">Contact</a>
                <a href="index.php?page=wishlist" class="menu">Wishlist</a>

                <button id="btn_inscription" onclick="window.location.href='inscription.php';">M'inscrire</button>    
            </div>
    </div>

    <script src="js/menu_squelette.js"></script>
