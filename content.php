
<div class="titulo"><center>ORC CHECKER V2</center>
</div>
<br>

<div class="contenido">
  <textarea class="text" oninput="autoAjustar(this)" placeholder="AQUI PUEDES PEGAR LOS DATOS IMPORTANTES COMO BINS CCS LIVES"  id="ccs"></textarea>
<button class="boton2" onclick="copyToClipboard('ccs')">COPIAR INFO AL PORTAPAPELES </button>

<br>
<input class="inputBox" placeholder="456876 INGRESAR BIN DE 6 A 15 DIGITOS" type="text" id="bin">
<p><button class="boton2" onclick="gen()">GENERAR CCS</button>  <button class="boton2" onclick="copyToClipboard('cajaDeTexto')">COPIAR CCS </button></p>




	<textarea class="text" oninput="autoAjustar(this)" placeholder="AQUI APARECEN LAS CCS GENERADAS" id="cajaDeTexto"></textarea>

 	<input class="inputBox" placeholder="ingresa el bin "type="text" id="bininfo">

	<button class="boton2" onclick="bin()">BIN INFO </button>


	<iframe id="ifrapais" placeholder="INGRESA LA CLABE EL PAIS" class="iframe" src=""></iframe>
	<script>
		function bin() {
		  var cod = 'bin.php?argument1=';
			var inputValue = document.getElementById("bininfo").value;
			var link = cod + inputValue;
			document.getElementById("ifrapais").src = link;
			
		}
	</script>

	
	
	
	<input class="inputBox" placeholder="INGRESAR LA URL DEL CHEKER"type="text" id="inputValue">

	<button class="boton2" onclick="sendValue2()">CHECKER</button>
	<iframe id="myIframe" class="iframe" src=""></iframe>
	<script>
		function sendValue2() {
		  var cod = 'addres.php?argument1=';
			var input = document.getElementById("inputValue").value;
			
			document.getElementById("myIframe").src = input;
			
		}
	</script>

	
	<input class="inputBox" placeholder="INGREA LA CLABE DEL PAIS QUE DESEAS GENERAR ID"type="text" id="inputpais">
	<button class="boton2" onclick="pais()">GENERAR ID </button>

	<iframe id="pais" placeholder="INGRESA LA CLABE EL PAIS" class="iframe" src=""></iframe>
	<script>
		function pais() {
		  var cod = 'addres.php?argument1=';
			var inputValue = document.getElementById("inputpais").value;
			var link = cod + inputValue;
			document.getElementById("pais").src = link;
			
		}
	</script>

</div>




<br>




</head>
<body>

