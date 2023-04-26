<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <h1 class="text-lg">Combine the subject and category to then create a post.</h1><br>
                    <a href="/post/create" class="bg-blue-300 px-3 py-2 border-2">Create a Post</a>
                    <br><br>
                    <hr>
                    <br>
                    @foreach($posts as $post)
                        <article>
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->content }}</p>
                        </article>
                        <br>
                        <hr>
                        <br>
                    @endforeach
                </div>
</div>
</div>
</div>
</x-app-layout>
