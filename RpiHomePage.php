

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$('#click1ON').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin1on.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});
				$('#click1OFF').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin1off.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});
        $('#click2ON').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin2on.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});
				$('#click2OFF').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin2off.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});
        $('#click3ON').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin3on.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});
				$('#click3OFF').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin3off.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});

        $('#click4ON').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin4on.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});
				$('#click4OFF').click(function(){
						var a = new XMLHttpRequest();
						a.open("GET","pin4off.php");
						a.onreadystatechange=function(){
								if(a.readyState==4){
										if(a.status == 200){
										}
										else alert(a.status);
								}
						}
						a.send();
				});


		});
	</script>
  <style>

  body{
    font-family: Arial, Helvetica, sans-serif;
  }
  button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border: 3px solid white;
  }

  div{
    width: 100%;
    margin-left: : 5%;

    padding:20px;
    border: 3px solid #4CAF50;
    background-color: #4CAF50;
    color: white;
  }



  </style>


	<title>Pi controller</title>
</head>
<body>
<div id=”buttondiv1”>
  <h3>Lamp 1</h3>
	<button type="button" id="click1ON" class="onButton">ON</button><br>
	<button type="button" id="click1OFF" class"offButton">OFF</button><br>
	</div>
  </br>
<div id=”buttondiv1”>
  <h3>Lamp 2</h3>
	<button type="button" id="click2ON" class="onButton">ON</button><br>
	<button type="button" id="click2OFF" class"offButton">OFF</button><br>
	</div>
  </br>
<div id=”buttondiv1”>
  <h3>Fan</h3>
  <button type="button" id="click3ON" class="onButton">ON</button><br>
  <button type="button" id="click3OFF" class"offButton">OFF</button><br>
  </div>
  </br>
<div id=”buttondiv1”>
  <h3>Night light</h3>
  <button type="button" id="click3ON" class="onButton">ON</button><br>
  <button type="button" id="click3OFF" class"offButton">OFF</button><br>
  </div>
  </br>


</body>
</html>