<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Посты') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('lesson.store')}}" method="post">
                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" id="title"
                       class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                <x-jet-section-border />
                <label for="description">Описание</label>
                <input type="text" name="description" id="description"
                       class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                <x-jet-section-border />
                <x-jet-secondary-button class="ml-2" type="submit">
                    {{ __('Создать урок') }}
                </x-jet-secondary-button>
            </form>
        </div>
    </div>
</x-app-layout>
