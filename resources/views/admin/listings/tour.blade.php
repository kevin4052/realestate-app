@extends('layouts.admin')

@section('page-title', 'show all listings')
@section('content')
<div id="maincontent">
    <div class="row">
        <div class="col-md-10">
            <h1>show all listings</h1>
        </div>
        <div class="col-md-2">
            <a href="{{route('admin.listings.create')}}">
                <button type="button" class="btn cur-p btn-secondary" style="width: 100%">Add New Listing</button>
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
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listings as $listing)
                        <tr>
                            <th scope="row">{{$listing->id}}</th>
                            <td>
                                <a
                                    href="{{route('admin.listings.edit', ['slug' => $listing->slug, 'id' => $listing->id])}}">
                                    {{$listing->address}} {{$listing->address2}}<br> {{$listing->city}},
                                    {{$listing->state}} {{$listing->zipcode}}
                                </a>
                            </td>
                            <td>
                                <div class="btn cur-p btn-{{$listing->status == 'draft' ? 'warning' : 'success'}}"
                                    style="width: 100px; text-transform: capitalize">
                                    {{$listing->status}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$listings->links()}}
            </div>
        </div>
    </div>
</div>

@endsection