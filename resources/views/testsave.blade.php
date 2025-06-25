<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="form-group">
        <label for="smallSelect">เเจ้งปัญหาใหม่</label>
       
        <select name="messageId" class="form-select form-control-sm" id="smallSelect">
            @foreach($messageList as $problem)
                <option value="{{ $problem->messageId }}">{{ $problem->reportProblemtype }}</option>
            @endforeach
        </select>
        
        {{-- <input type="text" id="smallInput" class="form-control form-control-sm"> --}}
      </div>
   
</body>
</html>