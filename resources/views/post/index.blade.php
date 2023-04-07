<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <title>Index</title>
</head>

<body class="bg-dark">

    <div class="w-50 p-3 mx-auto">
        <a href="{{ route('post.create') }}" class="btn btn-primary">Add</a>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">View</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</Del></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $val)
                    <tr>
                        <th>{{ $val->id }}</th>
                        <td>{{ $val->name }}</td>
                        <td>{{ $val->description }}</td>

                        @if (($val->is_active) == 1)
                            <td><span class="text-success">active</span></td>
                        @else
                            <td><span class="text-danger">no active</span></td>
                        @endif

                        <td><a href="{{ route('post.show', $val->id) }}" class="btn btn-success">View</a></td>
                        <td><a href="{{ route('post.edit', $val->id) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="{{ route('post.destroy', $val->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Sure Delete?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>
<script>
    < link rel = "stylesheet"
    href = "{{ asset('css/bootstrap.js') }}" >
</script>

</html>
