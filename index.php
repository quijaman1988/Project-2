<!DOCTYPE html>
<html>
   <head>
      <title>Manuel Quijano - Project 2</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css" type="text/css" />
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="p2.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <?php require ('logic.php'); ?>



   </head>
   <div id ="container">

   <body>

      <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8"><i class="fa fa-lock fa-5x"></i></div>
            <div class="col-md-2"></div>
      </div>



      <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8"><h1 id="header">XKCD Password Generator </h1></div>
            <div class="col-md-2"></div>
      </div>







       <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8"><h1 id="header"><div id="password"><h3><?=$passwordString ?></h3></div></h1></div>
            <div class="col-md-2"></div>
      </div>



   			<form action="index.php" method="GET" id="form">
               <div class="row">

                  <div class="col-md-2"></div>
                  <div class="col-md-8"><h3># of Words:<input type='text' name='words' maxlength='1'>(Max 9)</h3></div>
                  <div class="col-md-2"></div>
               </div>

               <div class="row">

                  <div class="col-md-2"></div>
                  <div class="col-md-8"><input type="checkbox" name='number' value="Add a number">Add a number</div>
                  <div class="col-md-2"></div>
               </div>

               <div class="row">

                  <div class="col-md-2"></div>
                  <div class="col-md-8"><input id="sym" type="checkbox" name='symbol' value="Add a symbol">Add a Symbol</div>
                  <div class="col-md-2"></div>
               </div>

               <div class="row">

                  <div class="col-md-2"></div>
                  <div class="col-md-8"><div id ="showSym" style="display:none"># of Special Characters <input type='text' name="special" maxlength='1'
                  >(Max 5)<br></div><br></div>
                  <div class="col-md-2"></div>
               </div>

               <div class="row">

                  <div class="col-md-2"></div>
                  <div class="col-md-8"><input class="button" type="submit" value="Generate Password"></div>
                  <div class="col-md-2"></div>
               </div>





   			</form>
   </body>

</div>

</html>
