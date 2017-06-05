<div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				<h4 id="modal-label-2" class="modal-title">Prihlásenie</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">

						<div class="topbar-form">
							<form method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input name="email" type="text" placeholder="Email" class="form-control">

								</div>
								<div class="form-group">
									<label for="password" class="sr-only">Heslo</label>
									<input name="password" type="password" placeholder="Heslo" class="form-control">
								</div>
								<div class="form-inline form-group">
									<div class="text-center p-b-10">
										<label>
											<small><a href="{{ route('user/register') }}">Nemáš účet? Registruj sa!</a></small>
										</label>
									</div>
									<button type="submit" class="btn btn-primary btn-block">Prihlásiť</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-b btn-block" type="button">Zrušiť</button>
			</div>
		</div>
	</div>
</div>