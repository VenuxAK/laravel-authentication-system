<x-layout>
	<div class="container" id="content">
		@if (session('success'))
			<div class="row">
				<div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto mt-4">
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				</div>
			</div>
		@endif
		<h1 class="text-primary text-center mt-4 mb-2">Laravel Authentication System</h1>
	</div>
</x-layout>
