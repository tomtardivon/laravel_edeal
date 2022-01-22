
@extends('apprenant.headerapprenant')
@section('content')
    @include('pieces.new_piece',['piece'=>new \App\Models\Piece()])
@endsection

