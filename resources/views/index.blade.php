<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <script src="{{url('jquery.min.js')}}"></script>
    <script src="{{url('bootstrap.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <h1>Employee List</h1>
        <a href="{{route('emplooyee.create')}}" class="btn btn-primary">Add Emplooyee</a>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Age</th>
                    <th class="text-center">Salary</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse($list as $value)
                <tr id="row_{{$value->id}}">
                    <td class=" text-center editmode_name_{{$value->id}}">{{ $value->name }}</td>
                    <td class="text-center editmode_age_{{$value->id}}">{{ $value->age }}</td>
                    <td class="text-center editmode_salary_{{$value->id}}">
                        <input type="hidden" name="salary" class="oldsalary_{{$value->id}}"
                            value="{{$value->salary}}" />
                        &#8377;{{ number_format($value->salary,2) }}
                    </td>
                    <td class="text-center"><button class="btnhide_{{$value->id}} btn btn-link me-3"
                            onclick="EditMode('{{$value->id}}')">
                            Edit</button>
                        <div class="update_{{$value->id}}"></div>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-link me-3" onclick="DeleteRecord('{{$value->id}}')">Delete</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" style="text-align: center;">No Record Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="text-center">
            {{ $list->links() }}
        </div>
    </div>

</body>
<script>
function EditMode(id) {
    form = btn = name = age = salary = '';
    var url = "{{ route('emplooyee.edit', ':id') }}";
    url = url.replace(':id', id);
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function(result) {
            var row = $('#row_' + id);
            var name = row.find('.editmode_name_' + id).text();
            var age = row.find('.editmode_age_' + id).text();
            var salary = row.find('.editmode_salary_' + id).text();

            row.find('.editmode_name_' + id).html("<input type='text' class='form-control name_" + id +
                "' value='" +
                name +
                "'/>");
            row.find('.editmode_age_' + id).html("<input type='text' class='form-control age_" + id +
                "' value='" + age +
                "'/>");
            row.find('.editmode_salary_' + id).html("<input type='text' class='form-control salary_" + id +
                "' value='" +
                salary +
                "'/>");
            row.find('#btnHide_' + id).removeClass('d-none');
            btn +=
                "<td><button class='btn btn-primary' onclick='UpdateData(" + id +
                ")' type='submit'>Update</button></td><td  class='text-center'><button class='btn btn-danger'>Cancel</button></td>";
            form += name + age + salary + btn + "</td>";
            $('.btnhide_' + id).hide();
            $('.update_' + id).html(btn);
            $('#form_' + id).html(name);
            $('#btnHide_' + id).addClass('d-none');
        }
    });
}

// $()

function UpdateData(id) {
    console.log($('.oldsalary_' + id).val());
    var url = "{{ route('emplooyee.update', ':id') }}";
    url = url.replace(':id', id);
    if (confirm('Are you sure')) {
        $.ajax({
            url: url,
            type: "PUT",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            data: {
                name: $('.name_' + id).val(),
                age: $('.age_' + id).val(),
                salary: $('.oldsalary_' + id).val(),
            },
            success: function(result) {
                if (result.status == 200) {
                    $('.btnhide_' + id).hide();
                    location.href = "{{route('emplooyee.index')}}";
                }
            }
        });
    }
}

function DeleteRecord(id) {
    if (confirm("Are you sure you want delete this record?")) {
        var url = "{{ route('emplooyee.destroy', ':id') }}";
        url = url.replace(':id', id);
        $.ajax({
            url: url,
            type: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            dataType: "JSON",
            success: function(result) {
                if (result.status == 200) {
                    location.href = "{{route('emplooyee.index')}}";
                }
            }
        });
    }
}
</script>

</html>