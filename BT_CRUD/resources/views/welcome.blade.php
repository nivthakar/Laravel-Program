<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel=stylesheet" href="{{asset('css/style.css')}}">
    <h1>Register Data</h1>
    </head>
    
    <body>
        <a href="/add" class="btn btn-primary table-active " class="d-grid gap-3">Add Data</a><br><br>
        <table class="table table-bordered table-success">
             <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>Hobby</th>  
                <th>Address</th> 
                <th>Created At</th>
                <th>Updated At</th>
                <th>Update</th>
               <th>Delete</th>
            </tr>   
             </thead>
      @foreach ($data as $title) 
        <tr>
            <td>{{ $title->id }}</td>
            <td>{{$title->name}}</td>
            <td>{{ $title->email }}</td>
            <td>{{ $title->gender }}</td>
             <td>{{ $title->city }}</td>
            <td>{{ $title->hobby }}</td>
            <td>{{$title->address}}</td>
            <td>{{ $title->created_at }}</td>
            <td>{{ $title->updated_at }}</td>  
            <td><a href="/edit/{{ $title->id }}" class="btn btn-primary">Update</a></td> 
            <td><a href="/delete/{{ $title->id }}" class="btn btn-danger">Delete</a></td> 
           
        </tr>
          
    @endforeach
    @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }} 
    </div>
@endif  
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}        
    </div>
@endif  

@if (session('status'))
    <div class="alert alert-secondary">
        {{ session('status') }}        
    </div>
@endif  

        </table>   
       
        <div>
            <p class="page-item">{{ $data->links('pagination::bootstrap-5') }}</p>
        </div>
    </body>
</html>
