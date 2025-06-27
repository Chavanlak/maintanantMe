<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            background-color: #ffffff;
            background-image: url('images/fujihead1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            /* font-family: Arial, sans-serif; */
            font-family: "Inter", sans-serif;
            justify-content: center;
            display: flex;
        }

        h4 {
            color: #2c3e50;
            text-align: center;
            margin-top: 20px;
        }


        .container {
            position: relative;

        }

        .login-box {
            background-color: white;
            /* margin: 30px auto; */
            padding: 30px;
            border-radius: 10px;
            max-width: 850px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: auto;
            position: absolute;
            top: 30%;
            justify-content: center;
            /* width: 100%; */
        }
        .footer-logo{
            /* position: fixed;; */
            bottom: 10px;
            /* left: 50%; */
            transform: translateX(-50%);
        
            margin-left: auto;
        }
    </style>
</head>

<body>
    <div class="container login-box row align-items-center">
        <form>
            <div class="mb-3 row align-items-center">

                <div class="mb-3 row align-items-center">
                    <label for="branch" class="col-sm-3 col-form-label text-end">สาขา</label>
                    <div class="col-sm-3">
                        <select class="form-select" id="branch" name="branch" required>
                            <option value="" selected>เลือกสาขา</option>
                            <option value="001">F40</option>
                            <option value="002">POS</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row align-items-center">
                    <label for="user" class="col-sm-3 col-form-label text-end">USER</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="user" name="user"
                            placeholder="ชื่อผู้ใช้" style="height: 50px;" required>
                    </div>

                </div>

                <div class="mb-4 row align-items-center">
                    <label for="password" class="col-sm-3 col-form-label text-end">PASSWORD</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="รหัสผ่าน" style="height: 50px;" required>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-start gap-3"> --}}
                {{-- <div class="d-flex justify-content-start gap-2 ps-5">  --}}
                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-center ps-6"> --}}
                <div class="d-flex justify-content-start gap-2" style="margin-left: 200px;">
                    <button type="submit" class="btn btn-primary px-4"
                        style="width: 100px; height:50px;">Login</button>
                    <button type="reset" class="btn btn-secondary px-4"
                        style="width: 100px; height:50px;">Cancel</button>
                </div>

            </div>

        </form>
    </div>
<div class="footer-logo">
    <img src="images/tgilogo.png" alt="TGI Logo" class="footer-logo">

</div>

</body>

</html>
