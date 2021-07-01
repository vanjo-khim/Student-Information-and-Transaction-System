<div>
    {{--KEYS TO RATING--}}
    <div style="float: left">
        <br>
        <strong style="text-decoration: underline;">KEY</strong> <br>
        <span>1 - submitted</span> <br>
        <span>0 - not submitted</span> <br>
    </div>

    <table align="left" style="width:40%; border-collapse:collapse; border: 1px solid #000; margin:10px 20px;" border="1">
        <thead>
        <tr>
            <td><strong>Requirements</strong></td>
            <td><strong>Status</strong></td>
        </tr>
        </thead>
        <tbody>
        @foreach ($skills->where('skill_type', 'AF') as $af)
            <tr>
                <td>{{ $af->name }}</td>
                <td>{{ $exr->af ? explode(',', $exr->af)[$loop->index] : '' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table align="left" style="width:35%; border-collapse:collapse;border: 1px solid #000;  margin: 10px 20px;" border="1">
        <thead>
        <tr>
            <td><strong>Medical Requirements</strong></td>
            <td><strong>Status</strong></td>
        </tr>
        </thead>
        <tbody>
        @foreach ($skills->where('skill_type', 'PS') as $ps)
            <tr>
                <td>{{ $ps->name }}</td>
                <td>{{ $exr->ps ? explode(',', $exr->ps)[$loop->index] : '' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
