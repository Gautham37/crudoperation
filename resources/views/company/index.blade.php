@extends('layouts.app')

@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <h4 class="fw-semibold pt-3 mb-4">Video Category List</h4> -->

          <div class="col-xl-12">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-pills mb-3" role="tablist">
                  <li class="nav-item">
                      <button type="button" class="nav-link @if(\Request::route()->getName()=='companies.index') active @endif" role="tab" data-bs-toggle="tab" data-bs-target="#list" aria-controls="navs-pills-justified-home" aria-selected="true"><i class="tf-icons mdi mdi-view-list me-1"></i> Companies List</button>
                  </li>
                  @if(\Request::route()->getName()!='companies.edit')
                  <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#add" aria-controls="navs-pills-justified-profile" aria-selected="false"><i class="tf-icons mdi mdi-plus-circle me-1"></i> Add Company</button>
                  </li>
                  @endif
                  @if(\Request::route()->getName()=='companies.edit')
                  <li class="nav-item">
                      <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#edit" aria-controls="navs-pills-justified-messages" aria-selected="false"><i class="tf-icons mdi mdi-circle-edit-outline me-1"></i> Edit Company</button>
                  </li>
                  @endif
                </ul>
                <div class="tab-content">
                  
                  @include('layouts.message')
                  
                  <div class="tab-pane fade @if(\Request::route()->getName()=='companies.index') show active @endif" id="list" role="tabpanel">
                      
                    <!-- Permission Table -->
                    <!-- <div class="card">
                        <div class="card-datatable table-responsive"> -->
                            <table class="datatables table">
                                <thead class="table-light">
                                    <tr>
                                        <th></th>
                                        <th>Logo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        <!-- </div>
                    </div> -->
                    <!--/ Permission Table -->

                  </div>
                  
                  @if(\Request::route()->getName()=='companies.index')
                  <div class="tab-pane fade" id="add" role="tabpanel">
                      
                  {!! Form::open(['route' => 'companies.store', 'class' => 'company-form','enctype' => 'multipart/form-data']) !!}

                    @include('company.fields')

                  {!! Form::close() !!}

                  </div>
                  @endif

                  @if(\Request::route()->getName()=='companies.edit')
                  <div class="tab-pane fade show active" id="edit" role="tabpanel">
                    {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'patch', 'class' => '','enctype' => 'multipart/form-data']) !!}

                      @include('company.fields')

                    {!! Form::close() !!}
                  </div>
                  @endif

                </div>
            </div>
          </div>
    
      </div>
      <!-- / Content -->
      <div class="content-backdrop fade"></div>
      
</div>
<!-- Content wrapper -->

@push('scripts')

<script type="text/javascript">

    var i = 1;
    var table = $('.datatables').DataTable({
        processing: true,
        serverSide: true,
        searching: true,              // Searchbox
        paging: true,
        pageLength: 20, 
        ajax: "{{ route('companies.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true, class: "text-center"},
            {data: 'logo', name: 'logo', orderable: false, searchable: true, class: "text-left"},
            {data: 'name', name: 'name', orderable: false, searchable: true, class: "text-left"},
            {data: 'email', name: 'email', orderable: false, searchable: true, class: "text-left"},
            {data: 'website', name: 'website', orderable: false, searchable: true, class: "text-left"},
            {data: 'action', name: 'action', orderable: false, searchable: false, class: "text-center"},
        ]
    });

</script>

@endpush

@endsection