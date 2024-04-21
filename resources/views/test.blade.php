<x-site-layout title='Arithmos Academy'>

  
    <p>
        <h2 class="text-5xl font-bold text-white text-center">Are you ready for a challenging and exciting quiz?</h2>
    </p>
    <br>
    <br>
    <h2 class="text-2xl font-bold text-white text-center"> Attention all educators and students!
        We have 10 thought-provoking questions, each accompanied by 4 answer choices, perfect for every grade level. 
        Let's see who can get the highest score!</h2>

    <div class="grid grid-cols-2 gap-10 md:grid-cols-3 items-center h-full mt-10">
        @for($i = 2; $i <= 10; $i++)
            <a href="\question" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Grade {{$i}}
            </a>
        @endfor
    </div>
              
    
</x-site-layout>