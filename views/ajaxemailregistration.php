<!DOCTYPE html>
<html>
    <head>
        <title>Mail Registration</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .input_block
            {
                margin: 200px 30px 0px 200px;
            }
            .form-control
            {
                margin-top: 10px;
            }
            .result_block
            {
                padding-left: 180px;
                margin-top: 10px;
                text-align: center;
                color: blue;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("#submit").click(function(event)
                {
                    event.preventDefault();
                    var email = $("#email").val();
                    var password = $("#password").val();

                    // ajax
                    $.ajax(
                    {
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "ajaxemailregistrationcontroller/emailregisration",
                        // dataType- return data type from controller
                        dataType: 'html',
                        data: { mail:email, pass_word:password },
                        success: function(result)
                        {
                            // .html for html display
                            $("#result_bar").html(result);
                        },
                        error: function()
                        {
                            alert("Error");
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-2">
                    <form class="form-group input_block">
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                        <input type="submit" class="form-control" id="submit" value="Submit">
                    </form>
                    <!-- result_block used from ajax -->
                    <div class="result_block" id="result_bar">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>