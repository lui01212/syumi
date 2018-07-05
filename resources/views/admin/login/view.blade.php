<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <link rel="author" href="humans.txt"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="col-md-6 col-xs-offset-3" style="margin-top:100px;">
                <form action="" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Login
                      </div>
                      <div class="panel-body">
                        <div class="col-md-12" style="margin-top: 5px; color: #1997F8;">
                          <div class="col-md-4">
                            Username
                          </div>
                          <div class="col-md-8">
                            <input type="text" name="user" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px;color:#1997F8;">
                          <div class="col-md-4">
                            Password
                          </div>
                          <div class="col-md-8">
                            <input type="password" name="password" class="form-control">
                          </div>
                        </div>
                        <!-- <?php echo Hash::make("123"); ?> -->
                        <!-- nút submit -->
                        <div class="col-md-12" style="margin-top: 5px; color: black;">
                          <div class="col-md-3 col-xs-offset-4">
                          <input type="submit" class="btn btn-info" value="Login">
                          </div>
                        </div>
                      </div>
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                    </div>
            </form>
          </div>
    </body>
</html>