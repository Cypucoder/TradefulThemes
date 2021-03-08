@extends('master')

@section('title', 'Homepage')

@section('content')
    <!--<form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{csrf_field()}}
        <button type="submit"> Submit</button>
    </form>-->
    
    <div class="container" style="margin-top: 30px;">
        <div class="row"> 
            <div class="col-md-6 col-lg-4 col-xl-4">
            <form action="/create" method="post">
                <div class="b_2 rounded px-3">
                    <div class="row py-2 c_W">
                        <div class="col-12 text-center my-1"><input type="text" name="title" placeholder="Title" /></div>
                        <div class="col-12 text-center my-1"><input type="text" name="content" placeholder="Description" /></div>
                    </div>
                    <div class="row no-gutters m-1 p-2 b_3 rounded">
                        <div class="col">
                            <div class="row">
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="1" value="#000000" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="2" value="#000000" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="3" value="#000000" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2"><input type="color" name="4" value="#000000" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                            </div>
                            <div class="row">
                                <div class="col text-center justify-content-center justify-content-md-center my-2"><label class="d-flex justify-content-center align-items-center c_W">Background Color:</label><input type="color" name="5" value="#000000" class="border rounded-pill" style="height: 50px;width: 50px;" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                     {{csrf_field()}}
                        <div class="col-12 text-center my-2"><button class="btn b_4 c_W" type="submit">Add New Theme</button></div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="row">
        @foreach($messages->reverse() as $message)
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="b_2 rounded px-3">
                    <div class="row py-2 c_W">
                        <div class="col text-left"><a href="/message/{{$message->id}}/false"><button class="btn b_4 c_W rounded-circle" type="button"><i class="fa fa-pencil"></i></button></a></div>
                        <!--<div class="col text-right"><button class="btn b_4 c_W" type="button">Preview</button></div>-->
                    </div>
                    <div class="row no-gutters m-1 p-2 rounded" style="background-color: {{$message['color5']}} ">
                        <div class="col">
                            <div class="row">
                                <div class="col d-flex justify-content-center justify-content-md-center my-2">
                                    <div class="color_sphere" style="background-color: {{$message['color1']}} "></div>
                                </div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2">
                                    <div class="color_sphere" style="background-color: {{$message['color2']}} "></div>
                                </div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2">
                                    <div class="color_sphere" style="background-color: {{$message['color3']}} "></div>
                                </div>
                                <div class="col d-flex justify-content-center justify-content-md-center my-2">
                                    <div class="color_sphere" style="background-color: {{$message['color4']}} "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 text-right my-1">
                            <p class="text-left c_W">{{$message->title}} | {{$message->content}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <!--<ul>
        @foreach($messages as $message)
            <li>{{$message->title}}</li>
            <li>{{$message->content}}</li>
            <li>{{$message->updated_at->diffForHumans()}}
            <br>
            <a href="/message/{{$message->id}}">View</a>
        @endforeach
    </ul>-->
    <!--<script type="text/javascript">
        $('#1').colorpicker();
        $('#2').colorpicker();
        $('#3').colorpicker();
        $('#4').colorpicker();
        $('#5').colorpicker();
    </script>-->
@endsection