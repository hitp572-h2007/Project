<?php

header("Content-Type: application/json");


$file = "data/progress.json";


$progress = [

    "quizzes_completed" => 0,

    "total_questions" => 0,

    "correct_answers" => 0,

    "pronunciation_practice" => 0

];


file_put_contents(

    $file,

    json_encode(
        $progress,
        JSON_PRETTY_PRINT
    )

);


echo json_encode([

    "success" => true,

    "progress" => $progress

]);

?>