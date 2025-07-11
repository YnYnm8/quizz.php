<?php


$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];




$reponses = [1, 2, 3, 1, 3];
$score = 0;

$NB_QUESTIONS = count($questions);

for($i = 0; $i < $NB_QUESTIONS; $i++){
    echo "Question : ".$questions[$i]."\n";
    $user_answer=trim(fgets(STDIN));
    

    if ($user_answer==$reponses[$i]){
        echo"bien joué!\n";
        $score+=10;
        echo"*Le score augemente de 10*\n";
        
    }
  elseif($user_answer!=$reponses[$i]) {
    echo"NON !\n";
    echo"Le score n'augemente pas. :(*\n";

  }    

    echo"score:$score\n";

}
 
$total_questions = 5; 
$points_per_question = 10; 

$max_score = $total_questions * $points_per_question;
$percentage = ($score / $max_score) * 100;

echo "Pourcentage de bonne réponse: " . $percentage . "% \n";
if($percentage>=50){
    echo"Bien joué!!!\n";
}
else{
    echo"Game over!!!\n";
}




