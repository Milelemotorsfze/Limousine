@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Enquires</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Enquires</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List Enquires </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Contact Number</th>
                                        <th>Vehicle</th>
                                        <th>Location</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Remarks</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($enquires as $enquiry)
                                        <tr>
                                            <td>{{ $enquiry->customer_name }}</td>
                                            <td>{{ $enquiry->contact_number }}</td>
                                            <td>{{ $enquiry->vehicle }}</td>
                                            <td>{{ $enquiry->location }}</td>
                                            <td>{{ $enquiry->start_date }}</td>
                                            <td>{{ $enquiry->end_date }}</td>
                                            <td>{{ $enquiry->remarks }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remarkUpdateModal-{{$enquiry->id}}">
                                                    Remarks update
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Button trigger modal -->

                                        <!-- Modal -->
                                        <div class="modal fade" id="remarkUpdateModal-{{$enquiry->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <form action="{{ route('enquires.update', $enquiry->id) }}" method="POST" >
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Update Remarks</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label>Remarks</label>
                                                                    <textarea cols="4" rows="10" class="form-control" name="remarks" >{{ $enquiry->remarks }}</textarea>

{{--                                                                    <div class="row mt-2">--}}
{{--                                                                        <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                                                            <label class="form-label font-size-13 text-muted">Contact Number</label>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                                                            <input type="text"  class="form-control" name="contact_number" >--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="row mt-2">--}}
{{--                                                                        <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                                                            <label class="form-label font-size-13 text-muted">Vehicle</label>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                                                            <select class="form-control" name="vehicle">--}}
{{--                                                                                <option></option>--}}
{{--                                                                                <option>HYUNDAI ACCENT – WHITE</option>--}}
{{--                                                                                <option>NISSAN KICKS  - BLACK</option>--}}
{{--                                                                                <option>KIA K5 – WHITE</option>--}}
{{--                                                                                <option>CHEVROLET CAPTIVA PREMIER – Silver</option>--}}
{{--                                                                                <option>KIA PICANTO– SPARKLING SILVER</option>--}}
{{--                                                                            </select>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="row mt-2">--}}
{{--                                                                        <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                                                            <label class="form-label font-size-13 text-muted">Start Date </label>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                                                            <input type="date"  class="form-control" name="start_date" >--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="row mt-2">--}}
{{--                                                                        <div class="col-lg-4 col-md-12 col-sm-12">--}}
{{--                                                                            <label class="form-label font-size-13 text-muted">End Date </label>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-lg-8 col-md-12 col-sm-12">--}}
{{--                                                                            <input type="date"  class="form-control" name="end_date" >--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach


                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>

@endsection
@push('scripts')
    <script>
        $('#example1').DataTable({
        });

    </script>
@endpush
