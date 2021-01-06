<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <br><br><br>

    @if($form=== "false")
    <div class="container">

        @if (session('statusDelete'))
        <br>
        <div class="text-center alert alert-danger">
            {{ session('statusDelete') }}
        </div>
        <br>
        @endif

        @if (session('datainsert'))
        <br>
        <div class="text-center alert alert-success">
            {{ session('datainsert') }}
        </div>
        <br>
        @endif
        <!-- <Button class="btn-primary float-right m-4" onclick="getform('new')">Add Hospital Records</button> -->
    </div>
    @endif
<table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Id </th>
                    <th>Hospital_id/Name</th>
                    <th>Domestic_intimation_to</th>
                    <th>Di_cc</th>
                    <th>Di_bcc</th>
                    <th>De_email</th>
                    <th>Assignee_group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($list as $res )
                <tr>
                    <td>{{ $res->id }}</td>
                    <td>{{ $res->hospital_id }}</td>
                    <td>{{ $res->domestic_intimation_to }}</td>
                    <td>{{ $res->di_cc }}</td>
                    <td>{{ $res->di_bcc }}</td>
                    <td>{{ $res->de_email }}</td>
                    <td>{{ $res->assignee_group }}</td>
                    <td> <Button class="btn-success" onclick="getform({{ $res->id }})">Edit</Button>
                        <Button onclick="deletes({{ $res->id }})" class="btn-danger mt-1">Delete</Button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Id </th>
                    <th>Hospital_id/Name</th>
                    <th>Domestic_intimation_to</th>
                    <th>Di_cc</th>
                    <th>Di_bcc</th>
                    <th>De_email</th>
                    <th>Assignee_group</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>

        
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    
        $('#example').DataTable({
            "pagingType": "full_numbers"
        });


    </script>