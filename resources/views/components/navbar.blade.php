<nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="/">
			LAS
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="#content">Content</a>
				</li>
			</ul>
			<ul class="navbar-nav mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/login">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/register">Register</a>
				</li>
				<li class="nav-item ">
					<div class="btn-group dropstart">
						<button type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							Profile
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Account</a></li>
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Logout</a></li>
						</ul>
					</div>
				</li>
			</ul>
			{{-- <form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form> --}}
		</div>
	</div>
</nav>
