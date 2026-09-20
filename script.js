let quiz = 0;
let correct = 0;

function checkAnswer(answer) {

    if (answer === "correct") {

        correct++;

        document.getElementById("result").innerHTML =
            "🎉 Correct!";

    } else {

        document.getElementById("result").innerHTML =
            "❌ Wrong Answer";
    }

    quiz++;

    document.getElementById("quiz").innerHTML = quiz;
    document.getElementById("correct").innerHTML = correct;

    saveProgress();
}


function speak(word) {

    let speech =
        new SpeechSynthesisUtterance(word);

    speech.lang = "en-US";

    speechSynthesis.speak(speech);
}


function saveProgress() {

    fetch("progress.php", {

        method: "POST",

        headers: {
            "Content-Type": "application/json"
        },

        body: JSON.stringify({
            quiz: quiz,
            correct: correct
        })

    });
}

