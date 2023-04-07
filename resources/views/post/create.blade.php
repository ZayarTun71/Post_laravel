<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Create</title>
</head>

<body class="bg-dark">

    <form action="{{ route('post.store') }}" method="POST" class="w-50 p-5 m-auto mt-5 text-light border border-light">
        @csrf
        <h1>Create</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                name="name" value="{{old('name')}}">
            @error('name')
                <div class="text-danger"invalid-feedback>{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1"
                name="description" value="{{old('description')}}">
            @error('description')
                <div class="text-danger"invalid-feedback>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault1" name="option" value="active" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                active
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name="option" value="noactive">
            <label class="form-check-label" for="flexRadioDefault2">
                no active
            </label>

        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Add</button>
            <a href="{{ route('post.index') }}" class="btn btn-danger">Cancel</a>
        </div>

    </form>
</body>

</html>
