<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
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

                            <h4 class="m-t-0 header-title"><b>Add Event</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                Fill event details below.
                            </p>

                            @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                            @endif



                            <form action="{{route('admin.addevent')}}" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                                @csrf

                                <div class="form-group">
                                    <label>Event Title*</label>
                                    <input type="text" name="title" required class="form-control" placeholder="Enter event title">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="5" placeholder="Enter Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $cat)
                                        <option value="{{$cat->name}}">
                                            {{$cat->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input type="time" name="start_time" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>End Time</label>
                                    <input type="time" name="end_time" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control" placeholder="Enter location">
                                </div>

                                <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" name="venue" class="form-control" placeholder="Enter venue">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter address">
                                </div>

                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control" placeholder="Enter contact number">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Speaker</label>
                                    <select name="speaker_name" class="form-control">
                                        <option value="">Select Speaker</option>
                                        @foreach($speakers as $speaker)
                                        <option value="{{ $speaker->name }}">
                                            {{ $speaker->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Event Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                        Cancel
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @include('admin.footer')
</body>

</html>