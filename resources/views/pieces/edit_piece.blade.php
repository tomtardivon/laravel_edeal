
@extends('apprenant.headerapprenant')
@section('content')
   
    




<div class ="container  ">
    <div class="row-lg-2 p-5 ">
        
        <form action="" method="post" enctype="multipart/form-data">   
            <form action="{{ route('pieces_update', $edit_piece->id) }}" method="POST" enctype="multipart/form-data">
                
                @csrf
        <h2>Editer pièce en base de donnée</h2>        

        {{ csrf_field() }}
            <div class="form-group p-2">
                <input type="text" name="nom_piece" class="form-control" value="{{$edit_piece->nom_piece}}"  placeholder="nom_piece">
            </div>
            <div class="form-group p-2">
                <textarea type="text" name="description_piece" class="form-control"  placeholder="description_piece">
                    {{old('description',$edit_piece->description_piece)}}
                </textarea>
            </div>
            <div class="form-group p-2">
                
                <input data-url="{{route('tags.index')}}" id="tokenfield" type="text" name="tag_piece"  class="form-control" value="{{$tags}}"  placeholder="tags"> 
            </div>

            <div class="form-group p-2">
                <label  class="form-label"  for="image_piece">illustration</label>
                <input type="file" id="image_piece" class="form-control block my-2"     name="image_piece"      accept="image/png, image/jpeg , image/jpg " value="{{$edit_piece->image_piece}}"  placeholder="image_piece">
            </div>

            <div class="form-group p-2">
                <label  class="form-label" for="model3D_piece">modele3D</label>
                <input type="file" id="modele3D" class=" form-control block my-2"     name="modele3D"      accept="image/png, image/jpeg , image/jpg " value="{{$edit_piece->modele3D}}" placeholder="model3D_piece">
            </div>

            <div class="form-group p-2">
                <label class="form-label" for="model2D_piece">modele2D</label>
                <input type="file" id="modele2D" class=" form-control block my-2"     name="modele2D"      accept=""  value="{{$edit_piece->modele2D}}" placeholder="model2D_piece">
            </div>
            <!-- <div class="text-center"> -->
                <button class="btn btn-primary btn-block mb-4 p-2"> enregistrer </button>
            <!-- </div> -->
        
        </form>
    </div>      
</div>

@endsection

