<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <title>View</title>
</head>

<body class="bg-dark">
    <div class="w-50 m-auto mt-5">
        <table class="table text-light border border-light">
            <h1 class="text-light">View</h1>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">is_active</th>
                    <th scope="col">back</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->description }}</td>

                    @if ($data->is_active == 1)
                        <td><span class="text-success">active</span></td>
                    @else
                        <td><span class="text-danger">no active</span></td>
                    @endif
                    <td><a href="{{ route('post.index') }}" class="btn btn-success">Back</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
