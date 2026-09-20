<!DOCTYPE html>
<html>
<head>
    <title>Language Learning App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>🌎 Language Learning App</h1>

<div class="box">
    <h2>Vocabulary</h2>
    <h3>Hello</h3>
    <p>Meaning: A greeting</p>
    <button onclick="speak('Hello')">🔊 Listen</button>
</div>

<div class="box">
    <h2>Vocabulary Quiz</h2>

    <h3>What does "Beautiful" mean?</h3>

    <button onclick="checkAnswer('wrong')">A type of food</button>
    <button onclick="checkAnswer('correct')">Very attractive</button>
    <button onclick="checkAnswer('wrong')">A vehicle</button>

    <p id="result"></p>
</div>

<div class="box">
    <h2>Pronunciation Practice</h2>

    <h3 id="word">Welcome</h3>

    <button onclick="speak('Welcome')">
        🔊 Listen
    </button>
</div>

<div class="box">
    <h2>Your Progress</h2>

    <p>
        Quizzes Completed:
        <span id="quiz">0</span>
    </p>

    <p>
        Correct Answers:
        <span id="correct">0</span>
    </p>
</div>

<script src="script.js"></script>

</body>
</html>

