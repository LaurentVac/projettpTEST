<?php
    $background = 'bgHomePage';
        include('views/templates/header.php');
?>
    <!--fin header-->
    <!--début main-->
    <main class="container ">
        <div class="row  ">
            <div class=" col-12 titleHome mt-4 ">
                <h4>Les tops</h4>
            </div>
            <div class="row col-12 justify-content-center m-auto">
                <div class="card bg-dark  col-md-5 p-0 mt-3 mr-md-2 ">
                    <a href="topscenario.php"> <img src="assets/img/podium.png" class="card-img float-left"
                            alt="img-TLOU">
                    </a>
                </div>
                <div class="card bg-dark  col-md-5 p-0 mt-3 ml-md-1 ">
                    <a href=""><img src="assets/img/podium.png" class="card-img " alt="img-GOD">
                    </a>
                </div>
            </div>
            <div class="row col-12 justify-content-center m-auto">
                <div class="card bg-dark  col-md-5 p-0 mt-3 mr-md-2">
                    <a href=""> <img src="assets/img/podium.png" class="card-img float-left" alt="img-TLOU">
                    </a>
                </div>
                <div class="card bg-dark  col-md-5 p-0 mt-3 ml-md-1 ">
                    <a href=""><img src="assets/img/podium.png" class="card-img " alt="img-GOD">
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!--fin main-->
    <!-- début footer -->
<?php
        include('views/templates/footer.php');
?>
