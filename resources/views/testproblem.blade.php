<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forms - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
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

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
</head>
<body>
    <form action="/postmessage" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">ProblemReport</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        
                    </div>
                    <div class="form-group">
                        <label for="smallSelect">เเจ้งปัญหาใหม่</label>
                        <select name="reportProblemId" 
                          class="form-select form-control-sm"
                          id="smallSelect"

                        >
                          {{-- <option>เเจ้งทั่วไป</option>
                          <option>เเจ้งซ่อมอุปกรณ์ไอที</option>
                          <option>เเจ้งสั่งซื้ออุปกรณ์</option> --}}
                          @foreach($reportProblemList as $problem)
                          <option value="{{$problem->reportProblemId}}">{{$problem->reportProblemtype}}</option>
                          @endforeach
                        
                        </select>
                        {{-- <input type="text" id="smallInput" class="form-control form-control-sm"> --}}
                      </div>
                    <div class="form-group">
                      
                        <label for="smallInput">หัวข้อเรื่อง</label>
                        <input type="text" class="form-control form-control-sm" id="smallInput"
                            {{-- placeholder="หัวข้อเรื่อง" --}} name="title" readonly/>
                    </div>
                    {{-- <form action=""> --}}
                    {{-- <div class="form-group">
                        <label>สถานะร้านค้า(สาขา)</label><br />
                        <div class="d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="flexRadioDefault" id="flexRadioDefault1" />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    ปกติ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="flexRadioDefault" id="flexRadioDefault2" checked />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    เปิดร้านใหม่
                                </label>
                            </div>
                        </div>
                    </div> --}}
                {{-- </form> --}}
    
    
    
                    <div class="form-group">
                        <label for="comment">รายละเอียดปัญหา</label>
                        <textarea class="form-control" id="detailcomment" rows="5" name="detailcomment">
          </textarea>
                    </div>
                    <div class="form-group">
                        <label for="user" class="form-label">ผู้แจ้ง</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    {{-- <div class="form-group">
                        <label class="control-label"> ชื่อผู้เเจ้ง</label>
                        <p class="form-control-static">ชวัลลักษณ์</p>
                    </div> --}}
                   
                </div>
                <div class="card-action">
                    <button class="btn btn-success">บันทึก</button>
                    <button class="btn btn-danger">ยกเลิก</button>
                  </div>
    
                <!-- End Custom template -->
            </div>
        </div>
    </div>
   
    </form>
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    
 @endif

</body>
<script>
    document.getElementById('smallSelect').addEventListener('change', function(e) {
      // ข้อความที่เลือก
      const selectedText = e.target.options[e.target.selectedIndex].text;
      // อัปเดต input ให้ตรงกัน
      document.getElementById('smallInput').value = selectedText;
    });
  </script>
  