<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>notirepair</title>
</head>

<body>
    {{-- <form action="/statuspost" method="POST"> --}}
        <form>
        <div class="mb-3">
            <label for="" class="form-label">Equipment</label>
            <input type="" class="form-control" id="" aria-describedby="">
            <div id="" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        {{-- <div class="mb-3">
            <label for="" class="form-label">date</label>
            <input type="" class="form-control" id="">
        </div> --}}
        {{-- <DatePicker label="Basic date picker" /> --}}
        <form>
            <label>
             วันที่ทำรายการ:
              <input type="date" name="party" min="2017-04-01" max="2017-04-30" />
            </label>
          </form>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">user</label>
            <input type="" class="form-control" id="">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</body>

</html>
