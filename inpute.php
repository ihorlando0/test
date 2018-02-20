<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>haha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form id="form1" >
<div>
    <h1>ANdrana</h1>

    <div>
    manorata hoe :
    <input type="text" id="txttarget" name="texttarget">
    </div>

    <div id="content">
    </div>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript">
       $("document").ready(function()
    {
       $("#txttarget").keyup(function(event)
       {
        $('#content').html(this.value);
       }) ;
    })  ;
       
       
    </script>
</body>
</html>