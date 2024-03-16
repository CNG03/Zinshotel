
<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
<head>
    @yield('title')
    @include('layout.link-css')
    @yield('linkcss')
</head>

{{-- FOF  --}}

<body class="page-template-default page page-id-17 page-parent theme-hoteller woocommerce-no-js lightbox-white tg_sidemenu_desktop leftalign search-layout-list hoteller-input-classic elementor-default elementor-kit-3">
	@include('layout.header')

    @yield('content')
    
	@include('layout.footer')

	@include('layout.js')
    @yield('linkjs')
</body>
</html>
