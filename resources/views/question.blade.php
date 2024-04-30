<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
</head>
<body>
    <x-site-layout title='Questions'>
        <form id="question-form" method="POST" action="{{ route('submit') }}">
            @csrf

            <div class="absolute top-10 left-10 m-10 flex">
                <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5">Time: <span id="time">00:00</span></p>
            </div>

            <div class="absolute top-10 right-10 m-10 flex">
                <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5">Correct Answer: <span id="correct"> take argunet from javascript "counter"</span></p>
            </div>

            <div class='text-white p-1'>
                <h2 class="text-3xl font-bold text-white text-center mt-20">
                    {{ $test->question }}
                </h2>

                <div class="grid grid-cols-2 gap-10 md:grid-cols-4 items-center w-50 h-30 p-10 mt-40">
                    @foreach ($test->options() as $option)
                        <label class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <input type="radio" name="answer" value="{{ $option }}">
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
        // Initialize variables for correct answers and timer
        let counter = 0;
        let timeInSeconds = 0;
        let timerInterval;

        // Function to start the timer
        function startTimer() {
            timerInterval = setInterval(() => {
                timeInSeconds++;
                document.getElementById('time').innerText = formatTime(timeInSeconds);
            }, 1000);
        }

        // Function to stop the timer
        function stopTimer() {
            clearInterval(timerInterval);
        }

        // Function to format time in MM:SS format
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes < 10 ? '0' : ''}${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
        }

        // Function to check the answer
        function checkAnswer() {
            const selectedAnswer = document.querySelector('input[name="answer"]:checked').value;
            const correctAnswer = {{ $correctAnswer }};

            if (selectedAnswer === correctAnswer) {
                counter++;
                document.getElementById('correct').innerText = counter;
            }
        }


        // Event listener for form submission
        document.getElementById('question-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Stop the timer
            stopTimer();
            
            // Check the answer
            checkAnswer();

            // Submit the form
            this.submit();
        });

        // Start the timer when the page loads
        window.onload = startTimer;
    </script>
</body>
</html>
