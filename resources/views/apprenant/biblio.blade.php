@extends('apprenant.headerapprenant')
@section('content')
 


<div class="row">
    <div class="col-sm-8">
        @foreach($pieces as $piece)

            <h2> {{$piece->nom_piece}}</h2>      
            <p>{{$piece->description_piece}}</p>

            @foreach($piece->tags as $tag)


                <a href="{{route('pieces_tag',['slug' => $tag->slug])}}" class="">{{ $tag->name }}  </a>

                
                
            @endforeach

            <a href="{{route('pieces_edit',$piece)}}" class="btn default"> editer  </a>
            <a href="{{route('pieces_delete',$piece)}}" class="btn default"> delete  </a>
        

        @endforeach

    </div>
    <div class="col-sm-4">
        <h2>  Nuages de tags    </h2>
        @foreach($tags as $tag)

            <a style="font-size:{{ 1 + round($tag->piece_count/ $max_tags,2) }}rem;" href="{{route('pieces_tag',['slug' => $tag->slug])}}" class=""> {{ $tag->name }}  </a>    
            
        @endforeach
    </div>
</div>

    @include('pieces.new_piece',['piece'=>new \App\Models\Piece()])


   

    {{$pieces->links()}}

    

@endsection 