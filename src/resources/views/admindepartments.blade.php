@extends('layouts.layout')

@section('content')
<div class="table-responsive">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <table class="table">
  <thead class="table dark">
  <table class="table table-bordered">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">Ais ID</th>
      <th><form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ferko mrkvička</td>
      <td>ferko@gmail.com</td>
      <td>Nitra</td>
      <td>36728</td>
      <td>
      <button type="button" class="btn btn-success">Add</button>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>David Ros</td>
      <td>david@gmail.com</td>
      <td>Nové Zámky</td>
      <td>26362</td>
      <td>
      <button type="button" class="btn btn-success">Add</button>
      <button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ondrej Krík</td>
      <td>ondrej@gmail.com</td>
      <td>Nitra</td>
      <td>34624</td>
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
