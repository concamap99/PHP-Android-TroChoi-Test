@extends('layout')
@section('main-content')
 @include('sweetalert::alert')
Thùng rác lĩnh vực
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên gói Credit</th>
							<th>Số tiền</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach ($dsGoiCredit as $gc)						
						<tr>
							<td>{{$gc->id}}</td>
							<td>{{$gc->ten_goi_credit}}</td>
							<td>{{$gc->credit}}</td>
							<td>{{$gc->so_tien}}</td>
							<td>
								<form action="{{ url('/goi-credit/thung-rac/xoa/'.$gc->id) }}" method="GET">
									<a href="{{ url('/goi-credit/thung-rac/khoi-phuc/'.$gc->id) }}" class="btn btn-success waves-effect waves-light "><i class="fe-heart"></i></a> 
									<button class="btn btn-danger waves-effect waves-light" id="sa-warning"><i class="mdi mdi-close"></i></button>
								</form>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>

			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>
@endsection
@section('js')
	@include('extends/SA-footer')
@endsection

