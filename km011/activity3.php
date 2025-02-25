<?php

// Define questions and answers
$questions = [
    [
        "question" => "What is the capital of France?",
        "options" => ["A) Berlin", "B) London", "C) Paris", "D) Madrid"],
        "answer" => "C"
    ],
    [
        "question" => "Which language is primarily used for web development?",
        "options" => ["A) Python", "B) PHP", "C) C++", "D) Java"],
        "answer" => "B"
    ],
    [
        "question" => "What is the largest planet in our solar system?",
        "options" => ["A) Earth", "B) Mars", "C) Jupiter", "D) Saturn"],
        "answer" => "C"
    ]
];

// Function to administer quiz and calculate score
function administerQuiz($questions) {
    $score = 0;
    $totalQuestions = count($questions);

    foreach ($questions as $index => $question) {
        echo ($index + 1) . ". " . $question["question"] . "\n";
        foreach ($question["options"] as $option) {
            echo $option . "\n";
        }
        
        // Simulate user response (in a real application, we would collect this from form input)
        $userResponse = readline("Enter your answer (A/B/C/D): ");
        
        if (strtoupper($userResponse) == $question["answer"]) {
            $score++;
        }
        echo "\n";
    }

    echo "Your score is: " . $score . "/" . $totalQuestions . "\n";
}

// Run the quiz
administerQuiz($questions);

?>

