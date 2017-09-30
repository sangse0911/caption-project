<!DOCTYPE html>
<html>

<head>
    <title>User</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <h3 class="panel-title">aaa<a href="#" class="pull-right"><i class="fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i></a></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-striper">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Balance</th>
                                <th>Account Status</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td class="info" data-toggle="modal" data-target="#myModal">{{ $user->id }}</td>
                                <td class="info" data-toggle="modal" data-target="#myModal">{{ $user->name }}</td>
                                <td class="info" data-toggle="modal" data-target="#myModal">{{ $user->account_balance }}</td>
                                <td class="info" data-toggle="modal" data-target="#myModal">{{ $user->account_status }}</td>

                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="" class="form-control" id="user-id" readonly="true">aaa
                            <input type="text" name="" class="form-control" id="user-name">
                            <input type="text" name="" class="form-control" id="user-account_balance">
                            <input type="text" name="" class="form-control" id="user-account_status">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="delete" data-dismiss="modal">Delete</button>
                            <button type="button" class="btn btn-primary" id="save">Save changes</button>
                            <button type="button" class="btn btn-default" id="add">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('.info').each(function() {
            $(this).click(function(event) {
                $('#user-id').val($(this).closest("tr").find('td:eq(0)').text());
                $('#user-name').val($(this).closest("tr").find('td:eq(1)').text());
                $('#user-account_balance').val($(this).closest("tr").find('td:eq(2)').text());
                $('#user-account_status').val($(this).closest("tr").find('td:eq(3)').text());

            });
        });
    });
    </script>
</body>

</html>
