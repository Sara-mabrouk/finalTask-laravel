<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-List</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
</head>

<body style="background-color:rgb(0, 0, 0);">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2>ToDo List</h2>
            <form action="{{route ('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="" name="title"
                    placeholder="Enter Name" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Content</label>
                <textarea class="form-control" name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">Start date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="start_date">

            </div>

            <div class="form-group">
                <label for="exampleInputPassword">End date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="end_date">

            </div>


            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>


            <button type="submit" class="btn btn-primary">Add Your To-Do</button>
        </form>
    </div>
        </div>
    </div>
    </div>

</body>

</html>
