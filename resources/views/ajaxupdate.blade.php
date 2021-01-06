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


@if($form=="true")
    <div class="container">
        <h1>
            {{ $formType }}
        </h1>
        <div class="row">
            @csrf
            <input type="hidden" value="@if($formType==='AddNew') @else {{$data_edit[0]->id}} @endif" id="id" name="id">
            <div class="form-group col-6">
                <label for="exampleFormControlInput1">Hospital_id</label>
                <input type="text" maxlength="10" onkeyup="if (/\D/g.test(this.value))this.value = this.value.replace(/\D/g, '')" name="hospital_id"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->hospital_id}} @endif" class="form-control"
                    id="Hospital_id" placeholder="7897979797">

                @error('hospital_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">Domestic_intimation_to</label>
                <input type="email" name="domestic_intimation_to"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->domestic_intimation_to}} @endif"
                    class="form-control" id="Domestic_intimation_to" placeholder="name@example.com">
                @error('domestic_intimation_to')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">Di_cc</label>
                <input type="email" name="di_cc" value="@if($formType==='AddNew') @else {{$data_edit[0]->di_cc}} @endif"
                    class="form-control" id="Di_cc" placeholder="name@example.com">

                @error('di_cc')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">Di_bcc</label>
                <input type="email" name="di_bcc"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->di_bcc}} @endif" class="form-control"
                    id="Di_bcc" placeholder="name@example.com">
                @error('di_bcc')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlInput1">De_email</label>
                <input type="email" name="de_email"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->de_email}} @endif" class="form-control"
                    id="De_email" placeholder="name@example.com">

                @error('de_email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="exampleFormControlSelect1">Assignee_group</label>
                <select class="form-control" name="assignee_group"
                    value="@if($formType==='AddNew') @else {{$data_edit[0]->assignee_group}} @endif"
                    id="Assignee_group">
                    
                    @foreach($config as $res )
                    <option>{{ $res }}</option>
                    @endforeach
                    
                </select>

                @error('assignee_group')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-12">
                <button class="btn-success btn-submit" onclick="update()">@if($formType=='Update'){{'Update Record Now !'}} @else {{ 'Add New Record'}} @endif </button>
            </div>

        </div>
    </div>
    @endif