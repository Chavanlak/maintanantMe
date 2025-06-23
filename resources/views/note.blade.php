<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  </head>
    <title>Document</title>
</head>
<body>
    <form action="/statuspost" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="equipmentId" class="form-label">เลือกอุปกรณ์</label>
            <select class="form-select" name="equipmentId" required>
                <option value="">-- กรุณาเลือกอุปกรณ์ --</option>
                @foreach ($eqp as $item)
                
                <option value="{{ $item->equipmentId }}">{{ $item->equipmentname }}</option>
                @endforeach
            </select>
        </div>
    
        {{-- <div class="mb-3">
            <label for="date" class="form-label">วันที่ทำรายการ</label>
           
            <input 
        value="{{ $item->datesave ? \Carbon\Carbon::parse($item->datesave)->format('Y-m-d') : '' }}" 
        type="date" 
        name="date" 
        class="form-control" 
        required
    >
    
        </div> --}}
        <div class="mb-3">
            <label for="date" class="form-label">วันที่ทำรายการ</label>
            <input type="date" type="date" name="date" class="form-control" id="date" required>
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">ผู้แจ้ง</label>
            <input type="text" name="user" class="form-control" required>
        </div>
    
        <button type="submit" class="btn btn-primary">บันทึก</button>
    </form>
    
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    {{-- <h3>ประวัติการแจ้งซ่อม</h3>
    
    @if (!empty($notirepairList) && count($notirepairList) > 0)
    
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>วันที่แจ้ง</th>
                    <th>ผู้แจ้ง</th>
                    <th>รหัสอุปกรณ์</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notirepairList as $repair)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($repair->date)->format('d/m/Y') }}</td>
                        <td>{{ $repair->user }}</td>
                        <td>{{ $repair->equipmentId }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-muted">ยังไม่มีรายการแจ้งซ่อม</p>
    @endif --}}
    </div>
  
</body>
</html>
<script>
    $(document).ready(function() {
   $('#date').datepicker({
     format: 'dd/mm/yyyy',
     todayBtn: 'linked',
     todayHighlight: true,
     autoclose: true
   });
 });
 </script>

{{-- <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แจ้งซ่อมอุปกรณ์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h2>แบบฟอร์มแจ้งซ่อม</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/statuspost') }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="equipmentId" class="form-label">เลือกอุปกรณ์:</label>
            <select name="equipmentId" id="equipmentId" class="form-select" required>
                <option value="">-- เลือก --</option>
                @foreach($eqp as $e)
                    <option value="{{ $e->equipmentId }}">{{ $e->equipmentname }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">วันที่แจ้ง:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="user" class="form-label">ชื่อผู้แจ้ง:</label>
            <input type="text" name="user" id="user" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">บันทึกแจ้งซ่อม</button>
    </form>

    <hr>

    <h3>ประวัติการแจ้งซ่อม</h3>

    @if($notirepairList->isEmpty())
        <p>ยังไม่มีการแจ้งซ่อมสำหรับอุปกรณ์นี้</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>วันที่แจ้ง</th>
                    <th>ชื่อผู้แจ้ง</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notirepairList as $noti)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($noti->date)->format('d/m/Y') }}</td>
                        <td>{{ $noti->user }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Branch Info</title>
</head>
<body>
    <div class="container">
        <h1>ข้อมูลสาขา (Branch Information)</h1>

        {{-- Show branch data --}}
        <p><strong>Branch ID:</strong> {{ $branchId }}</p>

        {{-- OR if $branchId is an object or array --}}
        @if(is_object($branchId) || is_array($branchId))
            <ul>
                @foreach($branchId as $key => $value)
                    <li>{{ $key }}: {{ $value }}</li>
                @endforeach
            </ul>
        @endif

        {{-- Show error message if exists --}}
        @if(session('error'))
            <div style="color:red;">
                {{ session('error') }}
            </div>
        @endif
    </div>
</body>
</html>
