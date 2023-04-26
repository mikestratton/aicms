<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subjects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <h1 class="text-lg">Subjects are Used to Define Domain-Specific Items</h1><br>
                    <a href="/subject/create" class="bg-blue-300 px-3 py-2 border-2">Add a Subject</a>

                    <code-manager></code-manager>

                    @foreach($subjects as $subject)
                        <div>
                            <br>
                            <article>
                                <h1>{{ $subject->name }}</h1>

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
