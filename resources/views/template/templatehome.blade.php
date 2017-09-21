@include('template.header')
@include('template.navbar')
@include('template.searchbox')
@include('template.desirebox')
<div class="container mymargin">
  @yield('main-content')
</div>
@include('template.footer')
