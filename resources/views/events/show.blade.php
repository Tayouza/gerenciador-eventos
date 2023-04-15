@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1 pt-2">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h2>{{ $event->title }}</h2>
            <p class="event-city">
                <ion-icon name="location" class="me-2"></ion-icon>
                {{ $event->city }}
            </p>
            <p class="events-participants">
                <ion-icon name="people" class="me-2"></ion-icon>
                {{ rand(25, 250) }} participantes
            </p>
            <p class="event-owner">
                <ion-icon name="star" class="me-2"></ion-icon>
                Dono evento
            </p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
        </div>
        <div id="description-container" class="col-md-12 mt-2">
            <h3>Sobre o Evento</h3>
            <p class="event-description">{{ $event->description }}</p>
        </div>
    </div>
</div>

@endsection