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


                    <h1 class="text-lg">Step 2 - Review Content, Edit and Save as a New Post</h1>
                    <br><hr>
                    <br>


                    <code-manager></code-manager>
                    <h1>INPUT:</h1>
                    SYSTEM: {{ $system }} <br>
                    USER: {{ $question }} <br><br>


                    <form method="post" action="{{ route('test.api') }}" class="mt-6 space-y-6">
                        @csrf
                        <div class="form-group">
                            <label class="py-4" for="title">Title</label><br>
                            <textarea class="mt-0" name="title" id="title" cols="50" rows="1"
                                      placeholder="Enter a Title."></textarea>
                        </div>
                        <div class="form-group">
                            <label class="py-4" for="body">Post</label><br>
                            <textarea class="mt-0" name="body" id="body" cols="80" rows="8"
                                      placeholder="Example: I have a dent in my bumper, can you estimate the costs?">{{ $result }}</textarea>
                        </div>

                        <button type="submit" class="bg-blue-300 px-3 py-2 border-2">Submit</button>
                    </form>
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
