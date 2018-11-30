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
    <form class="form-horizontal" method="POST" action="{{ route('2fa') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="one_time_password" class="col-md-4 control-label">One Time Password</label>

            <div class="col-md-6">
                <input id="one_time_password" type="number" class="form-control" name="one_time_password" required autofocus>
            </div>
        </div>

        <div class="form-horizontal">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </div>
    </form>


  </body>
</html>