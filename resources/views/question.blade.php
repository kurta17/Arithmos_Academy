<x-site-layout title='Questions'>

  
    <p>
        <h2 class="text-5xl font-bold text-white text-center">question</h2>
    </p>


    <div class="grid grid-cols-2 gap-10 md:grid-cols-4 items-center h-full mt-20">
        @for($i = 1; $i <= 4; $i++)
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                answer {{$i}}
            </a>
        @endfor
    </div>
    
    <button class="bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded mt-10">
        Submit 
    </button>
              
    
</x-site-layout>