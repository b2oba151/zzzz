@include('layouts.head')
<body itemscope="itemscope" itemtype="http://schema.org/WebPage">
    @include('layouts.header')
    <div id="global">
        <div id="visit-counter" class="hidden-small-screens">
            <div class="visit-counter-total">
                <span class="text-strong">Visiteurs : </span> ....
            </div>
            <div class="visit-counter-today">
                <span class="text-strong">Aujourd'hui : </span> ....
            </div>
        </div>
        <div id="main" class="" role="main">
            <div id="main-content" itemprop="mainContentOfPage">
    @yield('content')
            </div>
        </div>
    <div class="spacer"></div>
    </div>
    @include('layouts.footer')
    @include('layouts.js')
</body>


</html>
