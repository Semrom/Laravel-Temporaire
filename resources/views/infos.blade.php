@extends('template')

@section('titre')
    Formulaire
@endsection

@section('contenu')

    {!! Form::open(['url' => 'users']) !!}

        {!! Form::label('nom', 'Entrez votre nom : ') !!}

        {!! Form::text('nom') !!}

        {!! Form::submit('Envoyer !') !!}

    {!! Form::close() !!}

@endsection