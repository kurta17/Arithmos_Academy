<x-site-layout title="Question Tried Details">
    <div class="container mx-auto">
        <div class="bg-gray-900 shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-white">Question Tried Information</h3>
            </div>
            <div class="bg-gray-900 px-4 py-5 sm:px-6">
                @foreach($questionTried as $question)
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Question Title</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $question->test->question }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Grade</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $question->grade }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Initiated</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $question->initiated ? 'Yes' : 'No' }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Solved</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $question->solved ? 'Yes' : 'No' }}</dd>
                    </div>
                </dl>
                @endforeach  
            </div>
        </div>
    </div>
</x-site-layout>
