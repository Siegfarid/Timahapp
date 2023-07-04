<!DOCTYPE html>
<html lang="en">

@include('_partials.header')

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('_partials.navbar')

      @include('_partials.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title', 'Blank Page')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval
            Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @include('_partials.footer')
</body>

</html>
