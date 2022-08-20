<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <style type="text/css">
    label {
        display: inline-block;
        width: 200px;
    }
    </style>

    @include('admin.css')
</head>

<body>
    <div class="container-scroller">


        @include('admin.nav')

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding:100px">

                <form action="{{url('editjob',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label>Position Name</label>
                        <input type="text" style="color:black;" name="name" value="{{$data->name}}">
                    </div>

                    <div style="padding:15px;">
                        <label>Company Name</label>
                        <input type="text" style="color:black;" name="company" value="{{$data->company}}">
                    </div>

                    <div style="padding:15px;">
                        <label>Location</label>
                        <input type="text" style="color:black;" name="location" value="{{$data->location}}">
                    </div>

                    <div style="padding:15px;">
                        <label>Job Type</label>
                        <input type="text" style="color:black;" name="type" value="{{$data->type}}">
                    </div>

                    <div style="padding:15px;">

                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>
            </div>


            @include('admin.script')

        </div>
</body>

</html>