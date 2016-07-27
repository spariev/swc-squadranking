@extends('web')

@section('title')
    SQUAD WAR RANKING
@endsection

@section('content')
    <div>
        <div class="col-sm-offset-1 col-sm-6">
            <h2>Top 100 squads</h2>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="rank">Rank</th>
                    <th>Name</th>
                    <th>Faction</th>
                    <th class="rank">Skill</th>
                </tr>
                </thead>
                @foreach($squads as $index => $squad)
                    <tr>
                        <td class="rank">{{$index+1}}</td>
                        <td><a href="squadview?squadId={{$squad->id}}">{!! $squad->name !!}</a></td>
                        <td>{{$squad->faction}}</td>
                        <td class="rank">{{round($squad->mu * 1000)}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
