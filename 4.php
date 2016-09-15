<!DOCTYPE html>
<html>
  	<head>
  		<title>Nýr notandi</title>
      <meta charset="utf-8">	
  	</head>
  	<body>
  		<?php
        include'include/menu.php';
      ?>
		<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Notandanafn" id="username" type="text" class="validate">
          
        </div>
        
      </div>
      
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Lykilorð" id="password" type="password" class="validate">
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Netfang" id="email" type="email" class="validate">
          
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">
    <i class="material-icons right">Senda</i>
  </button>
    </form>
  </div>
  <?php
      /*include'include/footer.php';*/
  ?>
	</body>
</html>