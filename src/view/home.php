    <?php 
        ob_start();
    ?>

    <main class="page landing-page">
        <section class="clean-block clean-hero" style="color: #00000000;border-color: rgb(165,63,15);background: url('https://ibb.co/QJHfstx');">
             <span id="ban"><img src="assets/img/C'BET.gif"></span>
             <div class="text">
            <div><h2>Le principe ? Il est <strong><u>très</u></strong> simple :</h2> 
                Tu prends un quizz, tu paris, tu réponds juste aux 10 questions et tu récupères ta mise multipliée avec des côtes toujours plus grandes.
            </div>
                <button class="btn btn-outline-light btn-lg" type="button">Je choisis !</button>
            </div>
        </section>
        <section>
            <div class="selectquizz">
                <div class="block-heading">
                    <h2>Notre Sélection de Quizz</h2>
                    <p>Vous trouverez ici nos derniers quizz ou ceux qui marchent le mieux en ce momment :&nbsp;</p>
                
                     <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><a class="desc" href="#"><h3  >notre dernier quizz 🔝</h3><img class="w-100 d-block" src="assets/img/quiz1.gif" alt="Slide img"></a></div>
                        <div class="carousel-item"><a class="desc" href="#"><h3  >notre meilleur quizz 💸</h3><img class="w-100 d-block" src="assets/img/quiz1.gif" alt="Slide img"></a></div>
                        <div class="carousel-item"><a class="desc" href="#"><h3  >Un quizz au Hasard 😏</h3><img class="w-100 d-block" src="assets/img/quiz1.gif" alt="Slide img"></a></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                    </div>
                </div>
            </div>
        </section>
    </main>
   
   <?php 
        $page = ob_get_clean();

        require 'template/template.php';
     ?>