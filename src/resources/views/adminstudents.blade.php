@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<div class="table-responsive-md">
    <table class="table">
  <thead class="table dark">
  <table class="table table-bordered">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Adress</th>
      <th scope="col">Birth_Date</th>
      <th scope="col">Internship</th>
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
      <td>1.1.2000</td>
      <td>Telekom</td>
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
      <td>2.2.2000</td>
      <td>Uniqa</td>
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
      <td>3.3.2000</td>
      <td>Landrover</td>
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
