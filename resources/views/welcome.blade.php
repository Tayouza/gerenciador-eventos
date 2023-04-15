@extends('layouts.main')

@section('title', 'Tayouza Events')
@section('content')
<div id="search-container" class="col-md-12">
    <h2>Busque um evento</h2>
    <form action="{{route('event-search')}}" method="POST">
        @csrf
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar..." autocomplete="off">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h3>Próximos Eventos</h3>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @if($events->count() !== 0)
        @foreach($events as $event)
        <div class="card col-md-3">
            @if(!empty($event->image))
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
            @else
                <img src="/img/placeholder-image.png" alt="{{ $event->title }}">
            @endif
            <div class="card-body">
                <div class="card-date">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</div>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">{{ rand(25, 250) }} participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @else
        Não há nenhum evento
        @endif
    </div>
</div>

@endsection