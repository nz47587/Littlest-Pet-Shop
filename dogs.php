<!DOCTYPE html>
<html>
    <head>
        <title>Qenushet</title>
        <link href="css/dogs.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="mobile/dogs.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<body>
<!--HEADER-->
    <?php include 'include/header.php'; ?>
<?
	$query = $pdo->query('SELECT * from dogs');
	$dogs = $query->fetchAll();
?>
       <!--dog page-->
        <div class="qeni-parent">
        <?php foreach($dogs as $d1){ ?>
            <div class="qeni-child">
                <h1><? echo $d1['h1'];?></h1>
                    <div class="qeni">
                        <img  id="qeni-img"  src="images\<? echo $d1['image1'];?>"/>
                        <img  id="qeni-img"  src="images\<? echo $d1['image2'];?>"/>
                        <img  id="qeni-img"  src="images\<? echo $d1['image3'];?>"/>
                    </div>                      
                        <h3><? echo $d1['h3'];?></h3>
                    <p><? echo $d1['text'];?></p>
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
