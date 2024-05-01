<!-- questiontrieds/show.blade.php -->

<x-site-layout title="Question Tried Details">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Question Tried Details</h1>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">QuestionTried Information</h3>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">ID</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->id }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">User ID</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->user_id }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Question ID</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->question_id }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Initiated</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->initiated ? 'Yes' : 'No' }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Solved</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->solved ? 'Yes' : 'No' }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Grade</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->grade }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Question Number</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->question_number }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Created At</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->created_at }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Updated At</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $questionTried->updated_at }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-site-layout>
