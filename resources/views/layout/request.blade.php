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
                {{-- <th scope="col">SerialNumber</th> --}}
                <th scope="col">Branch code</th>
                {{-- <th scope="col">status</th> --}}
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($equipment as $item)
                <tr>
                    <td>{{ $item->serialNumber }}</td>
                    <td>{{ $item->serialNumber }}</td>
                </tr>
            @endforeach --}}
            @foreach ($branchList as $branch)
                    <td>{{$branch->branchcode}}</td>
                @endforeach
            {{-- @foreach ($status as $item)
                <td>{{ $item->status }}</td>
            @endforeach --}}
        </tbody>


    </table>
</body>

</html>
