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
            <label for="datepicker" class="form-label">วันที่ทำรายการ</label>
            <input type="date" type="date" name="date" class="form-control" id="date" required>
        </div> --}}
        <div class="mb-3">
            <label for="datepicker" class="form-label">วันที่ทำรายการ</label>
            <input type="text" name="datesave" class="form-control" id="date" placeholder="วันที่ทำรายการ" required >
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

