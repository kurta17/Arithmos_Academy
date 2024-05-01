<!-- questionstrieds/update.blade.php -->

<x-site-layout title="Update QuestionTried">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Update QuestionTried</h1>
        <!-- Form to update an existing QuestionTried -->
        <form action="{{ route('questionstrieds.update', $questionTried->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700">User ID</label>
                <input type="text" name="user_id" id="user_id" class="mt-1 p-2 border rounded-md w-full" value="{{ $questionTried->user_id }}">
            </div>
            <div class="mt-4">
                <label for="question_id" class="block text-sm font-medium text-gray-700">Question ID</label>
                <input type="text" name="question_id" id="question_id" class="mt-1 p-2 border rounded-md w-full" value="{{ $questionTried->question_id }}">
            </div>
            <div class="mt-4">
                <label for="grade" class="block text-sm font-medium text-gray-700">Grade</label>
                <input type="text" name="grade" id="grade" class="mt-1 p-2 border rounded-md w-full" value="{{ $questionTried->grade }}">
            </div>
            <div class="mt-4">
                <label for="question_number" class="block text-sm font-medium text-gray-700">Question Number</label>
                <input type="text" name="question_number" id="question_number" class="mt-1 p-2 border rounded-md w-full" value="{{ $questionTried->question_number }}">
            </div>
            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
            </div>
        </form>
    </div>
</x-site-layout>
