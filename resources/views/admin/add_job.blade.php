<!DOCTYPE html>
<html lang="en">

<head>
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
            <div class="container" align="center" style="padding-top: 100px;">
                <form action="{{url('upload_job')}}" method="POST" >
                    @csrf
                    <div style="padding:15px;">
                        <label> Post </label>
                        <input type="text" style="color:black" name="name" placeholder=" Write Post Name">
                    </div>

                    <div style="padding:15px;">
                        <label> Company </label>
                        <input type="text" style="color:black" name="company" placeholder=" Write Company Name">
                    </div>

                    <div style="padding:15px;">
                        <label> Location </label>
                        <input type="text" style="color:black" name="location" placeholder=" Job Location">
                    </div>

                    <div style="padding:15px;">
                        <label> Job Type </label>
                        <input type="text" style="color:black" name="type" placeholder=" Job type">
                    </div>

                    <div style="padding:15px;">
                        
                        <input type="submit" class="btn btn-success">

                    </div>
                </form>
            </div>
        </div>
        @include('admin.script')
    </div>
</body>

</html>