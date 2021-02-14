<!DOCTYPE html>
<html>
    <head>
        <title>Lepujt</title>
        <link href="css/bunnies.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="mobile/bunnies.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
<!--HEADER-->
    <?php include 'include/header.php'; ?>

        <!--bunnies page-->
<?
	$query = $pdo->query('SELECT * from bunnies');
	$bunnies = $query->fetchAll();
?>
       <!--dog page-->
       <div class="bunny-parent">
        <?php foreach($bunnies as $b1){ ?>
            <div class="bunny-child">
                <h1><? echo $b1['h1'];?></h1>
                    <div class="bunny">
                        <img  id="bunny-img"  src="images\<? echo $b1['image1'];?>"/>
                        <img  id="bunny-img"  src="images\<? echo $b1['image2'];?>"/>
                        <img  id="bunny-img"  src="images\<? echo $b1['image3'];?>"/>
                    </div>                      
                        <h3><? echo $b1['h3'];?></h3>
                    <p><? echo $b1['text'];?></p>
                        <button  id="button" type="submit"><a  id="linku-button" href="contact.html">Me Adopto!</a></button>

                </div>
                <?php } ?>
           
        </div>
        <br></br>


    <footer>
            <div id="lastFooter">
            <p>&copy; 2020 Littlest Pet Shop </p>
            </div>
        </div>
    </footer>

</html>
