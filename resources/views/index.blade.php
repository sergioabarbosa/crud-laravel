@extends('templates.template')

@section('content')

<h1 class="text-center">Crud com Laravel</h1>
<hr>
<div class="col-8 m-auto">
    <table class="table table-dark table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">ID_User</th>
      <th scope="col">Rua</th>
      <th scope="col">CEP</th>
      <th scope="col">Bairro</th>
      <th scope="col">Complemento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">País</th>
    </tr>
  </thead>
  <tbody>
    @foreach($address as $address)
      @php
      // $user=address->find->($address->id_user)->relUsers;
      @endphp
    <tr>
      <th scope="row">1</th>
      <td>{{$address->id}}</td>
      <td>{{$address->id_user}}</td>
      <td>{{$address->rua}}</td>
      <td>{{$address->cep}}</td>
      <td>{{$address->bairro}}</td>
      <td>{{$address->complemento}}</td>
      <td>{{$address->cidade}}</td>
      <td>{{$address->estado}}</td>
      <td>{{$address->pais}}</td>
    </tr>
    @endforeach
   </tbody>
</table>


</div>

@endsection