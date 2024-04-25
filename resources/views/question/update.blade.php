<!-- update.blade.php -->

<x-site-layout title='Next Question'>
    <div class="text-white">
        <h2 class="text-5xl font-bold text-white text-center mt-10">
            Next Question
        </h2>
        
        <h3 class="text-3xl font-bold text-white text-center mt-5">
            {{ $nextQuestion->title }}
        </h3>

        <div class="grid grid-cols-2 gap-10 md:grid-cols-4 items-center h-full mt-40">
            @foreach ($nextQuestion->options() as $option)
                <label class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <input type="radio" name="answer" value="{{ $option }}">
                    {{ $option }}
                </label>
            @endforeach
        </div>

        <input type="hidden" name="question_id" value="{{ $nextQuestion->number_id }}">
        <input type="hidden" name="next_question_id" value="{{ $nextQuestionId }}">

        <form method="POST" action="{{ route('submit') }}">
            @csrf
            <input type="hidden" name="question_id" value="{{ $nextQuestion->number_id }}">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">Submit</button>
        </form>
    </div>
</x-site-layout>
