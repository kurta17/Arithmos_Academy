<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css">
    <style>
        .correct-answer {
            color: green;
        }

        .incorrect-answer {
            color: red;
        }
    </style>
</head>
<body>
    <x-site-layout title='Questions'>
 
        <form id="question-form" method="POST" action="{{ route('submit') }}">
            @csrf

            <div class="absolute top-10 left-10 m-10 flex">
                <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5">Time: <span id="time">00:00</span></p>
            </div>

            <div class="absolute top-10 right-10 m-10 flex">
                <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5">Correct Answers: <span id="counter"></span></p>
            </div>

            <div class='text-white p-1'>
                <h2 class="text-3xl font-bold text-white text-center mt-20">
                    {{ $test->question }}
                </h2>

                <div class="grid grid-cols-2 gap-10 md:grid-cols-4 items-center w-50 h-30 p-10 mt-40">
                    @foreach ($test->options() as $option)
                        <label class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <input type="radio" name="answer" value="{{ $option }}" id="{{ $option }}">
                            {{ $option }}
                        </label>
                    @endforeach
                </div>
            </div>

            <input type="hidden" name="question_id" value="{{ $test->number_id }}">
            <input type="hidden" name="next_question_id" value="3">

            <div class="flex justify-between mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Check</button>
                <a href="{{ route('test', ['grade' => $grade, 'question_number' => $nextQuestionId]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ $nextQuestionId ? 'Next' : 'Finish' }}
                </a>
            </div>
        </form>
    </x-site-layout>

    <script>
         
        let timeInSeconds = 0;
        // let counter = 0 saved in local storage
        let counter = localStorage.getItem('counter') ? parseInt(localStorage.getItem('counter')) : 0;
        document.getElementById('counter').innerText = counter;

        timeInSeconds = localStorage.getItem('time') ? parseInt(localStorage.getItem('time')) : 0;

        let timerInterval;
        let correctAnswer = '{{ $correctAnswer }}'; 

        console.log(correctAnswer);
        console.log(counter);


        // Function to start the timer
        function startTimer() {

            timerInterval = setInterval(() => {
                timeInSeconds++;
                document.getElementById('time').innerText = formatTime(timeInSeconds);
                // save the current time in the local storage
                
                // localstorage timer
                localStorage.setItem('time', timeInSeconds);
            }, 1000);
        }

        // Function to stop the timer
        function stopTimer() {
            clearInterval(timerInterval);
        }
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes < 10 ? '0' : ''}${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
        }

        function checkAnswer(correctAnswer) {
            const selectedAnswer = document.querySelector('input[name="answer"]:checked').value;

            if (selectedAnswer === correctAnswer) {
                alert('Correct!')
                counter++;
                // save the counter in the local storage
                localStorage.setItem('counter', counter);
                // update the counter display
                document.getElementById('counter').innerText = counter;
            } else {
                // color change here
                alert('Incorrect!')
                // color the correct answer element red
            }
        }

        // Event listener for form submission
        document.getElementById('question-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Stop the timer
            stopTimer();
            
            // Check the answer
            checkAnswer(correctAnswer, counter);

            // Optionally, submit the form or navigate manually
            //this.submit();
        });

        // Start the timer when the page loads
        window.onload = startTimer;
    </script>
</body>
</html>
