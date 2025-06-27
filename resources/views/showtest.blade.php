<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    <title>Document</title>
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
     <!-- CSS Files -->
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="../assets/css/plugins.min.css" />
     <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
 
</head>
<body>
  
    <form action="/post" method="POST">
        @csrf
        <div>
            <label for="smallSelect">แจ้งปัญหาใหม่ เรื่อง: </label>
            <select id="smallSelect" class="form-select form-control-sm" onchange="updateTitle(this)" name="reportProblemId">
                <option value="" selected>-- กรุณาเลือกปัญหา --</option>
                @foreach ($problemList as $problem)
                    <option value="{{$problem->reportProblemId}}">{{$problem->reportProblemtype}}</option>
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
    function updateTitle(sel) {
        document.getElementById('smallInput').value = sel.options[sel.selectedIndex].text;
        // const dat = document.getElementById('smallSelect').value;
        // console.log(dat);
        // alert(value.options[value.selectedIndex].text);
    }
</script>
</html>

