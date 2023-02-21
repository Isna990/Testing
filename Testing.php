<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Testing Junior Programmer ATR/BPN </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3.jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<h1>Testing Junior Programmer ATR/BPN</h1>

<p>Data Pegawai </p>
<button style="background-color: red;">Hide
</button>
<script type="text/javascript"> 
function show() {
	document.getElementById("div1").style.display = "block";
}
function hide () {
	document.getElementBy("div1").style.display = "none";
}
</script>

</head>
<body>
<div class="table-responsive">
<div class="card">
<div class="table-responsive">
<table class="table table-bordered" id="table-datatable" width="100%" cellspacing="0">
	<thead>
	<tr>
		<th> Nomor </th>
		<th> Kode Unit Kerja</th>
		<th> Unit Kerja</th>
	</tr>
	</thead>
	<tbody>
	
		<tr>
			<td>1</td>
			<td> 0012
			</td>
			<td>Pusdatin</td>
		</tr>
		<tr>
			<td>2</td>
			<td>0013 </td>
			<td>PPSDM</td>
		</tr>
		<tr>
			<td>3</td>
			<td>0014 </td>
			<td>Puslitbang</td>
		</tr>
		<script src="js/sweetalert2.all.min.js"></script> 
		<script>
		const card = document.querySelector('#card');
		card.addEventListener('click',function(){
			Swal({
				title: 'This page says',
				text: '0012'
				type: 'warning'
			});
		});
		</script>
	</tbody>
</table>
</div>

</div>
</div>
</body>
</html>