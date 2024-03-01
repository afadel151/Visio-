<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple DataTables Example</title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Include CSS files for DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!-- Include other CSS files if necessary -->

</head>
<body>

<div class="container">
    <div>
        <h2>All Teachers</h2>
        <table id="teachers" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Teacher Name</th>
                    <th>Teacher Grade</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table body for teachers -->
            </tbody>
        </table>
    </div>
    
    <div>
        <h2>Manage Rooms</h2>
        <table id="rooms" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Room</th>
                    <th>Capacity Exams</th>
                    <th>Capacity Teaching</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table body for rooms -->
            </tbody>
        </table>
    </div>
</div>

<!-- Include JavaScript files for DataTables and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTable for teachers
        $('#teachers').DataTable({
            processing: true,
              serverSide: true,
              ajax: "{{ route('teachers.index') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'teacher_name', name: 'teacher_name', searchable: true},
                  {data: 'teacher_type', name: 'teacher_type'},
                //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
                  {data: 'department.department', name: 'department_id', searchable: false , orderable : true},
                  {data: 'action', name: 'action'},
              ]
        });

        // Initialize DataTable for rooms
        $('#rooms').DataTable({
            
                // Define columns for rooms DataTable
                processing: true,
              serverSide: true,
              ajax: "{{ route('rooms.index') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'room', name: 'room', searchable: true},
                  {data: 'capacity_exams', name: 'teacher_type'},
                //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
                  {data: 'capacity_teaching', name: 'capacity_teaching', searchable: false , orderable : true},
                  {data: 'action', name: 'action'},
              ]
            ]
        });
    });
</script>

</body>
</html>