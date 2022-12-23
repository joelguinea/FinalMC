@extends('base')

@extends('navbar')

@section('title', 'Delete')

@section('content')
<div class="container m-5">
        <div class="col-sm-5 offset-sm-4">
            <div>
                <livewire:axies.delete :axieId="$id"/>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    #basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: primary;
}
body{
    background-image: url("images/cover.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>