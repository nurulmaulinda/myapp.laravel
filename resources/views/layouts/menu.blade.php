	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">MYTOKO</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="{{url('about')}}">About Company</a>
						</li>
					
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Katalog Produk</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="{{url('jenis')}}">Jenis</a> 
								 <a class="dropdown-item" href="{{url('katalog')}}">Produk</a> 
								 
							</div>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" name="keyword" value=""/> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Cari Produk
						</button>
						<input type="hidden" name="hal" value="produk" />
					</form>
					<ul class="navbar-nav ml-md-auto" style="text-align:right;">
						\
						<li class="nav-item active">
							 <a class="nav-link" href="{{url('login')}}">Login <span class="sr-only">(current)</span></a>
						</li>
			
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">
							 	mimin
							 </a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

								 <a class="dropdown-item" href="{{url('user')}}">Kelola User</a>
								  <a class="dropdown-item" href="{{url('role')}}">Kelola Role</a>
								   <a class="dropdown-item" href="#">My Profile</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>