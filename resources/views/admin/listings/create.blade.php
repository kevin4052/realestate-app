@extends('layouts.admin') 

@section('page-title', 'create listing')
@section('content')
<div id="maincontent">
    <div class="col-md-8">
        <div class="bgc-white p-20 bd">
            <h1 class="c-grey-900">Create Listing</h1>
            <div class="mT-30">
                <form  method="POST" action="{{ route('admin.listings.store') }}">  
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label> 
                        <input type="text" class="form-control" id="address" name="address" placeholder="ex: 1234 Main St" value="{{old('address')}}">
                        @error('address')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address2">Address 2</label> 
                        <input type="text" class="form-control" id="address2" name="address2" placeholder="ex: apt 123" value="{{old('address2')}}">
                        @error('address2')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="city">City</label> 
                            <input type="text" class="form-control" id="city" name="city" placeholder="ex: Miami" value="{{old('city')}}">
                            @error('city')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="state">State</label> 
                            <select id="state" class="form-control" name="state">
                                <option value="FL" @selected(old('state') == 'FL') >Florida</option>
                                <option value="NY" @selected(old('state') == 'NY') >New York</option>
                            </select>
                            @error('state')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="zipcode">Zipcode</label> 
                            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="ex: 33333" value="{{old('zopcode')}}">
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
                            <input type="number" class="form-control" id="bedrooms" name="bedrooms" placeholder="4" value="{{old('bedrooms')}}">
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
                            <input type="number" class="form-control" id="bathrooms" name="bathrooms" placeholder="2" value="{{old('bathrooms')}}">
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
                            <input type="number" class="form-control" id="squarefootage" name="squarefootage" placeholder="2000" value="{{old('squarefootage')}}">
                            @error('squarefootage')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-color">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
