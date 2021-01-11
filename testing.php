<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View Obesity and Population by country</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("form").submit(function () {
                    var item = $("#item").val()
                    $.ajax({
                        type: "GET",
                        url: "http://abc.com/getSpec.php",
                        cache: false,
                        dataType: "JSON",
                        data: "item=" + item,
                        success: function (response) {
                            var message = response.colour + "<b>" + response.name + "</b>";
                            $("#spec").html(message);
                        },
                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        Search Building ID:<br/>
        <input type="text" name="item"/><button>Retrieve</button>
        <br/><br/>
        <span id="spec">
        </span>
    </body>
</html>
