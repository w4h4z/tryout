<?php  

/**
 * by fathurrahman rifqi azzamifor flasher
 */
class Flasher extends CI_Model
{
	
	public static function setFlash($pesan,$aksi,$tipe,$alert){
		$_SESSION['flash'] = [
			'pesan' => $pesan,
			'aksi' => $aksi,
			'tipe' => $tipe,
			'alert' => $alert,
		];
	}

	public static function flash(){
		if(isset($_SESSION['flash'])){
			if ($_SESSION['flash']['alert'] != "toast") {
				echo "<script>  
						$(function() {
					    const Toast = Swal.mixin({
					      toast: true,
					      position: 'top-end', 
					      showConfirmButton: false,
					      timer: 3000
					    }); 
					    Toast.fire({
					        icon: '".$_SESSION['flash']['tipe']."',
					        title: '<strong> &nbsp;&nbsp;".$_SESSION['flash']['pesan']."</strong>".$_SESSION['flash']['aksi']."'
					    }) });
					   </script>";
			}else{
				echo "<script> 
						 
					    toastr.".$_SESSION['flash']['tipe']."('".$_SESSION['flash']['pesan'].$_SESSION['flash']['aksi']."');
					   </script>";
			}
			
			unset($_SESSION['flash']);		
		}
	}
}


?>