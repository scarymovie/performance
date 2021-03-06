<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Пост ' . $post->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg text-center">
                <p>{{$post->description}}</p>
            </div>
            <x-jet-section-border/>
            @hasanyrole('manager|admin')
            <form method="post" action="{{route('admin.update', $post->id)}}">
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

                <x-jet-secondary-button class="ml-2" type="submit">
                    {{ __('Изменить') }}
                </x-jet-secondary-button>
            </form>

            <x-jet-section-border/>
            <form action="{{route('admin.destroy', $post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <x-jet-danger-button class="ml-2" type="submit">
                    {{ __('Удалить') }}
                </x-jet-danger-button>
            </form>

            @endhasanyrole
        </div>
    </div>
</x-app-layout>
