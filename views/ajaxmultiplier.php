<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Tutorial</title>
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
                margin-left: 15px;
            }

        </style>
       <!-- JavaScript -->
        <script type="text/javascript">
        $(document).ready(function(){
               $("#submit").click(function(event)
               {
                // set event.preventDefault to override default post tag post, ensuring post goes through ajax
                    event.preventDefault();
                    var num1 = $("#value1").val();
                    var num2 = $("#value2").val(); 
                    // ajax
                    $.ajax(
                    {
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "ajaxmultipliercontroller/multiplier",
                        dataType: 'json',
                        // data is passed to controller
                        data: {number1:num1 , number2:num2},
                        // on successful return from controller
                        success: function(result) 
                        {
                            $('#result').val(result);
                            // .val sets returned result to result-textfield
                        },
                        // on error
                        error: function()
                        {
                            alert("Some errors occured. Try again");
                        }

                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- form-inline is used to list inputs in a line -->
                    <form class="form-inline">
                        <div class="form-group input_block">
                            <input type="text" class="form-control" id="value1" placeholder="enter number">
                            <input type="text" class="form-control" id="value2" placeholder="enter number">
                            <input type="submit" class="form-control" id="submit" value="Multiply">
                            <input type="text" class="form-control" id="result">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>