<x-layout>
    <x-slot:title>
        Add New Post | My Laravel App
    </x-slot>

    <h1>Add New Post</h1>
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for="title">
                Title
                <input type="text" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="body">
                Body
                <textarea name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea>
            </label>
            @error('body')
                <p class="error">{{ $message }}</p>
        @enderror
        </div>
        <div>
            <button>Add</button>
        </div>
    </form>
    <p class="back-link"><a href="{{ route('posts.index')}}">Back</a></p>
</x-layout>
