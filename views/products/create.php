<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Crear producto</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     </head>
     <body>
          <?php include("../partials/header.php"); ?>
          <main>
               <form>
                    <input type="text" id="name" placeholder="Nombre de producto">
                    <input type="number" id="price" placeholder="Precio">
                    <textarea id="description" placeholder="Describe el producto"></textarea>
                    <select class="" name="">
                         <option value="1">Pizzas</option>
                         <option value="2">Pastas</option>
                         <option value="4">Ensaladas</option>
                    </select>
                    
                    <button type="button" onclick="save()">Registrar</button>
               </form>
          </main>

          <script type="text/javascript">
			function save() {
				var xhr = new XMLHttpRequest();
				var url = 'http://localhost/mvc-php/controllers/ProductsController.php';
				xhr.open('POST', url, true);
                    var data = new FormData();

                    var name = document.querySelector("#name").value;
                    var price = document.querySelector("#price").value;
                    var description = document.querySelector("#description").value;

                    data.append('name', name);
                    data.append('price', price);
                    data.append('description', description);
                    data.append('action', "create");

				xhr.addEventListener('loadend', function() {
                         console.log(xhr.responseText);
                         document.querySelector("#name").innerHTML = "";
				});
				xhr.send(data);
			}
	  	</script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     </body>
</html>
