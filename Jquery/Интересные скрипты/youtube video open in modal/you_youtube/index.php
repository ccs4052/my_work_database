<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="default.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
</head>
<body>

<div class="container">
    <div style="height: 200px" class="row">

    </div>
    <div style="float: none;margin:0 auto;" class="col-lg-6">
        <table class="table table-bordered">
            <tr>
                <td>
                    1
                </td>
                <td>видео один</td>
                <td><a id="link"  style="border: none;background-color: inherit" href="https://www.youtube.com/watch?v=O4BRY0c29DI" class="glyphicon glyphicon-play-circle"></a></td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>видео два</td>
                <td><a id="u_b"  style="border: none;background-color: inherit" href="https://www.youtube.com/watch?v=PgRMzKnpXd0" class="glyphicon glyphicon-play-circle"></a></td>
            </tr>
        </table>




    </div>
</div>





<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div style="width: 640px" class="modal-dialog" role="document">
        <div class="modal-content">
            <div style="position: absolute;right: 0px" class="modal-header">
                <button style="position: absolute;z-index: 500;top: 0px;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id="f_cont" style="text-align: center;width: 640px;height: 360px;padding: 0px" class="modal-body">

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>