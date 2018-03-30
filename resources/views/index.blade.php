    @section('title', 'For You')
    @include('include.template.header')
    @include('include.template.navbar')
    <div class="nk-main">
        @yield('content')
    </div>
    @include('include.template.footer')