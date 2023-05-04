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

                                <br>
                                <article>
                                    <h1><strong>Prompt:</strong> {{ $ai->system }}</h1>
                                    <h1><strong>Input:</strong> {{ $ai->question }}</h1>
                                    <h1><strong>AI:</strong> {{ $ai->response }}</h1>

                                </article>
                                <br>


                    </div>
                    {!! Form::open(['method'=>'DELETE', 'action' => ['AIController@destroy', $ai->id]]) !!}

                    <div class="form-group col-md-3">
{{--                        {!! Form::submit('Delete AI Content', ['class' => 'btn btn-danger btn-block']) !!}--}}
                        <button type="submit" class="bg-red-600 px-3 py-2 border-2">Delete</button>
                    </div>
                    {!! Form::close() !!}
                </div>
</div>
</div>
</div>
</x-app-layout>
