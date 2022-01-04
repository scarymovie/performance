<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Посты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
                    <p>{{$post->title}}</p>
                </div>
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg text-center">
                <p>{{$post->description}}</p>
            </div>
        </div>
    </div>
</x-app-layout>
