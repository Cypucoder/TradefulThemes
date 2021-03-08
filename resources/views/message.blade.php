@extends('master')

@section('title', $message->title)

@section('content')
    <!--<h3>{{$message->title}}</h3>
    <h3>{{$message->content}}</h3>
    <br>
    <h3>Update info:</h3>-->
    <!--<form action="/update/{{$message->id}}" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{csrf_field()}}
        <button type="submit"> Submit</button> 
    </form>-->

    <form action="/update/{{$message->id}}/true" method="post">
        <div class="container">
            <div class="row my-3 justify-content-center text-center">
                <div class="col">
                    <h3>Update info:</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="b_2 rounded px-3 col-md-6">
                    <div class="row py-2 c_W">
                        <div class="col-12 text-center my-1"><input type="text" name="title" placeholder="Title" value="{{$message->title}}" /></div>
                        <div class="col-12 text-center my-1"><input type="text" name="content" placeholder="Description" value="{{$message->content}}" /></div>
                    </div>
                    <div class="row no-gutters m-1 p-2 b_3 rounded">
                        <div class="col">
                            <div class="row">
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="1" value="{{$message->color1}}" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="2" value="{{$message->color2}}" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="3" value="{{$message->color3}}" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="4" value="{{$message->color4}}" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                            </div>
                            <div class="row">
                                <div class="col text-center justify-content-center justify-content-md-center my-2"><label class="d-flex justify-content-center align-items-center c_W">Background Color:</label><input type="color" name="5" value="{{$message->color5}}" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        {{csrf_field()}}
                        <div class="col-6 text-center my-2"><a href="/"><button class="btn b_4 c_W" type="button">Go back</button></a></div>
                        <div class="col-6 text-center my-2"><button class="btn b_4 c_W" type="submit">Update</button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
@endsection