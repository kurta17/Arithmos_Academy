<x-site-layout title='Questions'>
    <form method="POST" action="{{ route('submit') }}">
        @csrf

        <div class="absolute top-10 right-10 m-10 flex">
            <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5">Correct Answers: <span id="correct-answers">0</span></p>
        </div>

        <div class="absolute top-10 left-10 m-10 flex">
            <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5 ">Time: <span id="time">00:00</span></p>
        </div>

        <div class='text-white'>
            <h2 class="text-5xl font-bold text-white text-center mt-10">
                {{ $test->title }}
            </h2>

            <div class="grid grid-cols-2 gap-10 md:grid-cols-4 items-center h-full mt-40">
                @foreach ($test->options() as $option)
                    <label class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <input type="radio" name="answer" value="{{ $option }}">
                        {{ $option }}
                    </label>
                @endforeach
            </div>
        </div>
        
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-20">Submit</button>
        </div>
    </form>
</x-site-layout>