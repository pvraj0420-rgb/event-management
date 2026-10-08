<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
</head>

<body>
    @include('admin.header')
    @include('admin.leftsidebar')
    <div class="content-page">
        <div class="content">

            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <h4 class="m-t-0 header-title"><b>All Events</b></h4>

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Location</th>
                                                <th>Contact</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($events as $event)
                                            <tr>
                                                <td>{{ $event->id }}</td>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ $event->category }}</td>
                                                <td>{{ $event->date }}</td>
                                                <td>{{ $event->start_time }} - {{ $event->end_time }}</td>
                                                <td>{{ $event->location }}</td>
                                                <td>{{ $event->contact }}</td>

                                                <td>
                                                    @if($event->image)
                                                    <img src="{{ asset('event_images/'.$event->image) }}" width="60" height="60">
                                                    @else
                                                    No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.editevent',$event->id)}}" class="btn btn-primary btn-sm">Edit</a>

                                                    <a href="{{route('admin.deleteevent',$event->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                                </td>



                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
    @include('admin.footer')
</body>

</html>