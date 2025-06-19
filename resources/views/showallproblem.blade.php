<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>report</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">reportProblemId</th>
                <th scope="col">reportProblemtype</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reportProblemList as $m)
            <tr>
                <td>{{ $m->reportProblemId }}</td>
                <td>{{ $m->reportProblemtype }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>