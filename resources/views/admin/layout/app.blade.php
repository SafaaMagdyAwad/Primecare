<!DOCTYPE html>
<html lang="en">
  @include('includes.head')
  <body>
    <main>

      <div class="container my-5">
        <div class="bg-light p-5 rounded">
          <h2 class="fw-bold fs-2 mb-5 pb-2">@yield('title')</h2>

          @yield('content')

        </div>
    </div>
  </main>
  @include('includes.script')
</body>
</html>