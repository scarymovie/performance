<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Часть ' . $part->title) }}
        </h2>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg text-center">
                <h4 class="text-3xl font-normal leading-normal mt-0 mb-2 text-pink-800">
                    {{$part->description}}
                </h4>
            </div>
            <x-jet-section-border/>
{{--            @hasanyrole('manager|admin')
            <form method="post" action="{{route('lesson.update', $lesson->id)}}">
                @csrf
                @method('PUT')
                <label for="title">Изменить название</label>
                <input type="text" name="title" id="title"
                       class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                <x-jet-section-border/>

                <label for="description">Изменить описание</label>
                <input type="text" name="description" id="description"
                       class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                <x-jet-section-border/>

                <label for="comment">Комментарий</label>
                <input type="text" name="comment" id="comment"
                       class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                <x-jet-section-border/>

                <label for="rang">Оценка</label>
                <input type="text" name="rang" id="rang"
                       class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                <x-jet-section-border/>

                <x-jet-secondary-button class="ml-2" type="submit">
                    {{ __('Изменить') }}
                </x-jet-secondary-button>
            </form>
            <x-jet-section-border/>
            --}}{{--//test a href route destroy--}}{{--
            <form action="{{route('lesson.destroy', $lesson->id)}}" method="post">
                @csrf
                @method('DELETE')
                <x-jet-danger-button class="ml-2" type="submit">
                    {{ __('Удалить') }}
                </x-jet-danger-button>
            </form>
            </form>
            @endhasanyrole--}}
        </div>
    </div>
</x-app-layout>
