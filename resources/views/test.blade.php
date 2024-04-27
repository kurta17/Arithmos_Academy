<x-site-layout title='Arithmos Academy'>
    <!-- Your existing code -->
    <div class="grid grid-cols-2 gap-10 md:grid-cols-3 items-center h-full mt-10">
        @for($i = 2; $i <= 10; $i++)
            <a href="{{ route('test', ['grade' => $i, 'question_number' => 1,]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Grade {{$i}}
            </a>
        @endfor
    </div>
</x-site-layout>
