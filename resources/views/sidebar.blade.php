<?php $games = \App\Games::all(); ?>
<ul id="sidebar-menu">

        @foreach($games as $game)
        <li>
            <a href="{{url('/games/dash')}}?game-id={{$game->id}}" title="{{$game->description}}" >
                <i class="glyph-icon icon-usd"></i>
                <span>{{$game->name}}</span>
            </a>

        </li>
        <li class="divider"></li>
        @endforeach

</ul><!-- #sidebar-menu -->
