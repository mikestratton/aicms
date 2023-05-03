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


                    <h1 class="text-lg text-2xl">OpenAI's API will be used to generate content for posts.
                        A simple form will send a get request to Open AI's ChatGPT, with the results then displayed in the browser.
                    Editing of the results will be optional before saving those results as a AI generated content.</h1><br>
                    <a href="/ai/create" class="bg-blue-300 px-3 py-2 border-2">Generate AI Content</a> <br><br><br>
                    <p class="text-xl text-blue-800">"System" represents instructions given to ChatGPT for how it will respond. <br>"User" represents the
                    input given to ChatGPT.</p>

                    <br>
                    <hr>
                    <br>

                    @foreach($ai as $value)
                        <div>
                            <br>
                            <article>
                                <h1><strong>System:</strong> {{ $value->system }}</h1>
                                <h1><strong>User:</strong> {{ $value->question }}</h1>

                            </article>
                            <br>
                            <hr>
                        </div>
                    @endforeach
                </div>
</div>
</div>
</div>
</x-app-layout>
