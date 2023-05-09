<x-layout>
	<div class="container">
		<div class="row">
			<div class="col-11 col-sm-10 col-md-5 mx-auto my-5">
				<div class="card px-4 py-2 shadow-lg">
					<h3 class="my-3 text-primary text-center">Register Form</h3>
					<form action="" method="POST">
						@csrf
						<div class="mb-4">
							<label for="inputFullName" class="form-label">Full name</label>
							<input name="name" type="text" class="form-control" id="inputFullName" value="{{ old('name') }}">
							@error('name')
								<p class="text-danger fw-bold">{{ $message }}</p>
							@enderror
						</div>
						<div class="mb-4">
							<label for="inputUsername" class="form-label">Username</label>
							<input name="username" type="text" class="form-control" id="inputUsername" value="{{ old('username') }}">
							@error('username')
								<p class="text-danger fw-bold">{{ $message }}</p>
							@enderror
						</div>
						<div class="mb-4">
							<label for="inputEmail" class="form-label">Email address</label>
							<input name="email" type="email" class="form-control" id="inputEmail" value="{{ old('email') }}">
							@error('email')
								<p class="text-danger fw-bold">{{ $message }}</p>
							@enderror
						</div>
						<div class="mb-4">
							<label for="inputPassword" class="form-label">Password</label>
							<input name="password" type="password" class="form-control" id="inputPassword">
							@error('password')
								<p class="text-danger fw-bold">{{ $message }}</p>
							@enderror
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-layout>
