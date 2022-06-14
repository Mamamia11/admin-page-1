@extends('admin.main')

@section('section')
<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Dashboard</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Buku
						</button>
					</div>
				</div>
			</div>
				<div class="row">
        <div class="col-md-12">
            <div class="card card-primary p-4">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">EXCERPT</th>
                                <th scope="col">IMAGE</th>
                                <th scope="col">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bukus as $buku)
                            <tr>
                                <th scope="row">
                                    {{ $loop->iteration }}
                                </th>
                                <td>
                                    {{ $buku->isbn }}
                                </td>
                                <td>
                                    {{ $buku->judul }}
                                </td>
                                <td>
                                    {{ $buku->stok }}
                                </td>
                                <td>
									<a class="btn btn-primary" href="{{ route('buku.edit',$buku->id) }}">Edit</a>
                                    <form action="{{route('buku.destroy',$buku->id)}}" method="POST">
									</a>
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('data yakin dihapus?')">Delete</i></button>
										
									</form>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<br>
			
		

	@include('admin.create')
	


@endsection
							