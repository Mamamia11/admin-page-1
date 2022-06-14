<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{route('buku.store')}}" method="POST">
						@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>ISBN :</strong>
									<input type="text" name="isbn" class="form-control" placeholder="ISBN">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Judul :</strong>
									<input type="text" name="judul" class="form-control" placeholder="Judul">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Stok :</strong>
									<input type="text" name="stok" class="form-control" placeholder="Stok">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Cover :</strong>
									<input type="text" name="cover" class="form-control" placeholder="Cover">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Idpengarang :</strong>
									<input type="text" name="idpengarang" class="form-control" placeholder="Idpengarang">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Idpenerbit :</strong>
									<input type="text" name="idpenerbit" class="form-control" placeholder="Idpenerbit">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Idkategori :</strong>
									<input type="text" name="idkategori" class="form-control" placeholder="Idkategori">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Idrak :</strong>
									<input type="text" name="idrak" class="form-control" placeholder="Idrak">
								</div>
							</div>
						</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				</form>
				</div>
			</div>
			</div>