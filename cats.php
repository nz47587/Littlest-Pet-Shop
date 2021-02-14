<!DOCTYPE html>
<html>
    <head>
        <title>Macet</title>
        <link href="css/cats.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="mobile/cats.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
<!--HEADER-->
        <?php include 'include/header.php'; ?>

                                            <!--Cat page-->
<?
	$query = $pdo->query('SELECT * from cats');
	$cats = $query->fetchAll();
?>

                           <!--dog page-->
       <div class="macja-parent">
        <?php foreach($cats as $c1){ ?>
            <div class="cat-child">
                <h1><? echo $c1['h1'];?></h1>
                    <div class="cat">
                        <img  id="cat-img"  src="images\<? echo $c1['image1'];?>"/>
                        <img  id="cat-img"  src="images\<? echo $c1['image2'];?>"/>
                        <img  id="cat-img"  src="images\<? echo $c1['image3'];?>"/>
                    </div>                      
                        <h3><? echo $c1['h3'];?></h3>
                    <p><? echo $c1['text'];?></p>
                        <button  id="button" type="submit"><a  id="linku-button" href="contact.html">Me Adopto!</a></button>
              </div>
              <?php } ?>
        </div>
        <br></br>
    </body>
    <footer>
            <div id="lastFooter">
            <p>&copy; 2020 Littlest Pet Shop </p>
            </div>
        </div>
    </footer>

</html>
