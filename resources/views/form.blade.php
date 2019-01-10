<html>
  <head>
    <title>App Name - @yield('title')</title>
  </head>
  <body>


    <div class="container">
      <?php

echo Form::open('register', 'POST');

echo Form::label('username', 'Username') . Form::text('username', Input::old('username'));
echo Form::label('email', 'E-mail') . Form::text('email', Input::old('email'));
echo Form::label('password', 'Password') . Form::password('password');

echo Form::submit('Register!');

echo Form::token() . Form::close();

?>
    </div>
  </body>
</html>