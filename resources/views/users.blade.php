@extends('layouts.app')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/dashboardstyles.css" rel="stylesheet" />
    {{-- <link href="css/Paginate.css" rel="stylesheet" /> --}}
    
    <link href="images/favicon.png" rel="icon" type="image/png"> 
@endpush
@push('scripts')
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
@endpush
@section('content')
<div id="layoutSidenav_content">
    <main class="container">
        {{-- <div class="container"> --}}
            <h1 class="mt-4">User Management</h1>
            <div class="pull-right">
               
                {{-- <a class="btn btn-success" href="{{ route('register') }}"> Create New User</a> --}}
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
                <div class="card-body">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th width="200px">No</th>
                                    <th width="150px">Name</th>
                                    <th width="150px">Email</th>
                                    <th width="150px">Roles</th>
                                    <th width="280px">Action</th>
                                    
                                </tr>
                            </thead>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>user</td>
                                    
                                    <td>
                                        <a href = 'delete/{{ $user->id }}'>Delete</a>
                                        {{-- <a class="btn btn-success" href="" class="delete-button"><i class="fas fa-trash-alt"></i><span class="edit-icon">&#9998;</span></a></td> --}}
                                    </td>
                                </tr>
                            @endforeach  
                        </table>
                    </div>
                </div>
                {{-- <div class="pagination">
                    {{ $data->links() }}
                </div> --}}
               <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
                </div> 
    </main>
   
</div>
@endsection
                                        

                                 