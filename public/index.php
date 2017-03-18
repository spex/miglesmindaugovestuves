<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Miglės ir Mindaugo vestuvės</title>
	<link href="https://fonts.googleapis.com/css?family=Sansita
|Bad+Script|Italianno|Pinyon+Script" rel="stylesheet">
  <style type="text/css">
	html { 
		 
		  background: #03120f url(bg.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		  font-size: 36px;
		  max-width: 100%;
		 /*overflow-x: hidden;*/
     height: 100%;

	}	
	
	h1 {
		margin: 0.2em auto;
	}
	
	body {
		font-family: 'Italianno', cursive;
		font-size: 1.0em;
		color: white;
		margin: 0;
		position:relative;
	}
  
	button, input {
		font-family: 'Italianno', cursive;
		font-size: 1.0em;
		color: white;
	}
	
	
	
	   #main-container {
			width:400px;
			margin: 30px auto 0;
			display:block;
			position:relative;
     height:100%;
     
	   }
   
	#form-container, #thank-you  {
		z-index:1000;
		//background:rgba(100, 100, 100, 0.4);
		min-height: 500px;
		display: block;
		position:relative;
		padding: 10px;
		text-align: center;
		border-radius: 10px;
	}
	
	#thank-you {
		padding-top: 100px;
		min-height: 300px;
	}
   
	#totoro {
		z-index:50;
		width: 200px;
		position: absolute;
		bottom:10px;
		left:-210px;
	}
	#dustBuuny {
		z-index: 50;
		width: 200px;
		position: absolute;
		bottom:10px;
		right:-210px;
	}
   
	#totoro img,  #dustBuuny img {
		width: 200px;
		-webkit-filter: grayscale; /*sepia, hue-rotate, invert....*/
		-webkit-filter: brightness(5%); 
	}
	
	#totoro.active img,  #dustBuuny.active img {
		width: 200px;
		-webkit-filter: grayscale; /*sepia, hue-rotate, invert....*/
		-webkit-filter: brightness(100%); 
	}
	
	label {
		display:block;
		position:relative;
	}
	
	label.inline {
		display: inline;
	}
	
	.forRadio, button, button:focus{
		margin: 0 20px;
		background: #497d74;
		padding:8px 25px 5px 25px;
		border:none;
		border-radius: 20px;
		cursor: pointer;
		outline:none;
	}
	
	.forRadio:hover, button:hover {
		background: #76afa5;
	}
	
	.form-input {
		background: rgba(137, 148, 140, 0.4);
		border-radius: 10px;
		text-align: center;
		width: 100%;
		margin: 20px 0;
		position:relative;
	}
	.form-input:hover {
		background: rgba(157, 167, 159, 0.56);
	}
	
	input[type="text"]{
		background: none;
		color: #FFF;
		border: none;
		font-family: 'Italianno', cursive;
		font-size: 1.0em;
		text-align: center;
		width: 100%;
		margin: 10px 10px;
	}
	
	.form-input::after {
		width:90%;
		border-bottom: 1px solid #ccc;
		height:1px;
		position:absolute;
		bottom: 26px;
		display:block;
		content:'';
		margin: 0 5%;
	}
	
	input[type="text"]:focus {
		border: none;
		outline:none;
	}
   
	input[type="radio"] {
		display:none;
	}
	
	input[type="radio"] + span {
		color: #000;
	}
	
	input[type="radio"]:checked + span {
		color: #FFF;
	}
	
	.forRadio.balanceRight {
		padding: 8px 27px 5px 20px;
	}
	
	.radio-container {
		margin: 20px 0;
	}
	
	hr {
		border-style: solid;
		border-width: 1px;
		border-top: 0;
		border-left: 0;
		border-right: 0;
		margin: 50px 0;
	}
	
	.invisible {
		display:none !important; 
	}
	
	@media (max-width: 425px) {
		html {
			font-size: 35px;
		}
		#main-container {
			width: 100%;
			margin: 10px 0;
     overflow: hidden;
		}
		
		#totoro {
			left:-100px;
			bottom:-15px;
		}
		#dustBuuny {
			right:-50px;
			bottom:-26px;
		}
	   
		#totoro.active,  #dustBuuny.active {
			z-index:51;	
		}
	}

	
	
	
   
  </style>
  </head>
  <body>
  
	  <div id="main-container">
		  <form id="form-container" method="post" target="invite_create.php">
			  <h1>Sveiki!</h1>
			  <p>Maloniai kviečiame jus sudalyvauti mūsų vestvių šventėje!</p>
			  <p>Šventės Data:<br> 2017m. Rugpjūčio 26d. </p>
			  <label for="name"> 
				Jūsų Vardas ir Pavardė:
				<div class="form-input"><input type="text" name="name" id="name"/></div>
			  </label>
			  <label>Ar galėsite dalyvauti?</label>
			  <div class="radio-container">
				  <label class="inline forRadio" for="willAttendYes"> 
					 <input type="radio" name="willAttend" id="willAttendYes" value="Yes">
					 <span>Taip</span>
				  </label>
				  <label class="inline forRadio balanceRight" for="willAttendNo"> 
					 <input type="radio" name="willAttend" id="willAttendNo" value="No">
					 <span>Ne</span>
				  </label>
			  </div> 
			  <hr/>
			  <button id="#submit">Patvirtinti</button>
			  <div id="err-container">
			  </div>
		  </form>
		  <div id="thank-you" class="invisible">
		  <h1> Ačiū už jūsų atsakymą!</h1>
		  </div>
		  <div id="totoro">
			<img src="totoro.png" alt="Happy Totoro!">
		  </div>
		  <div id="dustBuuny">
			<img src="dustBunny.png" alt="Dust Bunny, waving goodbye">
		  </div>
	  </div>
  
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous">
	</script>
	<script type="text/javascript">
			if(!console){
				console = {log: function() {}};
			}
			$(autorun);
		   
		   
			function autorun()
			{
				var willAttendRadios = $("[name='willAttend']");
				var form = $("#form-container");
				willAttendRadios.each(function(i, radio) {
					$(radio).change(onWillAttendClick);
				});

				form.submit(submitForm);

			}
			
		   
			function onWillAttendClick(e) {
				var totoro = $("#totoro")
				var dustBunny = $("#dustBuuny")	
			
				switch(e.target.value){
					case "Yes":
						totoro.addClass("active");
						dustBunny.removeClass("active");
					break;
					case "No":
						totoro.removeClass("active");
						dustBunny.addClass("active");
					break;
				} 
			}

			function submitForm (e) {
				e.preventDefault();
				var form = $("#form-container");
				
				$.post("invite_create.php", 
					getFormObj("form-container"),
					onFormSuccess
				)
				
			   return false;
			}
		   
		   
		   
			function onFormSuccess(r){
				var result = JSON.parse(r);
				console.log(result);
				if(result.success){
					$("#thank-you").removeClass("invisible");
					$("#form-container").addClass("invisible");
				} else {
					$("#err-container").html("Prašome užpildyti visus laukus!");
				}
				
			}
			
			function getFormObj(formId) {
				var formObj = {};
				var inputs = $('#'+formId).serializeArray();
				$.each(inputs, function (i, input) {
					formObj[input.name] = input.value;
				});
				return formObj;
			}
	</script>
  </body>
</html>