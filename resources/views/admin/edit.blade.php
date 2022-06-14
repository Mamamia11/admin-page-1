@extends('admin.main')

@section('section')
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Forms</h4>
						</div>
					</div>
                    <form action="{{route('buku.update',$buku->id)}}" method="POST">
                    @csrf
                    @method('PUT')
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">ISBN :</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="isbn" value="{{$buku->isbn}}" class="form-control" placeholder="ISBN">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Judul</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="judul"  value="{{$buku->judul}}" class="form-control" placeholder="Judul">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Stok</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="stok"  value="{{$buku->stok}}" class="form-control" placeholder="Stok">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Cover</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="cover"  value="{{$buku->cover}}" class="form-control" placeholder="Cover">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">IdPengarang</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="idpengarang"  value="{{$buku->idpengarang}}" class="form-control" placeholder="Idpengarang">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">IdPenerbit</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="idpenerbit"  value="{{$buku->idpenerbit}}" class="form-control" placeholder="Idpenerbit">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">IdKategori</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="idkategori"  value="{{$buku->idkategori}}" class="form-control" placeholder="Idkategori">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">IdRak</label>
							<div class="col-sm-12 col-md-10">
                            <input type="text" name="idrak"  value="{{$buku->idrak}}" class="form-control" placeholder="Idrak">
							</div>
						</div>
						<div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
				        </div>
					</form>

			
@endsection