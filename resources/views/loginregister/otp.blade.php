<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mb-3">
        <label for="InputOTP" class="form-label">Email address</label>
        <form action="{{ route('otp-verify') }}" method="post">
            @csrf
            <div class="col-auto">
                <label for="otp">Enter OTP:</label>
                <input type="text" name="otp" id="otp">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Verify OTP</button>
            </div>
        </form>
    </div>
</body>
</html>
