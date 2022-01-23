@extends('apprenant.headerapprenant')
@section('content')
  <style>
#nuage {
  height: 50vh;
  width: 100vw;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

ul.cloud {
  list-style: none;
  padding-left: 0;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  line-height: 2.75rem;
  width: 450px;
}

ul.cloud a {
  /*   
  Not supported by any browser at the moment :(
  --size: attr(data-weight number); 
  */
  --size: 4;
  --color: #a33;
  color: var(--color);
  font-size: calc(var(--size) * 0.25rem + 0.5rem);
  display: block;
  padding: 0.125rem 0.25rem;
  position: relative;
  text-decoration: none;
  /* 
  For different tones of a single color
  opacity: calc((15 - (9 - var(--size))) / 15); 
  
  */
}

ul.cloud a[data-weight="1"] { --size: 1; }
ul.cloud a[data-weight="2"] { --size: 2; }
ul.cloud a[data-weight="3"] { --size: 3; }
ul.cloud a[data-weight="4"] { --size: 4; }
ul.cloud a[data-weight="5"] { --size: 6; }
ul.cloud a[data-weight="6"] { --size: 8; }
ul.cloud a[data-weight="7"] { --size: 10; }
ul.cloud a[data-weight="8"] { --size: 13; }
ul.cloud a[data-weight="9"] { --size: 16; }

ul[data-show-value] a::after {
  content: " (" attr(data-weight) ")";
  font-size: 1rem;
}

ul.cloud li:nth-child(2n+1) a { --color: #181; }
ul.cloud li:nth-child(3n+1) a { --color: #33a; }
ul.cloud li:nth-child(4n+1) a { --color: #c38; }

ul.cloud a:focus {
  outline: 1px dashed;
}

ul.cloud a::before {
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  width: 0;
  height: 100%;
  background: var(--color);
  transform: translate(-50%, 0);
  opacity: 0.15;
  transition: width 0.25s;
}

ul.cloud a:focus::before,
ul.cloud a:hover::before {
  width: 100%;
}

@media (prefers-reduced-motion) {
  ul.cloud * {
    transition: none !important;
  }
}
  </style>

  
<form>
  <div class="form-group text-center ">
    <label for="Input1"><strong>Mots clés</strong></label>
   <br><input type="text"  id="Input1" size="50">
  </div>

  <label for="Input1"><strong></strong></label>
  </div>

  <div class="text-center">
  <label for="Input1"><strong>Nuage de mots</strong></label>
  </div>

  <div class="text-center" id="nuage">
    <ul class="cloud" role="navigation" aria-label="Webdev word cloud">
      <li><a href="#" data-weight="4">Allure</a></li>
      <li><a href="#" data-weight="1">Pataras</a></li>
      <li><a href="#" data-weight="5">Mats</a></li>
      <li><a href="#" data-weight="8">Navire de guerre</a></li>
      <li><a href="#" data-weight="6">Hélice</a></li>
      <li><a href="#" data-weight="4">Ketch</a></li>
      <li><a href="#" data-weight="5">Electropompe</a></li>
      <li><a href="#" data-weight="6">Calle</a></li>
      <li><a href="#" data-weight="2">Amatue</a></li>
      <li><a href="#" data-weight="9">Frégate</a></li>
    </ul>
  </div> 

  <div class="text-center">
  <label><strong>Formats</strong></label>
  </div>
  <br>

  <div id="checkbox" class="text-center">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">Symboles</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">Mind Map</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option3">
    <label class="form-check-label" for="inlineCheckbox2">Plan 2D</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option4">
    <label class="form-check-label" for="inlineCheckbox2">Plan 3D</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option5">
    <label class="form-check-label" for="inlineCheckbox2">Autres</label>
  </div>
</div>

<br>
  <div class="text-center">  <button type="submit" class="btn btn-primary">Recherche</button></div>
<br>

</form>
@endsection 