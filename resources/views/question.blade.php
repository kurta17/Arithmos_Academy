<x-site-layout title='Questions'>

    <div class="absolute top-10 right-10 m-10 flex">
        <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5">Correct Answers: <span id="correct-answers">0</span></p>
    </div>

    <div class="absolute top-10 left-10 m-10 flex">
        <p class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-5 ">Time: <span id="time">00:00</span></p>

    </div>

    <p>
        <h2 class="text-5xl font-bold text-white text-center mt-10">question</h2>
    </p>

    <div class="grid grid-cols-2 gap-10 md:grid-cols-4 items-center h-full mt-40">
        @for($i = 1; $i <= 4; $i++)
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                answer {{$i}}
            </a>
        @endfor
    </div>
    
    <div class="flex justify-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-20"> Submit
    </div>
</x-site-layout>