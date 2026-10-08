@include('admin.header')
@include('admin.leftsidebar')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    
</head>

<body>

    <div class="clearfix"></div>

    <div class="wrapper-page">
        <div class="card-box">

            <h4 class="m-t-0 header-title"><b>Category Form</b></h4>
            <p class="text-muted font-13 m-b-30">
                Add new category below.
            </p>

            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            <form method="POST" action="{{route('admin.addcategory')}}" data-parsley-validate novalidate>
                @csrf

                <div class="form-group">
                    <label for="categoryName">Category Name *</label>
                    <input type="text" name="name" required class="form-control" id="categoryName" placeholder="Enter category name">
                </div>

                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Add Category
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