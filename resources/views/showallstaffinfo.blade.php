<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Staff Information</h1>
    <table border="1">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                {{-- <th>Level</th> --}}

            
            </tr>
        </thead>
        {{-- <tbody>
            @foreach ($staffinfo as $staff)
                <tr>
                    <td>{{ $staff->MStaffInfo_FirstName }}</td>
                    <td>{{ $staff->MStaffInfo_Lastname }}</td>
                    <td>{{ $staff->MStaffInfo_Level }}</td>
          
                </tr>
            @endforeach
        </tbody> --}}
        <tbody>
            @foreach ($userList as $user)
                <tr>
                    <td>{{ $user->FirstName}}</td>
                    <td>{{ $user->LastName}}</td>
                    {{-- <td>{{ $staff->MStaffInfo_Level }}</td> --}}
          
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $staffs->links() }} --}}
</body>
</html>