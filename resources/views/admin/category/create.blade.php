<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add a Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">



                    <form method="post" action="{{ route('category.store') }}" class="mt-6 space-y-6">
                        @csrf
                        <div class="form-group">
                            <label class="py-4" for="name">Category</label>
                            <input class="mt-4" type="text" class="form-control" id="name" name="name"/>
                        </div>

                        <button type="submit" class="bg-blue-300 px-3 py-2 border-2">Submit</button>
                    </form>

                   {{-- <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" id="title" name="title" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control" required=""></textarea>
                        </div>

                    </form>--}}
                       {{-- <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="Title" required autofocus autocomplete="title" />
                        </div>
                        <div>
                            <x-input-label for="content" :value="__('Content')" />
                            <x-text-input id="content" name="content" type="text" class="mt-1 block w-full" value="Content" required autofocus autocomplete="content" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>--}}

                   {{-- {!! Form::open(['method'=>'POST', 'action' => 'PostController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('content', 'Content:') !!}
                        {!! Form::text('content', null, ['class' => 'form-control col-3', 'rows'=>4]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}--}}

                </div>
</div>
</div>
</div>
</x-app-layout>
