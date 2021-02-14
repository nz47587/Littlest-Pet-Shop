
<?php 

    include 'dbconnect.php';

?>



<!DOCTYPE html> 
<html>
    <head>
        <title>Adopt Me</title>
        <link href="css/adopto.css" rel="stylesheet" type="text/css"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/adoptojs.js" type="text/javascript"></script>
        
    </head>
    <body>
        <!--HEADER-->
           <?php include 'include/header.php'; ?>
        <!---------->

        <div id="logo">
            <img id="foto" src="images/foto.png" alt="Logo">
        </div>

        <div class="formulari">
            <form id="myform" action="adoptMe.php" method="POST" onsubmit="return validate()"> 

            <div class="row">
                <div class="label">
                    <label for="emri">Emri:</label>
                </div>
                <div class="input">
                    <input type="text" name="femri" class="inputs" size="20" maxlength="50" required ><br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label for="mbiemri">Mbiemri:</label>
                </div>
                <div class="input">
                    <input type="text" name="fmbiemri" class="inputs" size="20" maxlength="60" required><br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label for="email">Email:</label>
                </div>
                <div class="input">
                    <input type="email" name="femail" class="inputs" size="20" minlength="9" required> <br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label for="qyteti">Qyteti:</label>
                </div>
                <div class="input">
                    <input type="text" size="20" maxlength="30"> <br>
                </div>
            </div>

            <div class="row">
                <div class="label1">
                    <label for="kafsha-adoptim">Kafsha qe doni te adoptoni: </label>
                </div>
                <div class="input">
                    <select id="select" class="inputs" placeholder="Zgjedh kafshen" required>
                        <!--<option value="Zgjedh kafshen">Zgjedh kafshen</option>-->
                        <option value="Perla" selected>Perla</option>
                        <option value="Luna">Luna</option>
                        <option value="Ginger">Ginger</option>
                        <option value="Topolake">Topolake</option>
                        <option value="Kumbull">Kumbull</option>
                        <option value="Strudel">Studel</option>
                        <option value="Lilo">Lilo</option>
                        <option value="TenTen">TenTen</option>
                        <option value="Susu">Susu</option>
                        <option value="Stormi">Stormi</option>
                        <option value="Nugget">Nugget</option>
                        <option value="Walnut">Walnut</option>

                    </select> <br>
                </div>
            </div>

                    <button id="button"  type="submit" onclick="return shfaq()">Submit</button>
               

            </form>
        </div>
        
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
    
        
    </body>
</html>
