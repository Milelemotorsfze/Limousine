@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Subscriptions</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Subscriptions</li>
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
                                <h3 class="card-title">List Subscriptions </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="subscriptionsTable" class="table table-bordered table-hover table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Request Receive Count</th>
                                        <th>Last Subscribed Date</th>
                                        <th>First Subscribed Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subscriptions as $subscription)
                                        <tr>
                                            <td>{{ $subscription->email }}</td>
                                            <td>{{ $subscription->request_submit_count }}</td>
                                            <td>{{ $subscription->last_submited_at }}</td>
                                            <td>{{ $subscription->created_at }}</td>
                                        </tr>
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
        $('#subscriptionsTable').DataTable({
        });

    </script>
@endpush
