<x-site-layout title='Questions'>
    <form method="POST" action="{{ route('submit') }}">
        @csrf

        <div class="absolute top-10 left-10 m-10 flex">
            <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5 ">Time: <span id="time">00:00</span></p>
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
          <a href="{{ route('test', ['grade' => $grade, 'question_number' => $nextQuestionId,]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{ $nextQuestionId ? 'Next' : 'Finish' }}
          </a>
        </div>

    </form>

</x-site-layout>