@extends('atletica.layouts.master')


@section('before_content')
<div id="ms-preload" class="ms-preload">
	<div id="status">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
</div>
@endsection

@section('body')

<div class="ms-site-container">
	<!-- Modal -->
	<div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog animated zoomIn animated-3x" role="document">
			<div class="modal-content">
				<div class="modal-header d-block shadow-2dp no-pb">
					<button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
					<div class="modal-title text-center">
						<span class="ms-logo ms-logo-white ms-logo-sm mr-1">CA</span>
						<h3 class="no-m ms-site-title">Centro <span>Acadêmico</span></h3>
					</div>
					<div class="modal-header-tabs">
						<ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
							<li class="nav-item" role="presentation"><a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple"><i class="zmdi zmdi-account"></i>
							Login</a></li>
							<li class="nav-item" role="presentation"><a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="zmdi zmdi-account-add"></i>
							Register</a></li>
							<li class="nav-item" role="presentation"><a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="zmdi zmdi-key"></i> Recovery Pass</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="modal-body">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
							<form autocomplete="off">
								<fieldset>
									<div class="form-group label-floating">
										<div class="input-group">
											<span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
											<label class="control-label" for="ms-form-user">Username</label>
											<input type="text" id="ms-form-user" class="form-control">
										</div>
									</div>
									<div class="form-group label-floating">
										<div class="input-group">
											<span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
											<label class="control-label" for="ms-form-pass">Password</label>
											<input type="password" id="ms-form-pass" class="form-control">
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-6">
											<div class="form-group no-mt">
												<div class="checkbox">
													<label>
														<input type="checkbox"> Remember Me </label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<button class="btn btn-raised btn-primary pull-right">Login</button>
											</div>
										</div>
									</fieldset>
								</form>
								<div class="text-center">
									<h3>Login with</h3>
									<a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook"><i class="zmdi zmdi-facebook"></i> Facebook</a>
									<a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter"><i class="zmdi zmdi-twitter"></i> Twitter</a>
									<a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google"><i class="zmdi zmdi-google"></i> Google</a>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
								<form>
									<fieldset>
										<div class="form-group label-floating">
											<div class="input-group">
												<span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
												<label class="control-label" for="ms-form-user-r">Username</label>
												<input type="text" id="ms-form-user-r" class="form-control">
											</div>
										</div>
										<div class="form-group label-floating">
											<div class="input-group">
												<span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
												<label class="control-label" for="ms-form-email-r">Email</label>
												<input type="email" id="ms-form-email-r" class="form-control">
											</div>
										</div>
										<div class="form-group label-floating">
											<div class="input-group">
												<span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
												<label class="control-label" for="ms-form-pass-r">Password</label>
												<input type="password" id="ms-form-pass-r" class="form-control">
											</div>
										</div>
										<div class="form-group label-floating">
											<div class="input-group">
												<span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
												<label class="control-label" for="ms-form-pass-rn">Re-type
												Password</label>
												<input type="password" id="ms-form-pass-rn" class="form-control">
											</div>
										</div>
										<button class="btn btn-raised btn-block btn-primary">Register Now</button>
									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
								<fieldset>
									<div class="form-group label-floating">
										<div class="input-group">
											<span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
											<label class="control-label" for="ms-form-user-re">Username</label>
											<input type="text" id="ms-form-user-re" class="form-control">
										</div>
									</div>
									<div class="form-group label-floating">
										<div class="input-group">
											<span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
											<label class="control-label" for="ms-form-email-re">Email</label>
											<input type="email" id="ms-form-email-re" class="form-control">
										</div>
									</div>
									<button class="btn btn-raised btn-block btn-primary">Send Password</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="ms-header ms-header-dark">

		<!--ms-header-dark-->
		<div class="container container-full">
			<div class="ms-title">
				<a href="/">
					<!-- <img src="../assets/img/demo/logo-header.png" alt=""> -->
					<span class="ms-logo animated zoomInDown animation-delay-5">CA</span>
					<h1 class="animated fadeInRight animation-delay-6">Centro <span>Acadêmico</span></h1>
				</a>
			</div>

			<div class="header-right" style="float:left;">
				<div class="share-menu">
					<ul class="share-menu-list">
						<li class="animated fadeInRight animation-delay-3"><a href="/" class="color-white">Voltar para Engenharias</a></li>
					</ul>
					<a href="/" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7"><i class="fa fa-hand-point-left"></i></a>
				</div>
			</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white hidden-md-down">
		<div class="container container-full">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<!-- <img src="../assets/img/demo/logo-navbar.png" alt=""> -->
					<img src="{{asset('images/logos/logocaeng.png')}}" width="50px">
					<span class="ms-title">Centro <strong>Acadêmico</strong></span>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="ms-navbar">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a href="/" class="nav-link  animated fadeIn animation-delay-7">Início </a>
				</li>

				<li class="nav-item">
					<a href="/" class="nav-link animated fadeIn animation-delay-9" role="button">

					</a>
				</li>
			</ul>
		</div>
		</div> <!-- container -->
	</nav>
	@yield('content')
	@endsection

	@section('footer')

	<footer class="ms-footer">
		<div class="container">
			<p>Copyright &copy; E-Point 2019</p>
		</div>
	</footer>

	@endsection