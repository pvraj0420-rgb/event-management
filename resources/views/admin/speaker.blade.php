<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Speaker</title>
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

                            <h4 class="m-t-0 header-title"><b>Add Speaker</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                Fill speaker details below.
                            </p>



                            <form action="{{ route('admin.addspeaker') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control" placeholder="Enter designation">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Experience</label>
                                    <input type="text" name="experience" class="form-control">
                                </div>

<div class="form-group">
    <label>Skill 1</label>
    <input type="text" name="skill1_name" class="form-control" placeholder="Skill name">
    <input type="number" name="skill1_percent" class="form-control" placeholder="Percentage">
</div>

<div class="form-group">
    <label>Skill 2</label>
    <input type="text" name="skill2_name" class="form-control" placeholder="Skill name">
    <input type="number" name="skill2_percent" class="form-control" placeholder="Percentage">
</div>

<div class="form-group">
    <label>Skill 3</label>
    <input type="text" name="skill3_name" class="form-control" placeholder="Skill name">
    <input type="number" name="skill3_percent" class="form-control" placeholder="Percentage">
</div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary" type="submit">
                                        Submit
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