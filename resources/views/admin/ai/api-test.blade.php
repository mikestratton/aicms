<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Artificial Intelligence') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <h1 class="text-lg">OpenAI's API will be used to generate content for posts.
                        A simple form will send a get request to Open AI's ChatGPT, with the results then displayed in the browser.
                    Editing of the results will be optional before saving those results as a post.</h1>


                    <code-manager></code-manager>
                    {{ $result }}
{{--                    @foreach($response as $value)--}}
{{--                        <div>--}}
{{--                            <br>--}}
{{--                            <article>--}}
{{--                                <h1>{{ $value}}</h1>--}}

{{--                            </article>--}}
{{--                            <br>--}}
{{--                            <hr>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                </div>
</div>
</div>
</div>
</x-app-layout>
