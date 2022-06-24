@section('title', __('Categories'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="icon icon-shape icon-sm"></i>
							Categories </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Recherche">
						</div>
						<button type="button" class="btn bg-gradient-dark btn-sm" data-toggle="modal" data-target="#createDataModal" >
							<i class="fa fa-plus"></i> Ajouter
						</button>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.categories.create')
						@include('livewire.categories.update')

				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nom</th>
								<th>Priorité</th>
								<th>Icon</th>
								<th>Parent</th>
								<td></td>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->weight }}</td>
								<td>{{ $row->icon }}</td>
								<td>{{ $row->parent_id }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editer </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Catégorie id {{$row->id}}? \nDeleted Catégories cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $categories->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
