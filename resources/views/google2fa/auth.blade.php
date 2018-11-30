<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/app.css">
  <script src="./js/app.js"></script>
  <title>W&S Backend Task</title>
</head>

<body>
  <div class="code-generation">
    <div class="full-width">
      <h1>Generate Code</h1>

      {{-- <p>Click the button below to generate a One-time password to continue.</p> --}}

      {{-- <button onclick="generateCode()">Generate Code</button> --}}
      {{-- <p><small><em>In case you forgot the secret key, here it is: {{$secret}}</em></small></p> --}}

      <div class="panel-body" style="text-align: center;">
        <p>Set up your two factor authentication by using this code <span style="background-color:aqua">{{ $secret }}</span></p>
      </div>
      <p>Set up your two factor authentication by scanning the barcode below</p>
      <h1 class="generated-code">
        <img src="{{$QR_Image}}" alt="" class=""> 
      </h1>

      After you've scanned the bar code, click below to continue      <!-- /Generated code ends here-->

      <a href="/complete-registration" class="btn btn-primary">Complete Registration</a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

</body>

</html>