@extends('backend.master')
@section('content')
<form action="{{route('specialist.form.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="specialized_id">Id</label>
        <input type="text" class="form-control" name="id" placeholder="specialized_id">

    </div>
   
    <div>
        <label for="specialized_name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="specialized_name">


    </div>
    <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

    <div>
        <label for="specialized_department">Description</label>
        <input type="text" class="form-control" name="description" placeholder="specialized_department">

    </div>
    <input type="submit" class="mt-3 btn btn-info" value="submit">


</form>


</div>

@endsection