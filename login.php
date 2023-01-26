<?php
 session_start();
 include 'koneksi/koneksidb.php';
 
if(isset($_POST['login']) && !empty($_POST['login'])){
	 $username 	= mysqli_real_escape_string($conn, $_POST['username']);
	 $password	= mysqli_real_escape_string($conn, $_POST['password']);
	 
	 $select_user	= mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
	 $num_user		= mysqli_num_rows($select_user);
	 $row_user		= mysqli_fetch_array($select_user);
	 if($num_user > 0){
		$_SESSION['id_admin'] = $row_user['id_admin'];
		header('location: dashboard.php');
	 }else{
?>
		<script type="text/javascript">
		 alert("Pengguna Tidak Ditemukan!");location.href="login.php";
		</script>
<?php
	 }
}
?>