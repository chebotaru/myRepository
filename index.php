<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Код блочного сайта</title>
<style>
body{
  background:#c0c0c0;
}
#wrapper{
  width: 900px;
  margin: 0 auto;
  background:#f2e8c9;
}
#header{
position:relative;
  height: 250px;
  background-color: #ffffff;
   margin-bottom: 5px;
  border-radius: 5px;
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px;
}
img{
float: left;
  margin: -40px 0 0 0;}
h1{
  margin:0 0 10px 40px;
  color:#464451;
}
.nomer{
  position:absolute;
  top:5px;
  left:680px;
  font-size: 25px;
  font-style:italic;
  font-weight:bold;
  color:#464451;
}
#sidebar{
  background-color: #ffffff;
  width: 180px;
  padding: 10px;
  float: right;
  border-radius: 5px;
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px;
}
.marcer{
  float: left;
  margin: 5px 5px 0 0;
}
#content{
  margin-bottom: 5px;
  width: 676px;
  padding: 10px;
  background: #ffffff;
  border-radius: 5px;
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px;
}
.left{
  float: left;
  margin: 30px 7px 7px 7px;
}
.right{
  float: right;
  margin: 7px 0 7px 7px;
}
#footer{
  height:80px;
  background-color: #ffffff;
  margin-bottom: 10px;
  border-radius: 5px;
  box-shadow: rgba(0,0,0,0.5) 0px 1px 3px;
}
.clear{
  clear: both;
}
  .fon{ /* Номер телефона */
  float:left;
  margin:20px 0 0 20px;
}
.fax{
  float:left;
  margin:20px 0 0 60px;
}
.mail{
  float:left;
 margin:20px 0 0 60px;
}
</style>
</head>

<body>
  <div id="wrapper">
    <div id="header">
      <h1>Грузоперевозки</h1>
        <p class="nomer">234-49-50 <br> +7 900 650 33 45</p>
      <img src="http://trueimages.ru/img/cf/26/9116df15.png">
    </div>

    <div id="sidebar">
      <h3>На нашем сайте</h3>
        <p><img class="marcer" src="http://trueimages.ru/img/99/91/dea39f15.png" width="10" height="10">Наши сотрудники</p>
        <p><img class="marcer" src="http://trueimages.ru/img/99/91/dea39f15.png" width="10" height="10">Наша техника</p>
        <p><img class="marcer" src="http://trueimages.ru/img/99/91/dea39f15.png" width="10" height="10">Прайс</p>
          <hr width="50" color="#037FFC" size="5">
      <h3>Другая информация</h3>
    </div>

    <div id="content">
      <img class="left" src="http://trueimages.ru/img/81/90/b1718f15.png">;
        <h3>Наша работа</h3>
<p>Здравствуйте уважаемые будущие веб-мастера!</p>
<p>Здесь«разжеваны» все мелочи сопровождающие создание сайта.</p>
<p>Этот сайт будем писать на php.</p>
    </div>
  <div class="clear"></div>

<!--Подвал-->
    <div id="footer">
      <p class="fon"><strong>Телефон:<br> 265-48-76</strong> </p>
      <p class="fax"><strong>Факс:<br> 265-85-97</strong></p>
      <p class="mail"><strong>E-mail<br>ctoto@mail.ru</strong></p>
    </div>
  </div>
</body>
</html>