<!DOCTYPE html>
<html>
    <head>
        <title>Me Adopto</title>
        <link href="css/adopto.css" rel="stylesheet" type="text/css"/> 
        <link href="mobile/adopto.css" rel="stylesheet" type="text/css"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <?php include 'include/header.php'; ?>

        <div id="logo">
            <img id="foto" src="images/foto.png" alt="Logo">
        </div>

        <div class="formulari">
            <form>

            <div class="row">
                <div class="label">
                    <label for="emri">Emri:</label>
                </div>
                <div class="input">
                    <input type="text" size="20" maxlength="50"><br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label for="mbiemri">Mbiemri:</label>
                </div>
                <div class="input">
                    <input type="text" size="20" maxlength="60"><br>
                </div>
            </div>

            <div class="row">
                <div class="label">
                    <label for="email">Email:</label>
                </div>
                <div class="input">
                    <input type="email" size="20" minlength="9"> <br>
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
                    <select>
                        <option value="Zgjedh kafshen">Zgjedh kafshen</option>
                        <option value="Perla">Perla</option>
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

                <div>
                    <a href="./contact.php">
                    <input type="submit" value="Submit"><link href="./contact.html">
                    </a>
                </div>

            </form>
        </div>
        
        <footer>
            <?php include 'include/footer.php'; ?>
        </footer>
        
    </body>
</html>
