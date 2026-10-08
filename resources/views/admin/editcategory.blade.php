@include('admin.header')
@include('admin.leftsidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>

<body>

<div class="clearfix"></div>

<div class="wrapper-page">
    <div class="card-box">

        <h4 class="m-t-0 header-title"><b>Edit Category</b></h4>
        <p class="text-muted font-13 m-b-30">
            Update category details.
        </p>

        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        <form method="POST" action="{{route('admin.updatecategory',$category->id)}}" data-parsley-validate novalidate>
            @csrf

            <div class="form-group">
                <label for="editCategory">Category Name *</label>
                <input type="text" name="name" required value="{{$category->name}}" class="form-control" id="editCategory">
            </div>

            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                    Update Category
                </button>
                <button type="reset" class="btn btn-default waves-effect m-l-5">
                    Cancel
                </button>
            </div>

        </form>

    </div>
</div>

@include('admin.footer')


</body>
</html>