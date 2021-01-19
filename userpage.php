<?php
    $background = 'bgUserPage';
        include('views/templates/header.php');
?>
    <!--fin header-->
    <!--début main-->
    <main class=" container ">
        <div class="row justify-content-center m-auto">
            <!-- début formulaire login -->
            <div class=" col-12 col-md-5 account mt-4 p-0 pb-2">
                <div class="col-12 row justify-content-center">
                    <h2>Mon compte</h2>
                </div>
                <div class="row col-12 ml-md-1 mt-2 ">
                    <p class="">
                        <strong class="col-12 mintitle">Mon pseudo :</strong>
                        <div class="col-12">Laurent-tsr</div>
                        <a class="btn btn-primary ml-3 mt-2  p-1" data-toggle="collapse" href="#collapsePseudo"
                            role="button" aria-expanded="false" aria-controls="collapsePseudo">Modifier
                        </a>
                    </p>
                    <div class="row ">
                        <div class=" ml-md-5">
                            <div class="collapse  " id="collapsePseudo">
                                <input type="text" class=" col-6 ml-md-2 ml-5 mt-2 ">
                                <button>OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-12 ml-md-1 mt-2">
                    <p>
                        <strong class="col-12 mintitle"> Mon mail :</strong>
                        <div class="col-12">Laurentvac80@gmail.com</div>
                        <a class="btn btn-primary ml-3 mt-2 p-1" data-toggle="collapse" href="#collapseMail"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Modifier</a>
                    </p>
                    <div class="row">
                        <div class="ml-md-5">
                            <div class="collapse  " id="collapseMail">
                                <input type="email" class="col-6 ml-md-2 ml-5 mt-2">
                                <button>OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-12 ml-md-1 mt-2 ">
                    <p>
                        <strong class="col-12 mintitle"> Mon mot de passe :</strong>
                        <div class="col-12">667Ekip</div>
                        <a class="btn btn-primary ml-3 mt-2 p-1" data-toggle="collapse" href="#collapsePassword"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Modifier</a>
                    </p>
                    <div class="row">
                        <div class="ml-md-5">
                            <div class="collapse " id="collapsePassword">
                                <input type="password" class=" col-6 ml-md-2 ml-5 mt-2">
                                <button>OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-12  ml-md-1 mt-4">
                    <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#exampleModal">
                        Supprimer mon compte
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-dark">
                                    Attention ! Voulez-vous supprimer votre compte ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Revenir à la
                                        page précédente</button>
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--fin main-->
    <!-- début footer -->
<?php include('views/templates/footer.php');?>
        
