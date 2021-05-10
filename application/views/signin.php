<?php 
    $this->load->view('header');
?>
<link href="<?=base_url()?>assets/css/signin.css" rel="stylesheet">
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
    }
</style>
<form class="text-center">
    <img class="mb-4" src="<?=base_url()?>assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
    <label>
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
</form>
<?php
    $this->load->view('footer');
?>