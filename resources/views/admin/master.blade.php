<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--  -->
    <title>{{ config('app.name', 'TruyenTienHiepFull') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
	<link rel='stylesheet prefetch' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<!--  -->
	@yield('head')
</head>
<body>
  <div id="responsive-admin-menu">
	<div id="responsive-menu">
		<div class="menuicon">≡</div>
	</div>	
	<div id="logo"></div>
	<!--Menu-->
	<div id="menu">
			<!-- <a href="" title="Dashboard"><i class="icon-dashboard"></i><span>Dashboard</span></a>
			<a href="" title="News"><i class="icon-bullhorn"></i><span> News</span></a>
			<a href="" title="Pages"><i class="icon-file-alt"></i><span> Pages</span></a> -->
			<a href="" title="Media" class="submenu" name="media-sub"><i class="icon-eye-open"></i><span>  
			{{ __('Master Table') }}</span></a>
			<!-- Media Sub Menu -->
				<div id="media-sub" style="display: none;">
					<a href="{{ route('storyMaster.show') }}" title="Thể Loại"><i class="icon-film"></i><span>  
					{{ __('Thể Loại') }}</span></a>
					<a href="{{ route('authorMaster.show') }}" title="Tác Giả"><i class="icon-picture"></i><span>  
					{{ __('Tác Giả') }}</span></a>
					<a href="{{ route('listStoryMaster.show') }}" title="Danh Sách Truyện"><i class="icon-film"></i><span>  
					{{ __('Danh Sách Truyện') }}</span></a>
					<a href="" title="Danh Mục"><i class="icon-picture"></i><span>  
					{{ __('Danh Mục') }}</span></a>
				</div>
			<!-- Media Sub Menu -->			
			<!-- <a href="" title="Graph &amp; Charts"><i class="icon-bar-chart"></i><span>  
			Graph &amp; Charts</span></a>
			<a href="" title="Events"><i class="icon-calendar"></i><span>  
			Events</span></a>
			<a href="" class="submenu" name="other-sub" title="Other Contents"><i class="icon-book"></i><span> 
			Other Contents</span></a> -->
			<!-- Other Contents Sub Menu -->
				<!-- <div id="other-sub" style="display: none;">
					<a href="" title="Forms"><i class="icon-list"></i><span>  
					Forms</span></a>
					<a href="" title="Mail Lists"><i class="icon-list-ul"></i><span>  
					Mail Lists</span></a>
					<a href="" title="Maps"><i class="icon-map-marker"></i><span>  
					Maps</span></a>
				</div> -->
			<!-- Other Contents Sub Menu -->
			<!-- <a href="" title="Admin Tools"><i class="icon-cogs"></i><span>  
			Admin Tools</span></a> -->
            <a href="{{ route('logout') }}"
           	onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" title="{{ __('Logout') }}">
			<i class="icon-cogs"></i><span>  
			{{ __('Logout') }}</span>
		    </a>
		    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		        @csrf
		    </form>
	</div>
		<!--Menu-->
	</div>
	<main id="content-wrapper">
		@yield('content')
	</main>
</body>
</html>
