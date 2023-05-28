<nav class="navbar navbar-expand-md navbar-light bg- text-gray shadow-sm">
	<div class="container" style="max-width: 100%">
		{{--  ICON --}}
		<a href="/" class="me-3">
			<x-application-logo class="w-20 h-20 fill-current text-gray-500" />
		</a>

		<a class="navbar-brand" href="{{ url('/') }}">
			{{ config('app.name', 'Laravel') }}
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
		
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav me-auto">

			</ul>
			{{-- <span class="navbar-text">
				未ログイン時のヘッダー
			</span> --}}
			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">ショップログイン</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">ショップ新規登録</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">購入者ログイン</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">購入者新規登録</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">管理画面ログイン</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

