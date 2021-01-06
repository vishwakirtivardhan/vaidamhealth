<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Project Curd</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-item nav-link" target="_blank" href="https://github.com/vishwakirtivardhan/vaidamhealth">
                    Github Link</a>

                <a class="nav-item nav-link " target="_blank"
                    href="https://drive.google.com/file/d/1nDUxwqL8jrTLABHXeTUB2z3aT5oM7F5P/view">Resume</a>
            </div>
        </div>
    </nav>


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
        <Button class="btn-primary float-right m-4" onclick="getform('new')">Add Hospital Records</button>
    </div>
    @endif

    <div id="form"></div>


    @if($form=== "false")
    <div class="p-2" id="table">
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
    </div>
    @endif
    <br><br>
    <hr><br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pagingType": "full_numbers"
        });
    });
    </script>
    <script>
    // ********* This is Ajax Code Js for Getting the Table after selecting the City Name ********* //
    function getform(id) {
        //let bank_id = document.getElementById('bank').value;
        console.log(id);
        var reqes = new XMLHttpRequest();
        reqes.open("get", "http://localhost/vaidamhealth/public/edit/"+id, true);
        reqes.send();
        reqes.onreadystatechange = function() {
            if (reqes.readyState == 4 && reqes.status === 200) {
                document.getElementById('table').style.display = "none";
                document.getElementById('form').innerHTML = reqes.responseText;
                document.getElementById('form').style.display = "block";
            }
        }
    }


    function deletes(id) {
        //let bank_id = document.getElementById('bank').value;
        console.log(id);
        var reqes = new XMLHttpRequest();
        reqes.open("get", "http://localhost/vaidamhealth/public/delete/"+id, true);
        reqes.send();
        reqes.onreadystatechange = function() {
            if (reqes.readyState == 4 && reqes.status === 200) {
                document.getElementById('table').style.display = "none";
                document.getElementById('table').innerHTML = reqes.responseText;
                document.getElementById('table').style.display = "block";
            }
        }
    }
    </script>

    <script>
    function update() {
        let Hospital_id = document.getElementById('Hospital_id').value;
        let id = document.getElementById('id').value;
        let Domestic_intimation_to = document.getElementById('Domestic_intimation_to').value;
        let Di_cc = document.getElementById('Di_cc').value;
        let Di_bcc = document.getElementById('Di_bcc').value;
        let De_email = document.getElementById('De_email').value;
        let Assignee_group = document.getElementById('Assignee_group').value;
        let token=document.querySelector('input[name=_token]').value

        console.log(token);
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "http://localhost/vaidamhealth/public/updates", true);
        xhttp.setRequestHeader("Content-Type", "application/json");

        var data = {
            hospital_id: Hospital_id,
            id: id,
            domestic_intimation_to: Domestic_intimation_to,
            di_cc: Di_cc,
            di_bcc: Di_bcc,
            de_email: De_email,
            assignee_group: Assignee_group,
            _token:token
        };
        //xhttp.send(JSON.stringify(data));
        xhttp.send(JSON.stringify(data));
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status === 200) {
                document.getElementById('form').style.display = "none";
                document.getElementById('table').innerHTML = xhttp.responseText;
                document.getElementById('table').style.display = "block";
            }
        }
    }
    </script>

</body>

</html>