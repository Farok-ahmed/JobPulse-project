@extends('companyPanel.layout.app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">DataTables</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h4 class="card-title">Job Application List</h4>
                            </div>

                        </div>
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Candidate Name</th>
                                        <th>Job Title</th>
                                        <th>Job Owner</th>
                                        <th>CV</th>
                                        <th>status</th>
                                        <th>Applied Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($jobApplications as $key => $apply)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            @if ($apply->user)
                                                <td>{{ $apply->user->name }}</td>
                                            @else
                                                <td>User CV not available</td>
                                            @endif


                                            <td>{{ $apply->Job->title }}</td>
                                            <td>{{ $apply->Job->user->name }}</td>

                                            <td><a href="{{ url('cv/download/' . $apply->id) }}">Download</a></td>
                                            <td>{{ $apply->status }}</td>
                                            <td>{{ \Carbon\Carbon::parse($apply->created_at)->format('d M,Y') }}</td>
                                            <td>
                                                <a class="btn btn-primary "
                                                    href="{{ route('company.jobApplicationEdit', $apply->id) }}">Edit</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection
