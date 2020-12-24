<?php 
namespace App\src\controllers;
use App\src\repository\QuizRepository;
use App\src\config\Session;

ini_set('display_errors', 'on');
class QuizController{
    private $quizRepository;
    private $session;

    public function __construct()
    {
        if (!isset($this->quizRepository)) {
            $this->quizRepository = new QuizRepository;
        }
        if (!isset($this->session)) {            
            $this->session = new Session;
        }
    }
    public function quizz() {
        if(isset($_COOKIE["pseudo"])){
            require 'src/view/quiz.php';
        }
        else{
            header('Location: index.php?page=account&action=login&error=1');
        }
        
    }
    public function check(){
        $answers = $this->quizRepository->getAnswer($_GET["nb"]);
        $rep=0;
        //algorithme pas bon
        if(isset($_POST['submit'])){
            for($i=1;$i<count($answers)+1;$i++){
                if($_POST["$i"]!==$answers[$i])
                    $rep=1;
                
            }
        }
        $this->QuizRepository->addResult($rep,$_GET["nb"]);
        setcookie('rep', $rep, time() + 365*24*3600, null, null, false, true);
        header('Location: index.php?page=quiz&action=quizz');
        

    }
    public function find(){
        $_SESSION["nbquiz"]=$_GET["nb"];
        require( 'src/view/quiz/q.php');
    }
}
?>