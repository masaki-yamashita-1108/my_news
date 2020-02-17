@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <table border="1" cellspacing="15">
                        <tr>
                            <th width="120">name</th>
                            <th width="120">gender</th>
                            <th width="120">hobby</th>
                            <th width="120">introduction</th>
                        </tr>
                        
                        <tr>
                            <td width="120"><p class="body mx-auto">{{ str_limit($headline->name, 650) }}</p></td>
                            <td width="120"><p class="body mx-auto">{{ str_limit($headline->gender, 650) }}</p></td>
                            <td width="120"><p class="body mx-auto">{{ str_limit($headline->hobby, 650) }}</p></td>
                            <td width="120"><p class="body mx-auto">{!! nl2br(str_limit($headline->introduction, 650)) !!}</p></td>
                        </tr>
                    </table>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
            </div>
        </div>
    </div>
@endsection