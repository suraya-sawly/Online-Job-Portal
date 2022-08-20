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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Descriptiom</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Cancel Appoinment</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($data as $appoint)
                    <tr>
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->sub}}</td>
                        <td>{{$appoint->msg}}</td>
                        <td>{{$appoint->created_at}}</td>
                        <td>{{$appoint->status}}</td>
                        <td><a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approve</td>
                        <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('admin.script')

    </div>
</body>

</html>