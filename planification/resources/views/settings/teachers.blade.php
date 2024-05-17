@extends('settings.index')
@push('settings.styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
    <script>
         const openModal = (button) => {
            const modal = button.nextElementSibling;
            modal.showModal();
        }

        function closeModal(button) {
            const modal = button.closest('.modal');
            modal.close();
        }

    </script>
@endpush
@section('settings')
    <div class="container flex justify-center items-center flex-col w-[100%]  mt-20">
        <div>
            <p class="text-7xl font-weight-bold  " style="font-weight: 700">All Teachers </p>
        </div>
        <div class="card p-4 mt-20 w-[90%] mb-20">
            <div class="card-header text-3xl text-center ">Manage Teachers</div>
            <div class="card-body w-[100%]">
                {{-- {!! $dataTab->table() !!} --}}
                <table class="table table-bordered w-[100%] display" id="teachers">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Teacher Name</th>
                            <th>Teacher Grade</th>
                            <th>Department </th>
                            <th>Absences</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->teacher_name }}</td>
                                <td>{{ $teacher->teacher_type }}</td>
                                <td>{{ $teacher->department->department }}</td>
                                <td>
                                    <a href="{{ route('teachers.show', ['id' => $teacher->id]) }}"
                                        class="edit btn btn-info btn-sm rounded-l">View</a>
                                        <a href="{{ route('teachers.delete', ['id' => $teacher->id]) }}"
                                            class="edit btn btn-error btn-sm rounded-l">delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class=" h-44 border-2 rounded-2xl flex justify-center items-center mb-20">
            <!-- Open the modal using ID.showModal() method -->
            <!-- Open the modal using ID.showModal() method -->
            <!-- You can open the modal using ID.showModal() method -->
            <button class="btn m-96" onclick="my_modal_4.showModal()">Add a teacher</button>
            <dialog id="my_modal_4" class="modal">
                <div class="modal-box font-bold w-3/12 h-[50%] max-w-5xl flex flex-col justify-between">
                    <div>
                        <h3 class="font-bold text-2xl">Add a teacher!</h3>
                    </div>
                    <form id="create-teacher" action="{{route('teachers.create')}}" method="POST" enctype="multipart/form-data"  class="flex text-lg flex-col justify-around items-center space-y-4 ">
                        @csrf
                        
                        <div class="w-full flex justify-center  items-center space-x-4">
                            <label for="name">Teacher name : </label>
                            <input type="text" name="teacher_name" id="name" placeholder="Enter teacher name" class="input-lg input-bordered rounded-lg">
                        </div>
                        <div class="w-full flex justify-center  items-center space-x-4">
                            <label for="grade">Teacher grade : </label>
                            <select name="teacher_grade" id="grade" class="select-lg input-bordered rounded-lg">
                                <option value="0">Select a grade</option>
                                <option value="Maitre A">Maitre A</option>
                                <option value="Maitre B">Maitre B</option>
                            </select>
                        </div>
                        <div class="w-full flex justify-center  items-center space-x-4">
                            <label for="type">Teacher type : </label>
                            <select name="teacher_type" class="select-lg input-bordered rounded-lg">
                                <option value="0">Select a type</option>
                                <option value="Detache">Detache</option>
                                <option value="Vacataire">Vacataire</option>
                                <option value="ENPEI">ENPEI</option>
                                <option value="EMP">EMP</option>
                                <option value="DSS">DSS</option>
                            </select>
                        </div>
                        <div class="w-full flex justify-center  items-center space-x-4">
                            <label for="depart">Department : </label>
                            <select name="department_id" id="depart" class="select-bordered select-lg rounded-lg">
                                <option value="">Select a Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}">{{$department->department}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                    <div class="modal-action ">
                        <form method="dialog">
                            <!-- if there is a button, it will close the modal -->
                            <button class="btn btn-primary"  type="submit" form="create-teacher" value="submit">Create</button>
                            <button class="btn">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    @vite('resources/js/app.js')
    <script>
        $(function() {
            var table = $('#teachers').DataTable({

                processing: true,
                serverSide: true,
                ajax: "{{ route('teachers.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'teacher_name',
                        name: 'teacher_name',
                        searchable: true
                    },
                    {
                        data: 'teacher_type',
                        name: 'teacher_type'
                    },
                    {
                        data: 'department.department',
                        name: 'department_id',
                        searchable: false,
                        orderable: true
                    },
                    {
                        data: 'absences',
                        name: 'absences',
                        orderable: true,
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }

                ],
                buttons: [{
                        extend: 'copy',
                        exportOptions: {
                            columns: ':not(.exclude)' // Exclude columns with the 'exclude' class from export
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':not(.exclude)' // Exclude columns with the 'exclude' class from export
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':not(.exclude)' // Exclude columns with the 'exclude' class from export
                        },
                        customize: function(doc) {
                            // Remove buttons from PDF export
                            $(doc.document.body).find('button').remove();
                        }
                    }
                ],
                layout: {
                    top2Start: {
                        buttons: [{
                            extend: 'copyHtml5',
                            text: '<i class="fa fa-files-o bg-base-200 btn">Copy</i>',
                            titleAttr: 'Copy'
                        }, {
                            extend: 'csvHtml5',
                            text: '<i class="fa fa-file-excel-o btn">CSV</i>',
                            titleAttr: 'CSV'
                        }, {
                            extend: 'excelHtml5',
                            text: '<i class="fa fa-file-excel-o btn">Excel</i>',
                            titleAttr: 'Excel'
                        }, {
                            extend: 'pdfHtml5',
                            text: '<i class="fa fa-file-pdf-o bg-base-200 btn">Pdf</i>',
                            titleAttr: 'PDF'
                        }, {
                            extend: 'print',
                            text: '<i class="fa fa-file-excel-o btn">Print</i>',
                            titleAttr: 'Print'
                        }]
                    }
                },

            });



        });
    </script>
@endpush
