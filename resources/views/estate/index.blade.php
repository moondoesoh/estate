@extends('layout.master')

@section('content')
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Address</th>
				<th scope="col">Road</th>
				<th scope="col">Area</th>
				<th scope="col">Type</th>
				<th scope="col">Township</th>
				<th scope="col">Price</th>
				<th scope="col">Note</th>
				<th scope="col">Deal</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1 ?>
			@foreach($estates as $estate)
			<?php
				if($estate->status == 1 ) { 
					$color="bg-success"; 
				} else { 
					$color="bg-secondary"; 
				}
			?>
			<tr class={{$color}}>
				<th scope="row"><a href="/estate/{{ $estate->id }}/edit" class="text-dark" style="text-decoration: none">{{$i }}</a></th>
				<td>{{$estate->address}}</td>
				<td>{{$estate->road}}</td>
				<td>{{$estate->area}}</td>
				<td>{{$estate->type->name}}</td>
				<td>{{$estate->township->name}}</td>
				<td>{{$estate->price}}</td>
				<td>{{$estate->note}}</td>
				<td>{{$estate->deal}}</td>
			</tr>
			<?php $i++ ?>
			@endforeach
		</tbody>
	</table>
</div>
@endsection