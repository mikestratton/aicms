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


                    <h1 class="text-lg text-2xl text-blue-800">"Prompt" represents instructions given to ChatGPT for how it should respond. <br>"User" represents the
                        input given to ChatGPT. <br>"AI" is the response received from ChatGPT.</h1><br>
                    <p><a href="/ai/create" class="bg-blue-300 px-3 py-2 border-2">Generate AI Content</a></p>


                    <br>
                    <hr>
                    <br>
                    <div>
                        @foreach($ai as $value)
                                <br>
                                <article>

                                    <h1><strong>Prompt:</strong> {{ $value->system }}</h1>
                                    <h1><strong>Input:</strong> {{ $value->question }}</h1>
                                    <h1><strong>AI:</strong> {{ $value->response }}</h1> <br>
                                    <h1><a href="/ai/{{ $value->id }}" class="bg-amber-300 px-3 py-2 border-2">Edit/Delete</a></h1>

                                </article>
                                <br>
                                <hr>
                        @endforeach
                    </div>
                    {{ $ai->links() }}
                </div>
</div>
</div>
</div>
</x-app-layout>
