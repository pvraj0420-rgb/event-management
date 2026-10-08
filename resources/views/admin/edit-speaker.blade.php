<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Speaker</title>
</head>

<body>
    @include('admin.header')
    @include('admin.leftsidebar')

    <div class="content-page">
        <div class="content">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="card-box">

                            <h4 class="m-t-0 header-title"><b>Update Speaker</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                Update speaker details below.
                            </p>

                            @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                            @endif

                            <form action="{{route('admin.updatespeaker',$speaker->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" name="name" value="{{ $speaker->name }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="designation" value="{{ $speaker->designation }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{ $speaker->description }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ $speaker->email }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{ $speaker->phone }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{ $speaker->fax }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Experience</label>
                                    <input type="text" name="experience" value="{{ $speaker->experience }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Skill 1</label>
                                    <input type="text" name="skill1_name" value="{{ $speaker->skill1_name }}" class="form-control">
                                    <input type="number" name="skill1_percent" value="{{ $speaker->skill1_percent }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Skill 2</label>
                                    <input type="text" name="skill2_name" value="{{ $speaker->skill2_name }}" class="form-control">
                                    <input type="number" name="skill2_percent" value="{{ $speaker->skill2_percent }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Skill 3</label>
                                    <input type="text" name="skill3_name" value="{{ $speaker->skill3_name }}" class="form-control">
                                    <input type="number" name="skill3_percent" value="{{ $speaker->skill3_percent }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Current Image</label><br>
                                    @if($speaker->image)
                                    <img src="{{ asset('speaker_images/'.$speaker->image) }}" width="80">
                                    @else
                                    No Image
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Change Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary" type="submit">
                                        Update
                                    </button>

                                    <a href="{{route('admin.speakerlist')}}" class="btn btn-default m-l-5">
                                        Cancel
                                    </a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

            @include('admin.footer')
</body>

</html>