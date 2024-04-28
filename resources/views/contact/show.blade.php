<x-site-layout title='Contact Me'>
    <div class="flex">
        <!-- Contact Information Section -->
        <div class="text-white w-1/2 p-4">
            <h2 class="text-4xl font-bold">Giorgi Kurtanidze</h2>
            <p class="mt-4"><strong>Phone(Geo):</strong> (+995) 597-73-08-89</p>
            <p class="mt-4"><strong>Phone(Geo):</strong> (+66) 083-167-5025</p>
            <p class="mt-4"><strong>Email:</strong> thinkers.struggle@gmail.com</p>
            <p class="mt-4"><strong>Facebook:</strong> <a href="https://www.facebook.com/gio.kurtanidze.357">Gio Kurtanidze</a></p>
            <p class="mt-4"><strong>Linkedin:</strong> <a href="https://www.linkedin.com/in/giorgi-kurtanidze-2b235b287/">Giorgi Kurtanidze</a></p>
            <p class="mt-4"><strong>University:</strong> Harbour Space In Bangkok</p>
            <p class="mt-4"><strong>Major:</strong> Computer Science</p>
            <p class="mt-4"><strong>School:</strong> Komarovi school In Georgia</p>
            <p class="mt-4"><strong>Location:</strong> Bangkok</p>
        </div>

        <!-- Contact Form Section -->
        <div class="w-1/2 p-4">
            <h2 class="text-4xl font-bold text-white">Contact Form</h2>
            <form method="POST" action="{{ route('contact.submit') }}" class="mt-4">
                @csrf
                <div class="mb-10">
                    <label for="name" class="block text-white font-bold ">Name:</label>
                    <input type="text" id="name" name="name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-white font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-white font-bold mb-2">Message:</label>
                    <textarea id="message" name="message" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>
        </div>
    </div>
</x-site-layout>
