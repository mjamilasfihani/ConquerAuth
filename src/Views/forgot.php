<?=$this->extend('Conquer\Auth\Views\_template') ?>
<?=$this->section('content') ?>

<div class="container my-4 py-5">
  <div class="row justify-content-center">
  	<div class="col-xxl-5 col-xl-5 col-md-6 col-sm-9 col-xs-10 border bg-white">
	  <?=form_open('', 'class="my-3 mx-2"') ?>

	  <h1 class="display-6 mb-4 text-center" style="font-size: 2rem">Reset Password</h1>

	  <div class="mb-4">
	  	<p>Loose your access? Please provide your email in below, we will help you to recovery back.</p>	
	  </div>
	  
	  <div class="mb-3">
	    <label for="inputUsermail" class="form-label">Email</label>
	    <input type="email" class="form-control" id="inputUsermail" placeholder="user@example.com">
	  </div>
	  
	  <div class="d-grid">
	    <button class="btn btn-outline-dark" type="button">Submit</button>
	  </div>

	  <?=form_close() ?>
  	</div>
  </div>
  <p class="mt-3 text-center"><a href="../login">&larr; Back to login page</a></p>
</div>

<?=$this->endSection() ?>