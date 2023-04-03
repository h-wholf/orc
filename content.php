
<div class="titulo2"><center>ORC CHECKER V1</center>
<br>

<div class="contenido">
  <textarea class="text" oninput="autoAjustar(this)" placeholder="AQUI PUEDES PEGAR LOS DATOS IMPORTANTES COMO BINS CCS LIVES"  id="ccs"></textarea>
  <br>
<button class="boton2" onclick="copyToClipboard('ccs')">Copiar al portapapeles</button>

<br>
<input class="inputBox" placeholder="456876 INGRESAR BIN DE 6 A 15 DIGITOS" type="text" id="bin">
<p><button class="boton2" onclick="gen()">GENERAR CCS</button>  <button class="boton2" onclick="copyToClipboard('cajaDeTexto')">CCOPIAR CCS </button></p>


	<textarea class="text" oninput="autoAjustar(this)" placeholder="AQUI APARECEN LAS CCS GENERADAS" id="cajaDeTexto"></textarea>


	<textarea class="text" oninput="autoAjustar(this)" placeholder="AQUI INFORMACIÓN SOBRE EL BIN" id="cajaDeTexto"></textarea>
</div>




<div>
	<input class="inputBox" type="text" id="url" placeholder="Introduce la URL">
	<button class="boton2" onclick="agregarUrl()">Agregar URL</button>
	<br><br>
	<iframe class="contenido" id="miIframe" width="90%" height= "400px" ></iframe>
</div>




<style>
  .navbar {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
  }
</style>
</head>
<body>

<div class="navbar">
  <p placeholder" LA INFORMACIÓN DEL BIN APARECE AQUI"> bin</p>
</div>