<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card-box">
				<p>Selamat datang <strong><?php echo ucfirst($this->fullname) ?></strong>,</p>
				<p>Login Terakhir: <?php echo ($user->user_last_login != NULL) ? pretty_date($user->user_last_login, 'd F Y, H:i:s', false) : '-' ?></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="card-box bg-info">
				<h4 class="header-title mt-0 mb-3 text-white">Total Posting</h4>
				<div class="widget-box-2">
					<div class="widget-detail-2 text-right">
						<h2 class="font-weight-normal mb-1 text-white"> 0 </h2>
						<p class="text-white">Posting</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card-box bg-success">
				<h4 class="header-title mt-0 mb-3 text-white">Total Produk</h4>
				<div class="widget-box-2">
					<div class="widget-detail-2 text-right">
						<h2 class="font-weight-normal mb-1 text-white"> 0 </h2>
						<p class="text-white">Produk</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card-box bg-danger">
				<h4 class="header-title mt-0 mb-3 text-white">Total Client</h4>
				<div class="widget-box-2">
					<div class="widget-detail-2 text-right">
						<h2 class="font-weight-normal mb-1 text-white"> 0 </h2>
						<p class="text-white">Client</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card-box bg-warning">
				<h4 class="header-title mt-0 mb-3 text-white">Total Foto Gallery</h4>
				<div class="widget-box-2">
					<div class="widget-detail-2 text-right">
						<h2 class="font-weight-normal mb-1 text-white"> 0 </h2>
						<p class="text-white">Foto</p>
					</div>
				</div>
			</div>
		</div>
	</div>