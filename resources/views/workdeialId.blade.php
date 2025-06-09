<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Maintenant</title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">workdetailId</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($workDetail as $status)
                <tr>
                    <td>{{ $status->workdetailId }}</td>
                    <td>{{ $status->statusName }}</td>
                </tr>
            @endforeach
            {{-- @forelse ($workDetail as $status)
            <tr>
                <td>{{ $status->workdetailId }}</td>
                <td>{{ $status->statusName }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No work detail records found.</td>
            </tr>
        @endforelse --}}
        </tbody>


    </table>
</body>

</html>
