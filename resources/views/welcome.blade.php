<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



</head>

<body class="">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger d-flex justify-content-between">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h1 style="text-align: center;margin-top:1rem;">Public Bookmarks</h1>

        <div class="card w-100">
            <div class="card-body">
                <form action="{{ route('bookmark.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" style="display: block; width: 25rem;" class="form-control">
                    </div>
                    <label for="url" class="form-label">Url</label>
                    <input type="text" id="url" name="url" style="display: block; width: 25rem;" class=" form-control">
                    <small style="display: block; width: 25rem;">This format: http://v3.onion</small>
                    <button class="btn btn-success" style="margin-top: 2rem;">
                        Submit
                    </button>
                </form>
            </div>
        </div>


        <h2 style="text-align: center;font-size: 1.5rem;margin-top:1rem;">Bookmarks</h2>
        <!-- Container element with Tailwind CSS class -->
        <div class="d-flex justify-content-between" style="margin-top: 2rem;">
            <div class="card w-100">
                <div class="card-body">
                    @foreach($bookmarks as $bookmark)

                    <h1 class="text-2xl font-bold mb-4">{{$bookmark->name}}</h1>
                    <a href="{{$bookmark->url}}" style="color:blue;">
                        {{$bookmark->url}}
                    </a>
                    @endforeach
                </div>
            </div>
            <!-- More content... -->
            <!-- Content inside the container -->
        </div>
    </div>

</body>

</html>