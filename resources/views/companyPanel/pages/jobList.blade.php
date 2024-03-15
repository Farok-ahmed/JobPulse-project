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
                            <div><h4 class="card-title">Job  Datatable</h4>
                                </div>
                            <div><a class="btn btn-primary" href="{{route('company.createJob')}}">Create Job</a></div>
                        </div>
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Job Title</th>
                                        <th>Job Features</th>
                                        <th>Job Status</th>
                                        <th>Job Post date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($jobs as $key=>$job )
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$job->title}}</td>
                                        <td>{{$job->features_at}}</td>
                                        <td>{{$job->status}}</td>
                                        <td>{{\Carbon\Carbon::parse($job->created_at)->format('d M,Y')}}</td>
                                        <td>
                                            <a class="btn btn-primary " href="{{route('company.JobEdit',$job->id)}}">Edit</a>
                                            <a class="btn btn-danger" href="{{url('company/job-delete/'.$job->id)}}">Delete</a>
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
