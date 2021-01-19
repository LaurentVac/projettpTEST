<?php
    $background = 'bgHomePage';
    //Controle formulaire
    include('controllers/controller_addition_content.php');
    include('controllers/controller_form.php');
    //header
    include('views/templates/header.php');
?>
<div class="container-fluid ">
    <div class="row col-12 justify-content-center">
        <h2 class="col-12 text-center">Administration</h2>
        <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                    href="#userManagement" role="tab" aria-controls="userManagement">Gestion utilisateurs</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                    href="#list-messages" role="tab" aria-controls="messages">Contrôle commentaires</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                    href="#list-settings" role="tab" aria-controls="settings">Contenu</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-pane fade show active" id="userManagement" role="tabpanel"
                aria-labelledby="list-profile-list">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nom Prénom</th>
                            <th scope="col">Pseudo</th>
                            <th scope="col">Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorsArray)){?>
                        <tr>
                            <td><?= $name.' '.$firstName?></td>
                            <td><?= $pseudo?></td>
                            <td><?= $mail?></td>
                            <td><button type="submit">Supprimer</button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">toto
            </div>
            <div class="tab-pane fade bg-dark py-2" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <form class="col-12" action="" method="POST">
                    
                    <!-- titre du jeu -->
                    <div class="form-group">
                        <label for="titleGame">Titre du jeu</label>
                        <input type="text" class="form-control" id="titleGame" name="titleGame"
                            aria-describedby="titleGame" value="<?=$titleGame ?? ''?>">
                        <div id="titleGame_error" class="form-text formError">
                            <?= $errorsArray['titleGame_error'] ?? ''?>
                        </div>
                    </div>
                    <!-- studio de developpement -->
                    <div class="form-group">
                        <label for="studioGame">Studio</label>
                        <input type="text" class="form-control" id="studioGame" name="studioGame"
                            aria-describedby="studioGame" value="<?=$studioGame?? ''?>">
                        <div id="studioGame_error" class="form-text formError">
                            <?= $errorsArray['studioGame_error'] ?? ''?>
                        </div>
                    </div>
                    <!-- date de sortie -->
                    <div class="form-group">
                        <label for="releaseDate">Date de sortie </label>
                        <input type="date" class="form-control" id="releaseDate" name="releaseDate"
                            aria-describedby="releaseDate" value="<?=$platform ?? ''?>">
                        <div id="releaseDate_error" class="form-text formError">
                            <?= $errorsArray['releaseDate_error'] ?? ''?>
                        </div>
                    </div>
                    <!-- plateforme -->
                    <div class="form-group">
                        <label for="platform">Plateforme </label>
                        <input type="text" class="form-control" id="platform" name="platform"
                            aria-describedby="platform" value="<?=$platform ?? ''?>">
                        <div id="platform_error" class="form-text formError">
                            <?= $errorsArray['platform_error'] ?? ''?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="test">Test</label>
                        <textarea class="form-control"  id="test" name="test" >
                            <?= $test ?? ''?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <input type="number" min="0" max="20" class="form-control"  id="note" name="note" value="<?= $note ?? ''?> ">
                                                  
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="assetGame1">Les + </label>
                            <input type="text" class="form-control" id="assetGame1" name="assetsGame1"
                                aria-describedby="assetGame1" placeholder="Atout 1" value="<?=$platform ?? ''?>">
                            <input type="text" class="form-control mt-1" id="assetGame2" name="assetGame2"
                                aria-describedby="assetGame2" placeholder="Atout 2" value="<?=$assetGame2 ?? ''?>">
                            <input type="text" class="form-control mt-1" id="assetGame3" name="assetGame3"
                                aria-describedby="assetGame3" placeholder="Atout 3" value="<?=$assetGame3 ?? ''?>">
                            <input type="text" class="form-control mt-1" id="assetGame4" name="assetGame4"
                                aria-describedby="assetGame4" placeholder="Atout 4" value="<?=$assetGame4 ?? ''?>">
                        </div>
                        <div class="form-group col-6">
                            <label for="defaultGame1">Les - </label>
                            <input type="text" class="form-control" id="defaultGame1" name="defaultGame1"
                                aria-describedby="defaultGame1" placeholder="Default 1" value="<?=$defaultGame1 ?? ''?>">
                            <input type="text" class="form-control mt-1" id="defaultGame2" name="defaultGame2"
                                aria-describedby="defaultGame2" placeholder="Default 2" value="<?=$defaultGame2 ?? ''?>">
                            <input type="text" class="form-control mt-1" id="defaultGame3" name="defaultGame3"
                                aria-describedby="defaultGame3" placeholder="Default 3" value="<?=$defaultGame3 ?? ''?>">
                            <input type="text" class="form-control mt-1" id="defaultGame4" name="defaultGame4"
                                aria-describedby="defaultGame4" placeholder="Default 4" value="<?=$defaultGame4 ?? ''?>">
                        </div>
                    </div>
                    <button type="submit" class="btn buttonNav">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="emptyFooter"></div>
<?php

    include('views/templates/footer.php');
?>