<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('estilo/login.css') }}">
</head>
<body>
    <!-- From Uiverse.io by nathann09 --> 

    <form class="form">
       <p class="form-title">Sign in to your account</p>
        <div class="input-container">
          <input type="email" placeholder="Enter email">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" placeholder="Enter password">
        </div>
         <button type="submit" class="submit">
        Sign in
      </button>

      <p class="signup-link">
        No account?
        <a href="">Sign up</a>
      </p>
   </form>

</body>
</html>