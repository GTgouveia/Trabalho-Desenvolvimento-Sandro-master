<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../assets/css/index.css">
			<link type="text/css" rel="stylesheet" href="../assets/css/login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <nav>
          <div class="nav-wrapper">
          	<a href="#" class="brand-logo">Logo</a>
          	<ul id="nav-mobile" class="right hide-on-med-and-down">
							<li>
								<a href="login.php" 
								class="waves-effect waves-light btn" 
								style="background-color:#4b4b4b;">
								Entrar 
								</a>
							</li>
						</ul>
					</div>
        </nav>

				<form class="form-login">
					<div class="row">
						<div class="col s12">
							<div class="input-field inline">
								<input id="email_inline" type="email" class="validate">
								<label for="email_inline">Email</label>
								<span class="helper-text" data-error="wrong" data-success="right"></span>
							</div>
						</div>
					</div>

				  <div class="row">
						<div class="input-field col s12">
						<div class="input-field inline">
							<input id="password" type="password" class="validate">
							<label for="password">Senha</label>
							</div>
						</div>
     		 	</div>

					<a class="waves-effect waves-light btn">Login</a>

				</form>


			<script type="text/javascript" src="../assets/js/index.js"></script>
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
		</body>
  </html>