<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <div>
        <label for="smallSelect">เเจ้งปัญหาใหม่</label>
        <select name="messageId" id="smallSelect" class="form-select form-control-sm">
            @foreach ($problemList as $problem)
            <option value="">{{$problem->reportProblemtype}}</option>
            
            @endforeach
        </select>
    </div> --}}
    {{-- //////////////////////// --}}
    {{-- <form action="/post" method="POST">
        @csrf
    
        <div>
            <label for="smallSelect">แจ้งปัญหาใหม่</label>
            <select id="smallSelect" class="form-select form-control-sm" required>
                <option value="">-- กรุณาเลือกปัญหา --</option>
                @foreach ($problemList as $problem)
                    <option value="{{ $problem->reportProblemtype }}">{{ $problem->reportProblemtype }}</option>
                @endforeach
            </select>
        </div>
    
        
        <div>
            <label for="smallInput">หัวข้อเรื่อง</label>
            <input type="text" class="form-control form-control-sm" id="smallInput" name="title" value="{{ $message->title}}"/>
            
        </div>
        <div class="form-group">
            <label for="comment">รายละเอียดปัญหา</label>
            <textarea class="form-control" rows="5" name="detailcomment"></textarea>
        </div>
        <div class="card-action">
            <button class="btn btn-success">บันทึก</button>
            <button class="btn btn-danger">ยกเลิก</button>
          </div>
    </form> --}}
    <form action="/post" method="POST">
        @csrf
    
        <div>
            <label for="smallSelect">แจ้งปัญหาใหม่</label>
            <select id="smallSelect" class="form-select form-control-sm" required onchange="updateTitle(this.value)">
                <option value="">-- กรุณาเลือกปัญหา --</option>
                @foreach ($problemList as $problem)
                    <option value="{{ $problem->reportProblemtype }}">{{ $problem->reportProblemtype }}</option>
                @endforeach
            </select>
        </div>
    
        <div>
            <label for="smallInput">หัวข้อเรื่อง</label>
            <input type="text" class="form-control form-control-sm" id="smallInput" name="title" value="{{ $message->title ?? '' }}"/>
        </div>
    
        <div class="form-group">
            <label for="comment">รายละเอียดปัญหา</label>
            <textarea class="form-control" rows="5" name="detailcomment"></textarea>
        </div>
    
        <div class="card-action">
            <button class="btn btn-success" type="submit">บันทึก</button>
            <button class="btn btn-danger" type="button" onclick="history.back()">ยกเลิก</button>
        </div>
    </form>
    

    
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    
 @endif
 @if (session('error'))
    <div class="alert alert-danger mt-3">
        {{ session('error') }}
    </div>
    
  @endif
 
    
</body>
<script>
    function updateTitle(value) {
        document.getElementById('smallInput').value = value;
    }
</script>
</html>

