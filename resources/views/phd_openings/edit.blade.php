<!-- resources/views/phd_openings/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit PhD Opening') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">Edit PhD Opening</h1>

                    <form action="{{ route('phd_openings.update', $phd_opening->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 font-bold">Title:</label>
                            <input type="text" id="title" name="title" value="{{ $phd_opening->title }}" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 font-bold">Description:</label>
                            <textarea id="description" name="description" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>{{ $phd_opening->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="research_area" class="block text-gray-700 font-bold">Research Area:</label>
                            <input type="text" id="research_area" name="research_area" value="{{ $phd_opening->research_area }}" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="qualifications" class="block text-gray-700 font-bold">Qualifications:</label>
                            <textarea id="qualifications" name="qualifications" 
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>{{ $phd_opening->qualifications }}</textarea>
                        </div>

                        <button type="submit" 
                            class="px-4 py-2 bg-indigo-600 text-white font-bold rounded hover:bg-indigo-700">
                            Update PhD Opening
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>