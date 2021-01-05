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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                
                <a class="nav-item nav-link" target="_blank" href="https://github.com/vishwakirtivardhan/vaidamhealth"> Github Link</a>
    
                <a class="nav-item nav-link " target="_blank" href="https://drive.google.com/file/d/1nDUxwqL8jrTLABHXeTUB2z3aT5oM7F5P/view">Resume</a>
            </div>
        </div>
    </nav>
    @if($form=== "false")
    <div class="container">
        <a href="edit/new"><Button class="btn-primary float-right m-4">Add Hospital Records</button></a>
    </div>
    @endif

    @if($form=="true")
    <div class="container">
        <h1>
            {{ $formType }}
        </h1>
        <form class="row" method="POST" action="../update">
            @csrf
            <input type="hidden" value="@if($formType==='AddNew') @else {{$data_edit[0]->id}} @endif" name="id">
            <div class="form-group col-6">
                <label for="exampleFormControlInput1">hospital_id</label>
                <input type="text" onkeyup="if (/\D/g.test(this.value))this.value = this.value.replace(/\D/g, '')" name="hospital_id"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->hospital_id}} @endif" class="form-control"
                    id="exampleFormControlInput1" placeholder="Hospital Id">

                @error('hospital_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">domestic_intimation_to</label>
                <input type="text" name="domestic_intimation_to"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->domestic_intimation_to}} @endif"
                    class="form-control" id="exampleFormControlInput1" placeholder="Enter here">
                @error('domestic_intimation_to')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">di_cc</label>
                <input type="text" name="di_cc" value="@if($formType==='AddNew') @else {{$data_edit[0]->di_cc}} @endif"
                    class="form-control" id="exampleFormControlInput1" placeholder="Enter here">

                @error('di_cc')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">di_bcc</label>
                <input type="text" name="di_bcc"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->di_bcc}} @endif" class="form-control"
                    id="exampleFormControlInput1" placeholder="name@example.com">
                @error('di_bcc')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">de_email</label>
                <input type="email" name="de_email"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->de_email}} @endif" class="form-control"
                    id="exampleFormControlInput1" placeholder="Enter here">

                @error('de_email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlSelect1">assignee_group</label>
                <select class="form-control" name="assignee_group"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->assignee_group}} @endif"
                    id="exampleFormControlSelect1">
                    <option>Group 1</option>
                    <option>Group 2</option>
                    <option>Group 3</option>
                    <option>Group 4</option>
                    <option>Group 5</option>
                </select>

                @error('assignee_group')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-12">
                <button>@if($formType=='Update'){{'Update Record Now !'}} @else {{ 'Add New Record'}} @endif </button>
            </div>

        </form>
    </div>
    @endif


    @if($form=== "false")
    <div class="container">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>id </th>
                    <th>hospital_id/Name</th>
                    <th>domestic_intimation_to</th>
                    <th>di_cc</th>
                    <th>di_bcc</th>
                    <th>de_email</th>
                    <th>de_email</th>
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
                    <td><a href="edit/{{ $res->id }}"> <Button>Edit</Button></a><a href="delete/{{ $res->id }}">
                            <Button>Delete</Button></a> </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>id </th>
                    <th>hospital_id/Name</th>
                    <th>domestic_intimation_to</th>
                    <th>di_cc</th>
                    <th>di_bcc</th>
                    <th>de_email</th>
                    <th>de_email</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>

    </div>
@endif
<br><br><hr><br><br><br><br>
<
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pagingType": "full_numbers"
        });
    });
    </script>
</body>

</html>