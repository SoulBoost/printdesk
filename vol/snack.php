
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>
<body>
    
</body>
</html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://bootstraptema.ru/plugins/2016/snackbarjs/snackbar.min.css" />
<script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2016/snackbarjs/snackbar.min.js"></script>
<link rel="stylesheet" href="style.css" />
<style>
    .snackbar {
    background-color: #323232;
    color: #FFFFFF;
    font-size: 20px;
    border-radius: 2px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    height: 0;
    -moz-transition: -moz-transform 0.2s ease-in-out, opacity 0.2s ease-in, height 0 linear 0.2s, padding 0 linear 0.2s, height 0 linear 0.2s;
    -webkit-transition: -webkit-transform 0.2s ease-in-out, opacity 0.2s ease-in, height 0 linear 0.2s, padding 0 linear 0.2s, height 0 linear 0.2s;
    transition: transform 0.2s ease-in-out, opacity 0.2s ease-in, height 0 linear 0.2s, padding 0 linear 0.2s, height 0 linear 0.2s;
    -moz-transform: translateY(200%);
    -webkit-transform: translateY(200%);
    transform: translateY(200%);
   }
   .snackbar.snackbar-opened {
    padding: 14px 15px;
    margin-bottom: 20px;
    height: auto;
    -moz-transition: -moz-transform 0.2s ease-in-out, opacity 0.2s ease-in, height 0 linear 0.2s;
    -webkit-transition: -webkit-transform 0.2s ease-in-out, opacity 0.2s ease-in, height 0 linear 0.2s;
    transition: transform 0.2s ease-in-out, opacity 0.2s ease-in, height 0 linear 0.2s, height 0 linear 0.2s;
    -moz-transform: none;
    -webkit-transform: none;
    transform: none;
   }
   .snackbar.toast {
    border-radius: 200px;
   }
   .alertify, .alertify-logs {
    z-index: 99;
   }
   
   .alertify input {
    border: 2px solid #9ca8b3;
   }
   
   .alertify-logs > .success {
    background-color: #02c58d;
    color: #ffffff;
   }
   
   .alertify-logs > .error {
    background-color: #fc5454;
    color: #ffffff;
   }
   
   .alertify-logs > *, .alertify-logs > .default {
    background-color: #30419b;
   }
</style>
<script>
    $(function() {
    $.snackbar({content: "Выберите нужный принтер и нажмите кнопку - Подключить", timeout: 10000});
    });
    </script>
