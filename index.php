<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="container">
    <div class="row justify-content-center">

    
        <div class="col-lg-4">

        <br><br>
		<h2 class="text-center mb-4">KALKULATOR</h2>
		
		<form method="post" action="index.php">			
			<!-- <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama"> -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bilangan awal</label>
                <input type="number" class="form-control" name="bil1" required placeholder="Bilangan awal">
            </div>
			<div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bilangan akhir</label>
                <input type="number" class="form-control" name="bil2" required placeholder="Bilangan akhir">
            </div>
			<select class="form-select" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
            <div class="text-center">
            <input type="submit" name="hitung" value="Hitung" class="btn btn-primary mt-4 mb-4">	
            </div>
													
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="Hasil = <?php echo $hasil; ?>" class="form-control">
		<?php }else{ ?>
			<input type="text" value="0" class="form-control">
		<?php } ?>		
                    
        </div>	
        </div>
	</div>


    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>