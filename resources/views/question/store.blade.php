<x-site-layout title="Store Question">
    <div class="flex justify-center items-center h-full">
        <div class="w-1/2 p-4 text-white">
            <h2 class="text-4xl font-bold text-center">Question Stored Successfully</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-4">
                <a href="{{ route('question.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Create Another Question</a>
            </div>
        </div>
    </div>
</x-site-layout>
