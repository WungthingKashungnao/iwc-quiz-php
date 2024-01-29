<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- navbar start -->
    <!-- <div class="container-fluid  h-100 d-flex flex-column justify-content-between align-items-center ">
        <nav class=" w-100 navbar  justify-content-between" style="background-color: rgb(52,152,219);">
            <a class="navbar-brand text-light">Quiz App</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav> -->
        <!-- navbar end -->
        <h1 class="brandLogo">International Water Conclave</h1>
        <div id="start-container">
            <h1 class="text-light">Welcome to the Quiz!</h1>
            <button id="start-btn" class="btn">Start Quiz</button>
        </div>

        <div id="quiz-container" class="shadow-lg">
            <p class="timerText"> Time Left: <span id="timer"></span> seconds </p>
            <h2 id="question" class="text-dark" ></h2>
            <ul id="options"></ul>
        </div>

        <!-- footer start -->
        <!-- <footer class="py-4 bg-dark w-100 d-flex justify-content-center align-items-center">
            <p  class="text-white" >Developed By Marketing Wire</p>
        </footer> -->
        <!-- footer end -->

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="quiz.js"></script>

</html>