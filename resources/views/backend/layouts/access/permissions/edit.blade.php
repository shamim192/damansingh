@extends('backend.app', ['title' => 'Update Permission'])

@section('content')

<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <div class="page-header">
                <div>
                    <h1 class="page-title">Permission</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Access</li>
                        <li class="breadcrumb-item">Permission</li>
                        <li class="breadcrumb-item">Update</li>
                    </ol>
                </div>
            </div>

            <div class="row" id="user-profile">
                <div class="col-lg-12">

                    <div class="tab-content">
                        <div class="tab-pane active show" id="editProfile">
                            <div class="card">
                                <div class="card-body border-0">
                                    <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Permission Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $permission->name }}">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection
@push('scripts')

@endpush