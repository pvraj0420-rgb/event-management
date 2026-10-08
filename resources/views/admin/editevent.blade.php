<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event</title>
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

                            <form action="{{route('admin.updateevent',$event->id)}}" method="POST" enctype="multipart/form-data" data-parsley-validate novalidate>
                                @csrf
                                <div class="form-group">
                                    <label>Event Title*</label>
                                    <input type="text" name="title" value="{{$event->title}}" required class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$event->description}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option value="">Select Category</option>
                                           @foreach($categories as $cat)
                                           <option value="{{$cat->name}}"
                                           {{$event->category==$cat->name ? 'selected'  : ''}}>
                                           {{$cat->name}}
                                           </option>
                                           @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" value="{{ $event->date }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input type="time" name="start_time" value="{{ $event->start_time }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>End Time</label>
                                    <input type="time" name="end_time" value="{{ $event->end_time }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" value="{{ $event->location }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" name="venue" value="{{ $event->venue }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{ $event->address }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" name="contact" value="{{ $event->contact }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ $event->email }}" class="form-control">
                                </div>

                                <div class="form-group">
    <label>Speaker</label>
    <select name="speaker_name" class="form-control">
        <option value="">Select Speaker</option>
        @foreach($speakers as $speaker)
            <option value="{{ $speaker->name }}"
                {{ $event->speaker_name == $speaker->name ? 'selected' : '' }}>
                {{ $speaker->name }}
            </option>
        @endforeach
    </select>
</div>
                                <div class="form-group">
                                    <label>Current Image</label><br>
                                    @if($event->image)
                                    <img src="{{ asset('event_images/'.$event->image) }}" width="80">
                                    @else
                                    No Image
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Change Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Update
                                    </button>

                                    <a href="{{route('admin.eventlist')}}" class="btn btn-default m-l-5">
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