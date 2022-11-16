@extends('layouts.admin')

@section('page-title', 'show all listing photo')
@section('content')
<div id="maincontent">
    <div class="row">
        <h1>Show All Listing Photos</h1>
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($photos as $photo)
                        <tr>
                            <th scope="row">{{$photo->id}}</th>
                            <td>
                                <img src="/img/{{$photo->name}}" alt="image for {{$photo->name}}" style="width: 300px">
                            </td>
                            <td>
                                {{$photo->name}}
                            </td>
                            <td>
                                <div class="btn cur-p btn-{{$photo->status == 'draft' ? 'warning' : 'success'}}"
                                    style="width: 100px; text-transform: capitalize">
                                    {{$photo->status}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$photos->links()}}
            </div>
        </div>
    </div>
</div>

@endsection