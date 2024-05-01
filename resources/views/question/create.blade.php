<!-- resources\views\question\create.blade.php -->

<x-site-layout title="Create Question">
    <div class="flex justify-center items-center h-full">
        <div class="w-1/2 p-4 text-white">
            <h2 class="text-4xl font-bold text-center">Create a New Question</h2>

            <form method="POST" action="{{ route('question.store') }}">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" class="form-input rounded-md text-black w-full" id="title" name="title" value="{{ old('title') }}" required>
                </div>
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <textarea class="form-input rounded-md text-black w-full" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="w-1/2 alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</x-site-layout>
