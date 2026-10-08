<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaker List</title>
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

                                    <h4 class="m-t-0 header-title"><b>All Speakers</b></h4>

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Experience</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($speakers as $speaker)
                                            <tr>
                                                <td>{{ $speaker->id }}</td>

                                                <td>
                                                    @if($speaker->image)
                                                    <img src="{{ asset('speaker_images/'.$speaker->image) }}" width="60" height="60">
                                                    @else
                                                    No Image
                                                    @endif
                                                </td>

                                                <td>{{ $speaker->name }}</td>
                                                <td>{{ $speaker->designation }}</td>
                                                <td>{{ $speaker->email }}</td>
                                                <td>{{ $speaker->phone }}</td>
                                                <td>{{ $speaker->experience }}</td>

                                                <td>
                                                    <a href="{{ route('admin.editspeaker', $speaker->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                                    <a href="{{ route('admin.deletespeaker', $speaker->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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