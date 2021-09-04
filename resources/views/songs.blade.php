@extends('layouts.app')

@section('content')
        <section id="songs" class="full-wrapper parallax-wrapper songs"> <!-- Tour Dates -->
        	<div class="parallax" data-velocity="-.3" data-fit="0">
            	<div class="front-content dates">
                    <h1>Songs</h1>
                    <div class="spacer"></div>
                    <div class="dates-wrapper">
                    	<ul>
                            <li>               	
                                @foreach ($data as $item)
                                    <div class="song"><strong>{{$item->artist}}</strong> - {{ $item->name }}</div>
                
                                    @if(($loop->iteration % 15) == 0)
                                        </li><li>
                                    @endif
                                @endforeach                                    
                        </ul>
                    </div>
                    <div class="controller">
                    	<ul class="songdots">
                        </ul>
                    </div>
                    <div class="dates-nav">
                        <div class="next"></div>
                        <div class="prev"></div>
                    </div>
                </div>
                <div class="square-bg"></div>
                <div class="overlay"></div>
            </div>
        </section><!-- end Tour Dates -->
        <div class="clear"></div>
@endsection