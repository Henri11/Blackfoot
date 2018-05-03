hp
$id = 1;
$slug = "Accueil";
$title = 'Hight Dev - Accueil';

require ('includes/head.php');
require ('includes/header.php');

?>
    <!-- HEADER -->
    <div class="container">
        <header class=" collection row">
            <div class=" background-header col-sm-12">
                <h1>Nom du magasin + Logo </h1>
                <div class="row">
                    <nav class=" menu col-sm-12">
                        <ul>
                            <li> <a href="#"> Accueil</a> </li>
                            <li> <a href="#"> Femme</a> </li>
                            <li> <a href="#"> Homme</a> </li>
                            <li> <a href="#"> Enfant</a> </li>
                            <li> <a href="#"> A propos</a> </li>
                            <li> <a href="#"> Nous contacter</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- MAIN_HOME -->

        <section class="row">

            <section id="slider" class="col-sm-12">
                <div class="flexslider">
                    <ul class="slides">
                        <li><img src="img/slider/tie-690084.jpg" alt="Retrouvez toute nos idées cadeaux pour les fêtes de noël" /></li>
                        <li><img src="img/1.jpg" alt="Retrouvez toute la collection des thés numéro 25 et notre nouvelle édition limitée" /></li>
                        <li><img src="img/2.jpg" alt="Retrouvez toute la collection des thés numéro 25 et notre nouvelle édition limitée" /></li>
                    </ul>
                </div>

            </section>

            <section class=" collection col-sm-12">
                <hr />
                <div class="row">
                    <aside class=" col-sm-4">
                        <div class="row">
                            <aside class=" shoes_collection col-sm-12">
                            </aside>
                            <aside class="Free_shipping col-sm-12">

                            </aside>
                        </div>

                    </aside>
                    <aside class="men col-sm-4">
                        <!-- <p>New for men</p> -->
                    </aside>
                    <aside class="col-sm-4">
                        <div class="row">
                            <aside class="bag col-sm-12">


                                <!-- <p>your bag</p>-->
                            </aside>
                            <aside class="retour col-sm-12">

                            </aside>
                        </div>
                    </aside>


                </div>
                <hr />
            </section>

            <section class="collection photo col-sm-12">
                <div class="img"> <img src="img/1.jpg" alt=""> </div>
                <div class="img"> <img src="img/2.jpg" alt=""> </div>
                <div class="img"> <img src="img/3.jpg" alt=""> </div>
                <div class="img"> <img src="img/4.jpg" alt=""> </div>
                <div class="img"> <img src="img/5.jpg" alt=""> </div>
                <div class="img"> <img src="img/6.jpg" alt=""> </div>
                <div class="img"> <img src="img/7.jpg" alt=""> </div>
                <div class="img"> <img src="img/8.jpg" alt=""> </div>

            </section>

        </section>




        <?php require ('includes/footer.php'); ?>
