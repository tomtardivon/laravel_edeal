@extends('apprenant.headerapprenant')
@section('content')



<div class="container-fluid ">

    <div class=" h-100 row bg-secondary col-lg-2" style="float: left !important; ">

        <div class="justify-content-end  text-center" >        
            @foreach($tags as $tag)
                <a style="font-size:{{ 1 + round($tag->piece_count/ $max_tags,2) }}rem;" href="{{route('pieces_tag',['slug' => $tag->slug])}}" class=""> {{ $tag->name }}  </a>      
            @endforeach
            
        </div>
        <div class="justify-content-end  text-center" >
             <a href="{{route('pieces_edit')}}" class="btn default"> nouvelle piece   </a> 
        </div>

    </div >

    <div class="row  col-lg-10 bg-success", style="">    
        
            @foreach($pieces as $piece)
            <div class="col-lg-2">
                <div class="card m-2" style=" ">
                <!-- <img src= "{{ asset('storage/users/' . $piece->image_piece) }}">

                <img src="images/Logos dégradé 2-100.jpg"  width="110" style="d-inline-block align-top" > -->
                <img src= "{{ asset('storage/' . $piece->image_piece) }}">
                   <!--images/piéces/illustration/1642882732.jpg  -->
                    <div class="card-body">

                        <h2><a href="">{{$piece->nom_piece}}</a> </h2>      
                        <p>{{$piece->description_piece}}</p>

                        @foreach($piece->tags as $tag)


                            <a href="{{route('pieces_tag',['slug' => $tag->slug])}}" class="">{{ $tag->name }}  </a>       
                            
                        @endforeach

                       

                        <form method="get" action="{{route('pieces_delete',['id' => $piece->id] )}}" id="delete_form">    
                                 <a href="{{route('pieces_edit',$piece)}}" class="btn default"> editer  </a>            
                                <button type="submit"  form="delete_form" class="btn default" value="Submit">delete</button>            
                        </form>
                    </div>  

                
                </div>         

            

            </div>  
            @endforeach
            <div class="text-center displayed" style>
                 {{$pieces->links("pagination::bootstrap-4")}}
            </div>
            
    </div>
</div>  

@endsection 



