@extends('settings.index')
@push('settings.styles')
@endpush
@section('settings')
    <div class="w-full h-full  p-0">
        <div class=" h-full justify-start pt-24 gap-24 items-center flex flex-col">
            <p class="text-8xl font-bold text-center mt-20 text-gray-800">Configs</p>
            <div class="w-full">
                <p class="text-4xl font-bold text-center  text-gray-800">Current Schoolyear : {{$config->schoolyear->schoolyear}}</p>
            <p class="text-4xl font-bold text-center  text-gray-800">Current Global Week : {{ $config->global_week->global_week_number}} {{ $config->global_week->start_week_date }} -> {{ $config->global_week->end_week_date }}</p>
            </div>

            <form class="flex flex-col px-32  gap-4 items-stretch border-2 rounded-3xl w-[1000px] h-[500px] justify-center "
                action="{{route('configs.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="wfull flex justify-between items-center">
                    <label for="" class="font-bold text-xl w-96">Change Schoolyear</label>
                    <select name="schoolyear_id" data-target="secondList"   class="select font-bold firstList selectFilter text-center select-bordered w-full">
                        @foreach ($schoolyears as $schoolyear)
                            <option value="{{$schoolyear->id}}" data-ref="{{$schoolyear->id}}">{{ $schoolyear->schoolyear }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full flex justify-between items-center">
                    <label for="" class="font-bold text-xl w-96">Change GlobalWeek</label>
                    <select name="global_week_id" class="select font-bold secondList selectFilter text-center select-bordered w-full">
                        @foreach ($schoolyears as $schoolyear)
                            @foreach ($schoolyear->global_weeks as $global_week)
                            <option value="{{$global_week->id}}" data-belong="{{$global_week->schoolyear_id}}"><span class="font-bold">{{ $global_week->global_week_number}} </span>- {{ $global_week->start_week_date }} -> {{ $global_week->end_week_date }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-10 w-32 self-end">Change</button>
            </form>

        </div>
    </div>
@endsection
@push('settings.scripts')
<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
</script>
@vite('resources/js/selectFilter.min.js')
@endpush
