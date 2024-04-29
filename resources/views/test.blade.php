<x-site-layout title='Arithmos Academy'>
  <div class="flex flex-col  bg-gray-900">
    <div class="text-center mb-11">
      <h1 class="text-5xl font-bold text-gray-100">Choose Your Grade</h1>
    </div>
    <div class="container mx-auto">
      <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
        @for($i = 2; $i <= 10; $i++)
          <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow hover:shadow-lg transition-all">
            <a href="{{ route('test', ['grade' => $i, 'question_number' => 1]) }}" class="text-lg font-bold text-blue-500 hover:text-blue-700 transition-colors">
              Grade {{$i}}
            </a>
          </div>
        @endfor
      </div>
    </div>
  </div>
</x-site-layout>
