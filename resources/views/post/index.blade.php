<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mx-5 my-5 flex flex-column justify-between">
                  <h1 class="text-3xl mx-4 my-4 px-5">Post</h1>
                  @if(request()->routeIs('post'))
                    <a href="{{ route('post.create') }}" class="px-5 py-3 bg-blue-600 mx-4 my-4 shadow-md rounded-md text-white">Buat Postingan</a>
                  @endif
                </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(request()->routeIs('post'))
                <livewire:post-index />
                @else
                <livewire:post-editor />
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
