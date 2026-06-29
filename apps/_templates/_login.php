<?php
$username = $_POST['email_address'];
$password = $_POST['password'];
if (validate_credentials($username, $password)){
?>
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">LOGIN SUCCESFULL</h1>
          <p class="lead text-muted">THE BASICS OF LOGIN PAGE .</p>
          <p>
          </p>
        </div>
      </section>

<?php
}
else {
?>
<main class="form-signin w-100 m-auto">
	<form method="post" action="login.php">
		<img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/header_logo/1/logo-colormode-inline.svg" alt=""
		width="400" height="180">
		<h1 class="h3 mb-3 fw-normal">
			Please sign in
		</h1>
		<div class="form-floating">
			<input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">
				Email address
			</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">
				Password
			</label>
		</div>
		<div class="form-check text-start my-3">
			<input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
			<label class="form-check-label" for="checkDefault">
				Remember me
			</label>
		</div>
		
		<button class="btn btn-primary w-100 py-2 hvr-grow-rotate " type="submit">
			Sign in
		</button>
	</form>
</main>

<?php
}
?>