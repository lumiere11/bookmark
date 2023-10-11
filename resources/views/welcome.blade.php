<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')


</head>

<body class="antialiased">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="flex justify-center" >
        <h1 style="text-align: center;font-size: 2rem;">Public Bookmarks</h1>
    </div>

    <div class="container mx-auto p-4" style="border: 1px solid gray;">
        <form action="{{ route('bookmark.store') }}" method="POST">
            @csrf
                <label for="name" class="block">Name</label>
                <input type="text" id="name" name="name" style="display: block; width: 25rem;" class="block border rounded py-2 px-4 focus:outline-none focus:border-blue-500">

                <label for="url">Url</label>
                <input type="text" id="url" name="url" style="display: block; width: 25rem;" class=" block border rounded py-2 px-4 focus:outline-none focus:border-blue-500">
                <small style="display: block; width: 25rem;">This format: http://v3.onion</small>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold my-2 py-2 px-4 rounded" style="margin-top: 4rem;">
                Submit
            </button>
        </form>
    </div>

    <h2 style="text-align: center;font-size: 1.5rem;margin-top:1rem;">Bookmarks</h2>
    <!-- Container element with Tailwind CSS class -->
    <div class="container mx-auto p-4" style="border: 1px solid gray; margin-top: 2rem;">
        @foreach($bookmarks as $bookmark)
        <h1 class="text-2xl font-bold mb-4">{{$bookmark->name}}</h1>
        <a href="{{$bookmark->url}}" style="color:blue;">
            {{$bookmark->url}}
        </a>
        <!-- More content... -->
        @endforeach
        <!-- Content inside the container -->
    </div>
</body>

</html>