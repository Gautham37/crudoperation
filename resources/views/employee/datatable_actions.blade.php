<div class="d-inline-block text-nowrap">
    <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-20px"></i></button>
    <div class="dropdown-menu dropdown-menu-end m-0">
        <a href="{{route('employees.edit',$id)}}" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a>
        <a href="javascript:;" data-id="{{$id}}" data-url="{{route('employees.destroy', $id)}}"  onclick="deleteItemLoad(this)" class="dropdown-item delete-record"><i class="mdi mdi-delete-outline me-2"></i><span>Delete</span></a>
    </div>
</div>