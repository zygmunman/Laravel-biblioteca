<div><b>Título:</b> &nbsp;&nbsp;{{$libro->titulo}}</span></div>
<div><b>ISBN:</b> &nbsp;&nbsp;{{$libro->isbn}}</div>
<div><b>Autor:</b> &nbsp;&nbsp;{{$libro->autor}}</div>
<div><img src="{{Storage::url("imagenes/caratulas/$libro->foto")}}" alt="Carátula del libro"></div>