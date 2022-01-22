




<div class ="container  ">
    <div class="row-lg-2 p-5 ">
        
        <form action="{{ route('pieces_store') }}" method="post" enctype="multipart/form-data">   
        <h2>Ajout d'une nouvelle piéce en base de donnée</h2>        

        {{ csrf_field() }}
            <div class="form-group p-2">
                <input type="text" name="nom_piece" class="form-control" value="{{old('nom', $piece->nom_piece)}}"  placeholder="nom_piece">
            </div>
            <div class="form-group p-2">
                <textarea type="text" name="description_piece" class="form-control"  placeholder="description_piece">
                    {{old('description',$piece->description_piece)}}
                </textarea>
            </div>
            <div class="form-group p-2">
                
                <input data-url="{{route('tags.index')}}" id="tokenfield" type="text" name="tag_piece"  class="form-control" value="{{old('tags')}}"  placeholder="tags"> 
            </div>

            <div class="form-group p-2">
                <label  class="form-label"  for="image_piece">illustration</label>
                <input type="file" id="image_piece" class="form-control block my-2"     name="image_piece"      accept="image/png, image/jpeg , image/jpg " value="{{old('image_piece')}}"  placeholder="image_piece">
            </div>

            <div class="form-group p-2">
                <label  class="form-label" for="model3D_piece">modele3D</label>
                <input type="file" id="model3D_piece" class=" form-control block my-2"     name="model3D_piece"      accept="image/png, image/jpeg , image/jpg " value="{{old('modele3D')}}" placeholder="model3D_piece">
            </div>

            <div class="form-group p-2">
                <label class="form-label" for="model2D_piece">modele2D</label>
                <input type="file" id="model2D_piece" class=" form-control block my-2"     name="model2D_piece"      accept=""  value="{{old('modele2D')}}" placeholder="model2D_piece">
            </div>
            <!-- <div class="text-center"> -->
                <button class="btn btn-primary btn-block mb-4 p-2"> enregistrer </button>
            <!-- </div> -->
           

        </form>
    </div>      
</div>