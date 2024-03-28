import './bootstrap';
import $ from 'jquery';
import DataTable from 'datatables.net';

// Ensure jQuery is available globally for DataTables
(window as any).jQuery = $;

let table = new DataTable('#teachers', {
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
    //   {data: 'teacher_grade', name: 'teacher_grade', orderable: true, searchable: true},
    {
        data: 'department.department',
        name: 'department_id',
        searchable: false,
        orderable: true
    },
    {
        data: 'action',
        name: 'action'
    },
    ]
});