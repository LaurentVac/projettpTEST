<?php
$array=[];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //nettoyage du champ titre de jeu
        $titleGame = trim(filter_input(INPUT_POST, 'titleGame', FILTER_SANITIZE_STRING));
          $array['titre'] = $titleGame ;
        //nettoyage du champ studio
        $studio = trim(filter_input(INPUT_POST, 'studio', FILTER_SANITIZE_STRING));
        $array['studio'] = $studio ;
        //nettoyage du champ date de sortie
        $releaseDate = trim(filter_input(INPUT_POST, 'releaseDate', FILTER_SANITIZE_STRING));
        $array['date'] = $releaseDate ;
        //nettoyage du champ plateforme
        $platform = trim(filter_input(INPUT_POST, 'platform', FILTER_SANITIZE_STRING));
        $array['plateform'] = $platform ;
        //nettoyage du champ test
        $test = trim(filter_input(INPUT_POST, 'test', FILTER_SANITIZE_STRING));
        $array['test'] = $test ;
        //nettoyage du champ les +
        $assetGame1 = trim(filter_input(INPUT_POST, 'assetGame1', FILTER_SANITIZE_STRING));
        $assetGame2 = trim(filter_input(INPUT_POST, 'assetGame2', FILTER_SANITIZE_STRING));
        $assetGame3 = trim(filter_input(INPUT_POST, 'assetGame3', FILTER_SANITIZE_STRING));
        $assetGame4 = trim(filter_input(INPUT_POST, 'assetGame4', FILTER_SANITIZE_STRING));
        $array['assetGame1'] = $assetGame1 ;
        $array['assetGame2'] = $assetGame2 ;
        $array['assetGame3'] = $assetGame3 ;
        $array['assetGame4'] = $assetGame4 ;
        //nettoyage du champ les -
        $defaultGame1 = trim(filter_input(INPUT_POST, 'defaultGame1', FILTER_SANITIZE_STRING));
        $defaultGame2 = trim(filter_input(INPUT_POST, 'defaultGame2', FILTER_SANITIZE_STRING));
        $defaultGame3 = trim(filter_input(INPUT_POST, 'defaultGame3', FILTER_SANITIZE_STRING));
        $defaultGame4 = trim(filter_input(INPUT_POST, 'defaultGame4', FILTER_SANITIZE_STRING));
        $array['defaultGame1'] = $defaultGame1 ;
        $array['defaultGame2'] = $defaultGame2 ;
        $array['defaultGame3'] = $defaultGame3 ;
        $array['defaultGame4'] = $defaultGame4;






    }
    var_dump($array);
?>