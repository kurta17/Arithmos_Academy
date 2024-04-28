<x-site-layout title="Create Question">
    <div class="flex justify-center items-center h-full">
        <div class="w-1/2 p-4 text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-4xl font-bold text-center">Create a New Question</h2>
                        <form method="POST" action="{{ route('questions.store') }}">
                            @csrf

                            <div class="mb-6">
                                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                                <input type="text" class="form-input rounded-md shadow-sm w-full" id="title" name="title" required>
                            </div>

                            <div class="mb-6">
                                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                                <textarea class="form-textarea rounded-md shadow-sm w-full" id="description" name="description" rows="5" required></textarea>
                            </div>

                            <!-- Add more fields as needed -->

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-site-layout>
