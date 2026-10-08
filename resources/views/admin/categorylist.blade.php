
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>
<body>
   @include('admin.header')
   @include('admin.leftsidebar')

<div class="content-page">
    <div class="content">
        <div class="container-fluid mt-4 px-4">

            <div class="card-box">

                <h4><b>Category List</b></h4>

                @if(session('success'))
                    <div class="alert alert-success" id="msg">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($categories as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->name}}</td>
                                <td>
                                    <a href="{{route('admin.editcategory',$cat->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{route('admin.deletecategory',$cat->id)}}" class="btn btn-danger btn-sm">Delete</a>
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

@include('admin.footer')
</body>
</html>