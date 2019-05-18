<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Pacifico|Righteous|Teko" rel="stylesheet">
  <link rel="stylesheet" href="css/register.css"/>
  <title>Login- and register form design</title>
</head>
<body>
  <section id="SelectButton" class="selectButtonArea">
    <button id="SelectRegister" class="selectButton" onclick="openRegister();">Register</button>
    <button id="SelectLogin" class="selectButton" onclick="openLogin();">Login</button>
  </section>
  <section id="RegisterForm" class="sectionForm">
    <div class="formHeader">
      <h1 class="formHeading">Register</h1>
      <button class="backBtn" onclick="backBegin();">&#10006;</button>
    </div>
    <form id="Register" action="register" method="POST">
    {{csrf_field()}}
      <div class="inputSection">
        <label for="Username">Username: </label>
        <input type="text" id="Username" class="inputText" name="name" required placeholder="username">
        <span class="focus-border"></span>
      </div>
      <div class="inputSection">
        <label for="Email">Email: </label>
        <input type="email" id="Email" class="inputText" name="email" required placeholder="email">
        <span class="focus-border"></span>
      </div>
      <div class="inputSection">
        <label for="Password">Password: </label>
        <input type="password" id="Password" class="inputText" name="password" required placeholder="password">
        <span class="focus-border"></span>
      </div>
      <div class="inputSection">
        <label for="C-Password">C-Password: </label>
        <input type="password" id="C-Password" class="inputText" required placeholder="password"><br><br>
        <span class="focus-border"></span>
      </div>
      <img class="logoImg" src="https://image.freepik.com/free-vector/angular-logo-template_1061-222.jpg" alt="Your browser does not support img">
      <div class="acceptSection">
        <input id="AcceptPolicy" class="formBox" type="checkbox" required>
        <span class="formText">You have read our terms and policy and accept them.</span><br>
        <input id="AcceptNewsletter" class="formBox" type="checkbox">
        <span class="formText">Allow us to send you updates and our weekly newsletter.</span>
      </div>
      <div class="formFooter">
        <button class="submitButton" type="submit" id="SubmitForm">Register</button>
      </div>
    </form>
    <div class="optionalSection">
      <span class="inputText sizeBack">Already have an account?</span>
      <button class="changeButton" type="button" id="GoLogin" onclick="openLogin();">Login</button>
    </div>
    <div class="boxShadow"></div>
  </section>
  <section id="LoginForm" class="sectionForm reSize">
    <div class="formHeader">
      <h1 class="formHeading">Login</h1>
      <button class="backBtn" onclick="backBegin();">&#10006;</button>
    </div>
    <form id="Register" action="login" method="POST">
    {{csrf_field()}}
      <div class="inputSection">
        <label for="Username">Username: </label>
        <input type="text" id="L-Username" class="inputText" name="name" required placeholder="username">
      </div>
      <div class="inputSection">
        <label for="Email">Email: </label>
        <input type="email" id="L-Email" class="inputText" name="email" required placeholder="email">
      </div>
      <div class="inputSection">
        <label for="Password">Password: </label>
        <input type="password" id="L-Password" class="inputText" name="password" required placeholder="password"><br><br>
      </div>
      <img class="logoImg" src="https://image.freepik.com/free-vector/angular-logo-template_1061-222.jpg" alt="Your browser does not support img">
      <div class="acceptSection">
        <input id="AcceptRelogin" class="formBox" type="checkbox">
        <span class="formText">I want to login automaticly.</span>
      </div>
      <div class="formFooter">
        <button class="submitButton" type="submit" id="SubmitForm">Login</button>
      </div>
    </form>
    <div class="optionalSection">
      <span class="inputText sizeBack">No account yet?</span>
      <button class="changeButton" type="button" id="GoRegister" onclick="openRegister();">Register</button>
    </div>
    <div class="boxShadow"></div>
  </section>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/register.js"></script>

</body>
</html>