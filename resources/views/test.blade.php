<x-site-layout title='Arithmos Academy'>

  
    <p>
        <h2 class="text-4xl font-bold text-blue text-center">Choose a grade to take a test!</h2>
    </p>

    <div class="grid grid-cols-2 gap-10 md:grid-cols-3 items-center h-full mt-14">
        @for($i = 2; $i <= 10; $i++)
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Grade {{$i}}
            </a>
        @endfor
    </div>
              
    
</x-site-layout>