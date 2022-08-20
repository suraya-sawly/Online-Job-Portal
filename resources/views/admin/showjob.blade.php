<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style href="text/css">
    table {
        border-collapse: collapse;
        text-align: left;
        width: 80%;
    }

    table tr {
        width: 20%;
        border-bottom: 1px solid
    }

    table th,
    table td {
        padding: 50px 20px;
    }

    /* Simple CSS for scrollable table on mobile */
    table {
        min-width: 500px;
    }
    </style>
</head>

<body>
    <div class="container-scroller">


        @include('admin.nav')

        <div class="container-fluid page-body-wrapper">
        <table>
                <thead>
                    <tr>
                        <th>Position Name</th>
                        <th>Company</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                </thead>
                <tbody>
                   @foreach($data as $job)
                    <tr>
                        <td>{{$job->name}}</td>
                        <td>{{$job->company}}</td>
                        <td>{{$job->location}}</td>
                        <td>{{$job->type}}</td>
                        <td>{{$job->created_at}}</td>
                        <td><a class="btn btn-danger" href="{{url('deletejob',$job->id)}}">Delete</td>
                        <td><a class="btn btn-success" href="{{url('updatejob',$job->id)}}">Update</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>


        </div>

        @include('admin.script')

    </div>
</body>

</html>