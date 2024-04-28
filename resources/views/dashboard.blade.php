<x-site-layout title='Dashboard'>
    <div class="flex">
        
            <!-- Left Section: Take a Test -->
            <div class="text-white w-1/3 p-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="card-title">Take a Test</h1>
                        <!-- take a picture from storage public -->
                        <img src="start-test.png" alt="Test Image">
                        <a href="{{ route('test') }}" class="btn btn-primary">Start Test</a>
                    </div>
                </div>
            </div>

            <!-- Middle Section: Contact Me -->
            <div class="text-white w-1/3 p-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="card-title">Contact Me</h1>
                        <img src="contact-me.png" alt="Contact Image">
                        <a href="{{ route('contact.show') }}" class="btn border-blue-800 btn-primary hover:bg-blue-800 hover:border-blue-800">Contact</a>
                    </div>
                </div>
            </div>

            <!-- Right Section: Create a Question -->
            <div class="text-white w-1/3 p-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="card-title">Create a Question</h1>
                        <img src="create-question.png" alt="Question Image">
                        <a href="{{ route('question.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        
    </div>
</x-site-layout>
