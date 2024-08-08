<!DOCTYPE html>
<html>
  @include('includes.head')
<body>
  <div class="hero_area">
   @include('includes.header')
   @include('includes.slider')
   
  </div>
  @yield('content')
  
  @include('includes.info')
  @include('includes.footer')
  @include('includes.script')
</body>

</html>