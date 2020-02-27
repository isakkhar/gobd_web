@include('layouts.partials.header')
@include('layouts.partials.sidebar')
<!-- Main Container -->
<main id="main-container">
    @yield('content')
</main>
<!-- END Main Container -->
@include('layouts.partials.footer')
