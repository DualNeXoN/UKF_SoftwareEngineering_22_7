@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<div class="table-responsive">
    <table class="table">
  <thead class="table dark">
  <table class="table table-bordered">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">contact_person</th>
      <th><form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Telekom</td>
      <td>ferko@gmail.com</td>
      <td>Nitra</td>
      <td>+4219649274</td>
      <td>
      <button type="button" class="btn btn-success">Add</button>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Landrover</td>
      <td>david@gmail.com</td>
      <td>Nitra</td>
      <td>+421946248</td>
      <td>
      <button type="button" class="btn btn-success">Add</button>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Uniqa</td>
      <td>ondrej@gmail.com</td>
      <td>Nitra</td>
      <td>+421947246</td>
      <td>
      <button type="button" class="btn btn-success">Add</button>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
</table>
</div>
@endsection
