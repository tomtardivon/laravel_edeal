


<h2>Ajout d'une nouvelle piéce en base de donnée</h2>
<form action="{{ route('pieces_store') }}" method="post">
    

{{ csrf_field() }}
    <div class="form-group">
        <input type="text" name="nom_piece" class="form-control" value="{{old('nom', $piece->nom_piece)}}"  placeholder="nom_piece">
    </div>
    <div class="form-group">
        <textarea type="text" name="description_piece" class="form-control"  placeholder="description_piece">
             {{old('description',$piece->description_piece)}}
        </textarea>
    </div>
    <div class="form-group">
        <input data-url="{{route('tags.index')}}" id="tokenfield" type="text" name="tag_piece"  class="form-control" value="{{old('tags')}}"  placeholder="tags"> 
    </div>
    <button class="btn btn-primary"> enregistrer </button>
</form>
