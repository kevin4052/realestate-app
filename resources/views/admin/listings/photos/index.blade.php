@extends('layouts.admin')

@section('page-title', 'show all listing photo')
@section('content')
<div id="maincontent">
    <div class="row">
        <div class="col-md-10">
            <h1>Listing Photos</h1>
        </div>
        <div class="col-md-2">
            <a href="{{route('admin.listings.edit', ['slug' => $slug, 'id' => $id ])}}">
                <button type="button" class="btn cur-p btn-secondary" style="width: 100%">Listing Edit Page</button>
            </a>
            <a href="{{route('admin.listings.photos.create', ['slug' => $slug, 'id' => $id ])}}">
                <button type="button" class="btn cur-p btn-primary" style="width: 100%">Add New Photo</button>
            </a>
        </div>
    </div>
    <div class="row">        
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
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
                                @if ($photo->featured)
                                <div class="btn cur-p btn-success" style="width: 100px; text-transform: capitalize">
                                    featured image
                                </div>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.listings.photos.featured', [
                                    'slug' => $slug, 
                                    'id' => $photo->listing_id,
                                    'photo_id' => $photo->id
                                    ])}}" onclick="return confirm('Are you sure?')">
                                    <button type="button" class="btn cur-p btn-outline-success" style="width: 100%">make featured</button>
                                </a>
                                <a href="{{route('admin.listings.photos.delete', [
                                    'slug' => $slug, 
                                    'id' => $photo->listing_id,
                                    'photo_id' => $photo->id
                                    ])}}" onclick="return confirm('This will permanetly delete the photo')">
                                    <button type="button" class="btn cur-p btn-danger" style="width: 100%">delete</button>    
                                </a>
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