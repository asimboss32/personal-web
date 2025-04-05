<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Personal Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  @include('includes.style')


</head>

<body class="index-page">

 @include('includes.header')

  <main class="main">
    @yield('content')

  </main>

@include('includes.footer')

 @include('includes.script')

</body>

</html>