<? 
$host = 'localhost';
$db = 'kano';
$username = 'postgres';
$password = 'ubnkby02';

$conn = "host=$host port=5432 dbname=$db user=$username password=$password";
$dbconn = pg_connect($conn);


$id = $_GET['id'];

var_dump($id);

$sql_name = pg_query("SELECT title FROM poll WHERE id = $id");
$sql_cat = pg_query("SELECT title FROM category WHERE poll_id = $id");
$sql_func = pg_query("SELECT title FROM function WHERE poll_id = $id");

$name = pg_fetch_assoc($sql_name);
var_dump($name);


?>