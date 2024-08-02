<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editable Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr id="row_1">
                    <td class="editmode_name_1">John Doe</td>
                    <td class="editmode_age_1">30</td>
                    <td class="editmode_salary_1">$2000</td>
                    <td>
                        <a href="#" class="edit-link" data-id="1">Edit</a>
                        <div class="update_1"></div>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <script>
    $(document).ready(function() {
        $('.edit-link').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            // Simulate a successful AJAX response with dummy data
            var result = {
                data: {
                    name: $('.editmode_name_' + id).text(),
                    age: $('.editmode_age_' + id).text(),
                    salary: $('.editmode_salary_' + id).text()
                }
            };

            var form = "<form method='post' onsubmit='UpdateData(" + id + "); return false;'>";
            var name = "<input type='text' class='form-control' name='name' value='" + result.data
                .name + "'>";
            var age = "<input type='text' class='form-control' name='age' value='" + result.data.age +
                "'>";
            var salary = "<input type='text' class='form-control' name='salary' value='" + result.data
                .salary + "'>";
            var btn = "<button class='btn btn-link' type='submit'>Submit</button>";
            form += name + age + salary + btn + "</form>";

            $('.editmode_name_' + id).html(name);
            $('.editmode_age_' + id).html(age);
            $('.editmode_salary_' + id).html(salary);
            $('.update_' + id).html(form);
            $(this).hide();
        });
    });

    function UpdateData(id) {
        // Your AJAX code to update data on the server goes here
        alert('Updating data for row ' + id);
    }
    </script>
</body>

</html>