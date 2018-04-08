@include('partials.start')
	<div class="content-wrapper">
		@include('partials.nav')

	    @yield('content')
	    
	    @include('partials.footer')
	</div>
@include('partials.end')