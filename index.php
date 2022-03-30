<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrasi dengan google spreadsheets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
	<div class="container">
		<a class="navbar-brand" href="#">Logo</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Singkron</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="rekap.php">Rekap</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid">

	<div class="row justify-content-center mb-5">
		<div class="col-md-6">
			<form method="post">
				<div class="mb-3">
					<label for="txtmapel" class="form-label">Mapel</label>
					<select class="form-control" id="txtmapel" name="txtmapel" aria-describedby="emailHelp">
						<option value="pilih">i</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
						<option value="pilih">pilih</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="txtlink" class="form-label">Link Sheets</label>
					<input type="text" class="form-control" id="txtlink" name="txtlink" value="">
				</div>
				<button type="submit" name="btn_lihat" class="btn btn-success">Lihat Data</button>
				<button type="submit" name="btn_singkron" class="btn btn-primary">Singkron Sekarang</button>
			</form>
		</div>
	</div>

    <div class="row">
        
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>