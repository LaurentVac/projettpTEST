<?php
    $background = 'bgDs';
    include('views/templates/header.php');
?>
    <!--fin header-->
    <!--début main-->
    <main class="container ">
        <div class="row">
            <img src="assets/img/death-stranding-og.png" class="col-12 p-0" alt="image death stranding">
            <div class="row col-12 justify-content-center m-auto">

            <!-- Vidéo youtube -->
            <iframe width="560" height="315"class="col-md-6 mt-3" src="https://www.youtube.com/embed/YyH4KQGehtg" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
            <!-- carousel -->
                <div id="carouselExampleFade" class="carousel slide carousel-fade col-md-5  m-auto"
                    data-ride="carousel">
                    <div class="carousel-inner mt-3 mt-md-0">
                        <div class="carousel-item active">
                            <img src="assets/img/death-stranding-car1.png" class="d-block w-100" alt="tlou2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/death-stranding-car2.png" class="d-block w-100" alt="tlou2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/death-stranding-car3.png" class="d-block w-100" alt="tlou2">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class=" col-6 justify-content-center m-auto  ">
                <div class="description p-2 mt-4 ">
                    <!-- info du jeu -->
                    <h5 class="text-center">Informations</h5>
                    <p><strong class="text-danger">Titre :</strong> Death stranding</p>
                    <p><strong class="text-danger">Studio :</strong> Sony</p>
                    <p><strong class="text-danger">Date de sortie :</strong> 20/11/2018</p>
                    <p><strong class="text-danger">Plateforme disponible :</strong> PS4, PC</p>

                </div>
            </div>
            <div class=" col-12 justify-content-center m-auto  ">
                <div class="description p-2 mt-4 ">
                    <!-- descriptif test -->
                    <h5>Test effectué sur PS4 PRO</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quo atque repellendus, quaerat
                        aspernatur corrupti ipsa fuga nisi dolorem. Nisi sapiente suscipit illum ad rem non accusamus
                        debitis. Iste, sapiente!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus et eveniet nobis
                        exercitationem quaerat nihil quo, rerum est animi ducimus possimus fugit pariatur deserunt modi
                        sapiente error aperiam velit facere.</p>
                </div>
            </div>

            <div class="rating  m-auto">

                <a href="#5" title="Donner 5 étoiles">☆</a>
                <!--
            --><a href="#4" title="Donner 4 étoiles">☆</a>
                <!--
            --><a href="#3" title="Donner 3 étoiles">☆</a>
                <!--
            --><a href="#2" title="Donner 2 étoiles">☆</a>
                <!--
            --><a href="#1" title="Donner 1 étoile">☆</a>

            </div>
            <div class="row col-12 justify-content-center m-auto">
                <div class="col-md-5  mt-3 p-2 positiveReview">
                    <h5>Les + :</h5>
                    <ul>
                        <li>Graphisme au top</li>
                        <li>Bande son excellente mais..</li>
                        <li>Une histoire que l'on veut suivre jusqu'au bout</li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                </div>
                <div class="col-md-5 ml-md-3 mt-3 p-2 negativeReview">
                    <h5>Les - :</h5>
                    <ul>
                        <li>Quelques longueurs</li>
                        <li>... bande son assez discrète</li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                </div>
            </div>
            <div class="comment col-12 justify-content-center mt-3">

                <h5>Commentaires</h5>
                <div class="commentbox px-2 ">
                    <fieldset>pseudo</fieldset>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur amet beatae eum ipsum
                        nesciunt impedit dolores numquam recusandae obcaecati sint, sapiente repudiandae earum placeat
                        possimus veritatis minima in quasi.*</p>

                </div>
                <div class="commentbox px-2 ">
                    <fieldset>pseudo</fieldset>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur amet beatae eum ipsum
                        nesciunt impedit dolores numquam recusandae obcaecati sint, sapiente repudiandae earum placeat
                        possimus veritatis minima in quasi.*</p>

                </div>

            </div>


        </div>
    </main>
    <!--fin main-->
    <div class="btnarrow d-none d-lg-block">
        <img src="assets/img/arrow.png" alt="fleche" class="arrow"/>
      </div>
    <!-- début footer -->
    <footer id="footer" class="container-fluid mt-3">
        <div class="row">

        </div>
<?php include('views/templates/footer.php');?>