@extends('default')
@push('header')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container flex justify-center items-center flex-col   mt-20">
        <div>
            <p class="text-7xl font-weight-bold  " style="font-weight: 700">Section {{$section->section}} progress </p>
        </div>
        <div class="card mt-10 mb-20 w-[100%]">
            <div class="card-header text-center text-3xl font-bold">Modules progress</div>
            <div class="card-body">
                {{-- {!! $dataTable->table() !!} --}}
                <table class="table table-bordered display  table-fixed text-center" id="modules">
                    <thead class="text-center ">
                        <tr>
                            <th class="text-center">Module</th>
                            <th class="text-center">Vol-Hor</th>
                            <th class="text-center">Cours</th>
                            <th class="text-center w-32">Td </th>
                            <th class="text-center">Tp</th>
                            <th class="text-center">Cours Dones</th>
                            <th class="text-center">Tds Dones</th>
                            <th class="text-center">Tps Dones</th>
                        </tr>
                    </thead>

                </table>
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
                var SectionId = {{ $section->id }};
                var url2 = "{{ route('sections.get_modules_progress', ':SectionId') }}";
                url2 = url2.replace(':SectionId', SectionId);
                var table = $('#modules').DataTable({
                    pageLength: 50,
                    processing: true,
                    serverSide: true,
                    ajax: url2,
                    columns: [{
                            data: 'module.module',
                            name: 'module.module'
                        },
                        {
                            data: null,
                            name: 'vol_hor',
                            render: function(data, type, row) {
                                return (data["nb_cours"] + data["nb_tds"] + data["nb_tps"])
                            }
                        },
                        {
                            data: 'nb_cours',
                            name: 'nb_cours'
                        },
                        {
                            data: 'nb_tds',
                            name: 'nb_tds',
                            searchable: false,
                            orderable: true
                        },
                        {
                            data: 'nb_tps',
                            name: 'nb_tps',
                            orderable: true,
                        },
                        {
                            data: 'cours_dones',
                            name: 'cours_dones'
                        },
                        {
                            data: 'tds_dones',
                            name: 'tds_dones'
                        },
                        {
                            data: 'tps_dones',
                            name: 'tps_dones'
                        }

                    ],
                  
                });
            });
        </script>
    @endpush
