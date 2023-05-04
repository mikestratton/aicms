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


                    <h1 class="text-lg">Step 2 - Review Content, Edit and Save as new AI Generated Content</h1>
                    <br><hr>
                    <br>


                    <code-manager></code-manager>
                    <h1>INPUT:</h1>
                    SYSTEM: {!! $system !!} <br>
                    USER: {!! $question !!} <br><br>


                    <form method="post" action="{{ route('ai.store') }}" class="mt-6 space-y-6">
                        @csrf
                        <div class="form-group">
                            <label class="py-4" for="system">System</label><br>
                            <textarea class="mt-0" name="system" id="system" cols="50" rows="1"
                                      placeholder="Prompt the system." readonly>{!! $system !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="py-4" for="question">Question</label><br>
                            <textarea class="mt-0" name="question" id="question" cols="50" rows="1"
                                      placeholder="Ask a question." readonly>{!! $question !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="py-4" for="result">Response</label><br>
                            <textarea class="mt-0" name="result" id="result" cols="80" rows="8"
                                      placeholder="Example: I have a dent in my bumper, can you estimate the costs?">{!! $result !!}</textarea>
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
