@extends('layouts.layoutCondiviso')
<link rel='stylesheet' type='text/css' href="{{ asset('.\css\allPostStyle\allPostStyle.css') }}" />


@section('contenuti')

<h1 style="margin: 44px 0; color:white; font-style:italic; font-family:cursive" >
    show blog
</h1>


    @if(count($recordsPassatiAllaView) > 0)

    @foreach ( $recordsPassatiAllaView as $key => $record )

    
    <div class="row">
        <div class="col-md-4 col-sm-4 imgBox">
            <img class='imgFile'  src="/storage/cover_images/{{ $record->cover_image }}" alt="">
        </div>

        <div class="col-md-8 col-sm-8 mb-5">

            <div class="mb-5 pb-3">

                <h2 class="text-primary">
                     <a href="/posts/{{$record->id}}"> {{ $record->titolo }} </a>
                </h2>
                <div id='msgBodyStyle'>
                    {!! $record->body !!} 
                </div>
            
                
                <small class="text-grey" style="position: relative; top: -11px;">
                    <small>
                        {{ $record->created_at }} scritto da <span class="text-white">   {{ $record->name }}  </span>
                    </small>
                </small>
    
            </div>
    

        </div>

    </div>

        
    @endforeach

    @endif



@endsection

