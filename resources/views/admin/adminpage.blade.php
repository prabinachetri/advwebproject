

<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>FYP Management System</title>
  <style> 
  h1{
       position: absolute;
        left:20px;
        top: 150px;
    }
  </style>
  @include('admin.admincss');
  </head>

<body>
  <div id="app">
    @include('admin.adminnavigation');
    <br>
    <h1>Hi </h1>
      <!-- <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By Prabina Chetri</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer> -->
    </div>
  </div>

@include('admin.adminscript');
</body>
</html>