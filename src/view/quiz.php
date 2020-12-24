    <?php
        ob_start();
    ?>
        <main class="quiz">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/quiz.css">
            <hr>
            <div class="container bootstrap snippets bootdey">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box no-header clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table user-list">
                                        <thead>
                                            <tr>
                                            <th><span>Nom</span></th>
                                            <th><span>Catégorie</span></th>
                                            <th class="text-center"><span>Difficulté</span></th>
                                            <th><span>Côte</span></th>
                                            <th><span>Resultat</span></th>
                                            <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php //récuperer la liste des quiz et faire un foreach
                                                    $nbquiz=1;
                                                    ?>
                                                    <a href="?page=quiz&action=find&nb=<?php echo $nbquiz;?>" class="user-link">Quiz <?php echo $nbquiz;?></a>
                                                </td>
                                                <td>Foot</td>
                                                <td class="text-center">
                                                    <span class="label label-danger">Facile</span>
                                                </td>
                                                <td>
                                                    <span class="cote">1.2</span>
                                                </td>
                                                <td>    
                                                <div class="error">
                                                    <?php 
                                                        if($_COOKIE["rep".$nbquiz]==0){
                                                            var_dump($_COOKIE);
                                                            echo '<span class="good">10/10</span>';
                                                        }
                                                        else{
                                                            echo '<span class="bad">Mauvaise(s) réponse(s)</span>';
                                                        }
                                                    ?>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    <?php 
        $page = ob_get_clean();

        require 'template/template.php';
     ?>