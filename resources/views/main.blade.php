
 <!DOCTYPE html>
<html lang="en">

	<head>
		@include('partials._head')
	</head>
		<body>
				@include('partials._nav')
				 

				 <div class="container">
				 @include('partials._messages')

		{{ Auth::check() ? "Logged In" : "Logged Out"}}

				    @yield('content')
				 
				 <hr >
				   
				   @include('partials._footer')
				</div>

				 @include('partials._javascripts')
				 @yield('scripts')
		  </body>
</html>