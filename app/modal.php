<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://bootstraptema.ru/plugins/2016/snackbarjs/snackbar.min.css" />
<script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2016/snackbarjs/snackbar.min.js"></script>

<style>
/* Стили подсказки по умолчанию */
.snackbar {
 background-color: #323232;
 color: #FFFFFF;
 font-size: 14px;
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
</style>


<a href="ARMS.lnk" class="btn btn-default" data-toggle="snackbar"data-content="Это окно вызвано действием клика и закроется через 9 секунд" data-timeout=9000>Вызов при нажатии на ссылку</a>
<br />
<button class="btn btn-default" data-toggle="snackbar" data-content="Это окно вызвано действием клика и закроется через 11 секунд" data-timeout=11000>Вызов при нажатии на кнопку</button>
<br />
<p data-toggle="snackbar" data-content="Это окно вызвано действием клика и не закроется, потому что значение = 0, но закроется если кликнуть по окну" data-timeout=0>Вызов при нажатии на текст</p>
</div>
</div>
</div> 
<script>
$(function() {
$.snackbar({content: "Для подключения принтера нажмите кнопку 'подключить'.", timeout: 10000});
});
</script>