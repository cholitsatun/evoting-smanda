
<!DOCTYPE HTML>
<html>
	<head>
		<title>E-VOTING SMA N 2 PATI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
		<noscript><link rel="stylesheet" href="/phantom/assets /css/noscript.css" /></noscript>
		<link rel="stylesheet" href="{{asset('/phantom/assets/css/main.css')}}" />
		<style>
			header {
				position: sticky;
				top: 0;
				z-index: 5;
			}
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<img src="/gambar/smanda.png" alt="logo" class="logo" style="width:200px; height:auto"/>

							<!-- Nav -->
								<nav class="">
									<ul>
										<li>
											<div class="dropdown show">
												<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: 0px">
													<b style="color: white">{{Auth::guard('voter')->user()->name}}</b>
												</a>

												<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												  <form class="hidden" action="/logout" method="POST" style="display:inline" >
													{{ csrf_field() }}
													<a class="dropdown-item" href="javascript:;" onclick="parentNode.submit();" style="color: white"> Log Out</a>
												</form>
												</div>
											  </div>
										</li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="text-center">
							
								<h1>KAMU SUDAH MELAKUKAN VOTING PADA PEMILIHAN INI </h1>
								<p></p>
								<button data-toggle="modal" data-target="#myModal" style="color: #383838; background-color: #383838">Hasil Pilihanmu</button>
								<p></p>
								<h2>Terima kasih, {{Auth::guard('voter')->user()->name}} :)</h2>
								
							

										<!-- The Modal -->
										<div class="modal" id="myModal">
											<div class="modal-dialog">
												<div class="modal-content">
										
												<!-- Modal Header -->
												<div class="modal-header">
													<h3 class="modal-title" style="text-align:center"> KAMU MEMILIH PASLON</h3>
												
												</div>
										
												<!-- Modal body -->
												
												
													<div class="modal-body">
														
														<h4>{{$paslon->nama_ketos}}-{{$paslon->nama_waketos}}</h4>
														<img src="/gambar/{{$paslon->foto}}" alt="{{$paslon->foto}}" style="width:200px; height:auto">
													
													</div>
												
												
								
											</div>
											</div>
										</div>
								
								
						</div>
					</div>
					
					
				
					{{-- End Modal	 --}}

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<center><li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li></center>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/phantom/assets/js/jquery.min.js"></script>
			<script src="/phantom/assets/js/browser.min.js"></script>
			<script src="/phantom/assets/js/breakpoints.min.js"></script>
			<script src="/phantom/assets/js/util.js"></script>
			<script src="/phantom/assets/js/main.js"></script>
	<script
	src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
	integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
	crossorigin="anonymous"></script>
	<script>
		// <div id="destination"></div>
		// $.ajax({
        //  type:"GET",
        
        //  success : function(results) {
        //      var $table = $('<table></table>');
        //      $('#destination').html('');

        //      for(var i=0;i<=results.length;i++) {
        //          $table.append('<tr><td>Visi</td><td>'+results[i].visi+'</td></tr>');
        //          $table.append('<tr><td>Misi</td><td>'+results[i].misi+'</td></tr>');
        //      }
        //      $('#destination').append($table);
        //  }
    }); 
	// $('#btnVisi').click(function() {
	// 	var which = document.getElementById("popup");
	// 	which.style.visibility = "visible";
	// })
	</script>
	</body>
</html>