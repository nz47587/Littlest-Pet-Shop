<? 
require '../dbconnect.php';

if(isset($_POST['sub'])){
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$email = $_POST['email'];

	$qyteti = $_POST['qyteti'];
	$kafsha = $_POST['kafsha'];

    $query = $pdo->prepare("SELECT emri FROM adopto");
    	$query->execute();
    	$user = $query->fetchAll();

$sql = "INSERT INTO adopto (emri,mbiemri, email,qyteti, kafsha) VALUES (?,?,?,?,?)";
	$query = $pdo->prepare($sql);
	$query->execute([$emri,$mbiemri,$email,$qyteti,$kafsha]);
	header('Location: ../index.php');
}
?>
