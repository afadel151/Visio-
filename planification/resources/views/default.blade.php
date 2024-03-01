<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $('table.display').DataTable();
        });
    </script>
    <!-- Scripts -->
    @vite(['resources/css/app.css'])

    @vite('resources/css/sidebar.css')

    <title>Document</title>
</head>

<body class="z-0">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
    <div class="flex w-screen">
        <div class="w-[92px] h-screen sticky top-0 z-10 ">
            @include('inc.sidebar')
        </div>
        <div class="w-[110%] z-0 flex justify-center items-center ">

            @yield('content')
        </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () {
          var table = $('#teachers').DataTable({
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
          var table = $('#rooms').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('rooms.index') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'room', name: 'room', searchable: true},
                  {data: 'capacity_exams', name: 'capacity_exams'},
                //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
                  {data: 'capacity_teaching', name: 'capacity_teaching', searchable: false , orderable : true},
                  {data: 'action', name: 'action'},
              ]
          });
        });
    </script>
    @vite('resources/js/sidebar.js')
    @stack('scripts')
</body>

</html>
