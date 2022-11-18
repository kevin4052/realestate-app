@extends('layouts.admin')

@section('page-title', 'edit listing')
@section('content')
<div id="maincontent">
    <form method="POST" action="{{ route('admin.listings.update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="bgc-white p-20 bd">
                    <h1 class="c-grey-900">Edit Listing</h1>
                    <div class="mT-30"> 
                        {{-- <h3>Address</h3> --}}
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="listing_type">Listing Type</label> 
                            <select id="listing_type" class="form-control" name="listing_type">
                                <option value="sale" @selected(old('listing_type', $listing->listing_type) == 'sale') >Sale</option>
                                <option value="rent" @selected(old('listing_type', $listing->listing_type) == 'rent') >Rent</option>
                            </select>
                            @error('listing_type')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="property_type">Property Type</label> 
                            <select id="property_type" class="form-control" name="property_type">
                                <option value="home" @selected(old('property_type', $listing->property_type) == 'home') >Home</option>
                                <option value="appartment" @selected(old('property_type', $listing->property_type) == 'appartment') >Appartment</option>
                                <option value="condo" @selected(old('property_type', $listing->property_type) == 'condo') >Condo</option>
                                <option value="townhouse" @selected(old('property_type', $listing->property_type) == 'townhouse') >Town House</option>
                            </select>
                            @error('property_type')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="price">Price USD</label> 
                            <input type="number" class="form-control" id="price" name="price" min="1" placeholder="ex: 100000" value="{{old('price', $listing->price)}}">
                            @error('price')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="ex: 1234 Main St" value="{{old('address', $listing->address)}}">
                            @error('address')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address2">Address 2</label>
                            <input type="text" class="form-control" id="address2" name="address2" placeholder="ex: apt 123"
                                value="{{old('address2', $listing->address2)}}">
                            @error('address2')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="ex: Miami"
                                    value="{{old('city', $listing->city)}}">
                                @error('city')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="state">State</label>
                                <select id="state" class="form-control" name="state">
                                    <option value="FL" @selected(old('state', $listing->state) == 'FL') >Florida</option>
                                    <option value="NY" @selected(old('state', $listing->state) == 'NY') >New York</option>
                                </select>
                                @error('state')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="zipcode">Zipcode</label>
                                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="ex: 33333"
                                    value="{{old('zipcode', $listing->zipcode)}}">
                                @error('zipcode')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="bedrooms">Bedrooms</label>
                                <input type="number" class="form-control" id="bedrooms" name="bedrooms" placeholder="4"
                                    value="{{old('bedrooms', $listing->bedrooms)}}">
                                @error('bedrooms')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="bathrooms">Bathrooms</label>
                                <input type="number" class="form-control" id="bathrooms" name="bathrooms" placeholder="2"
                                    value="{{old('bathrooms', $listing->bathrooms)}}">
                                @error('bathrooms')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="squarefootage">SQFT</label>
                                <input type="number" class="form-control" id="squarefootage" name="squarefootage"
                                    placeholder="2000" value="{{old('squarefootage', $listing->squarefootage)}}">
                                @error('squarefootage')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <h3>Details</h3>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="description">Description</label>
                                <textarea type="text" class="form-control" id="description" name="description"
                                    placeholder="ex: talk about property" autocomplete="off" >{{old('description', $listing->description)}}</textarea>
                                @error('description')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="col-md-3">
                <div class="bgc-white p-20 bd">
                    <h3 class="c-grey-900">Settings</h3>
                    <div class="mT-30">
                        <div class="form-group">
                            <label class="form-label" for="isPublished">Published</label>
                            <select id="isPublished" class="form-control" name="isPublished">
                                <option value="0" @selected(old('isPublished', $listing->isPublished) == '0') >Draft</option>
                                <option value="1" @selected(old('isPublished', $listing->isPublished) == '1') >published</option>
                            </select>
                            @error('isPublished')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group" style="display: flex; margin-top: 1rem; flex-direction:column">
                            <a href="{{ route('admin.listings.photos.index', ['slug' => $listing->slug, 'id' => $listing->id]) }}"
                                style="width: 100%; margin-top: 1rem;"
                                onclick="return confirm('Did you save your updates?')">
                                <button type="button" class="btn cur-p btn-outline-success" style="width: 100%">Photos</button>
                            </a>
                        </div>
                        <div class="form-group" style="display: flex; margin-top: 1rem; flex-direction:column">
                            <button type="submit" class="btn btn-primary btn-color" style="width: 100%">Save</button>
                            <a href="{{ route('admin.listings.delete', ['slug' => $listing->slug, 'id' => $listing->id]) }}"
                                class="btn btn-danger btn-color" style="width: 100%; margin-top: 1rem;"
                                onclick="return confirm('Are you sure you want to delete this listing')">Delete</a>
                        </div>                      
                    </div>
                </div>
            </div>   
        </div>
    </form>
</div>
@endsection