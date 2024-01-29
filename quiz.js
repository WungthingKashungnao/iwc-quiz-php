$(document).ready(function () {
  let currentQuestion = 0; //to keep track of current questions
  let timer;
  let questions; //this will turn into an array as it will store data from the backend
  let marks = 0;

  // Load questions from PHP
  $.ajax({
    // url: "action.php",
    url: "action.php",
    dataType: "json",
    method: "GET",
    success: function (data) {
      questions = data;
      console.log("data ===>", data);
    },
    async: false,
  });

  $("#start-btn").click(function () {
    $("#start-container").hide();
    $("#quiz-container").show();
    loadQuestion();
  });

  function loadQuestion() {
    if (currentQuestion < questions.length) {
      displayQuestion();
      startTimer();
    } else {
      // Quiz finished
      // alert("Quiz finished! you scored " + marks + " out of 5");
      // window.location = "form";
      localStorage.setItem("iwcQuiz", marks);
      window.location = "marks.php";
    }
  }

  function displayQuestion() {
    const question = questions[currentQuestion];
    $("#question").text(question.question);

    const optionsList = $("#options");
    optionsList.empty();

    // question.options.forEach(function (option) {
    //   optionsList.append(`<li>${option}</li>`);
    // });
    question.options.split(",").forEach(function (option) {
      optionsList.append(`<li>${option}</li>`);
    });

    optionsList.children("li").click(function () {
      checkAnswer($(this).text());
    });
  }

  function startTimer() {
    let seconds = 10;
    timer = setInterval(function () {
      // $("#timer").text(`Time left: ${seconds}s`);
      $("#timer").text(`${seconds}`);
      if (seconds <= 0) {
        clearInterval(timer);
        checkAnswer(null);
      }
      seconds--;
    }, 1000);
  }

  function checkAnswer(selectedOption) {
    clearInterval(timer);
    const correctOption = questions[currentQuestion].correct;
    if (selectedOption === correctOption) {
      // alert("Correct!");
      marks++;
    } else {
      // alert(`Incorrect! The correct answer is: ${correctOption}`);
    }

    currentQuestion++;
    loadQuestion();
  }
});
