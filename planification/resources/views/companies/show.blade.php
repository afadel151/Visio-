@extends('default')


@section('content')
    <div class="container flex justify-center items-center flex-col   mt-20">
        <div class="card mt-10 mb-20 w-[100%]">
            <div class="card-header text-center text-3xl font-bold">Company {{ $company->company }} ( {{ $company->sector}} ) Battalion {{ $company->battalion->battalion}}</div>
            <div class="card-header text-center text-3xl font-bold">Sections</div>
            <div class="card-body border-2 mt-4">
                <table class="table table-bordered display  table-fixed text-center" id="modules">
                    <thead class="text-center font-bold text-xl">
                        <tr>
                            <th class="text-center">Section</th>
                            <th class="text-center">Nb Students</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($company->sections as $section)
                            <tr>
                                <td>
                                    {{ $section->section }}
                                </td>
                                <td>
                                    {{ $section->nb_students }}
                                </td>
                                <td>
                                    <a href="/sections/{{ $section->id }}" class="btn btn-sm btn-primary">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
