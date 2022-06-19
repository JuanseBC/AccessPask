<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/registro5.css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="img" href="../img/pask.png" size="any">
</head>

<body >
<class="scroll"> 
  <form action="../db/concur.php" method="post" autocomplete="off." class="logInForm">

 
    
  <IMG class="img_principal" SRC="../img/persona.jpg" >
  <?php
        $con= mysqli_connect ('localhost','root','','accesspask');
        $consulta= "Select * from rol ";
        $filas=mysqli_query($con, $consulta);
        $name=$_POST['idRol'];
  ?>
      <div class="registro">
          REGISTRAR USUARIO
      </div>
      <label for="rol" class="rol-text">ROL</label>
      <select name="Rol" id="Rol" required class="select rol">
      <option selected disabled value="">Seleccione Rol</option>
      <?php
         while ($Rol=mysqli_fetch_array($filas))
         {
           echo "<option value='".$Rol['idRol']."'>" . $Rol["Rol"] . "</option>";
         }
       ?>
     </select>
      <div id="salon"></div> 
      <?php
         $consulta= "Select * from cursos_ ";
         $filas=mysqli_query($con, $consulta);
         echo "<select name='Curso' class='select2 tam'>";
       while ($cursos=mysqli_fetch_array($filas)){
        echo "<option>"  . $cursos["idCurso"] .  "</option>";
       }
    echo "</select>";
      ?>
      <div class="text">
          <br>Nombre
      </div>
      <input type="text" name="nom" placeholder="Nombre"  class="nom2" required>
      <div class="text">
           Apellido
     </div>
     <input type="text" name="apellido" placeholder="Apellido"  class="apell2" required>
     <label for="doc" class="doc-text">Tipo de Documento</label>
     <select name="Doc" id="doc" required class="select doc">
      
        <option selected disabled value="">Tipo de Documento </option>
        <option value="1"> C.C</option>
        <option value="2"> T.I</option>
        <option value="3"> C.E</option>
      </select>
      <div class="text">
          N° Documento
      </div>
      <input type="text" name="documento" placeholder="Número" class="doc3"required>
      <label for="TC" class="doc-text">Tipo de correo</label>
      <select name="TC" id="TC" required class="select doc">
        <option selected disabled value="">Tipo de correo </option>
        <option value="1"> Institucional</option>
        <option value="2"> Personal</option>
      </select>
      <div class="text">
          Correo
      </div>
      <input type="text" name="correo" placeholder="accesspask@gmail.com" class="doc3"required>
      <div class="text">
          Clave
        </div>
      <input type="password" name="clave" placeholder="Digite la clave" class="clave2" required>
      <button class="SigIn" type="submit"  value="submit" >Registrar</button> </td>
      </div>
      <div class="menu"> <br>
        <ul>
          <li><a href="../vistas/ADM.php">
                  Regresar</a></li>
        </ul>
      </div>
<div class="CosaFea">
  <h5> Access.Pask WEB &copy; 2022 
</h5>
</div>
  </form>
</body>
</html>