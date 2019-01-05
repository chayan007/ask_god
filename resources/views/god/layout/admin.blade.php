<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

@include('god.includes.head')

<body>


<!-- Left Panel -->

@include('god.includes.panel')
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    @include('god.includes.header')

    <div class="content mt-3">
        @yield('content')
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@include('god.includes.footer')

</body>

</html>
