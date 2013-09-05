@extends('layouts.stats')

@section('content')

<div class="gridster">
    <ul>
        <li data-row="1" data-col="1" data-sizex="2" data-sizey="1" class="box-diaper-chart">
        	<ol class="legend">
			    <li><i class="icon-sign-blank" style="color: rgb(15,87,205);"></i> Total diapers</li>
			    <li><i class="icon-sign-blank" style="color: rgb(151,187,205);"></i> Wet only diapers</li>
			    <li><i class="icon-sign-blank" style="color: rgb(151,100,205);"></i> Dirty only diapers</li>
			    <li><i class="icon-sign-blank" style="color: rgb(151,187,120);"></i> Both wet & dirty diapers</li>
			</ol>

        	<canvas id="diaperchart" width="500" height="180"></canvas>
	    </li>

	    <li data-row="1" data-col="3" data-sizex="1" data-sizey="1" class="box-diaper-stats">
	    	<h1>Diapers left</h1>
	    	<h2 class="diapers-available">&mdash;</h2>

	    	<h1>Will run out in</h1>
	    	<h2 class="diapers-run-out-days">&mdash;<span>days</span></h2>

	    	<h3 class="diapers-run-out-date">&mdash;</h3>
	    </li>

	    <li data-row="1" data-col="4" data-sizex="1" data-sizey="2" class="box-feed-time">
	    	<h1>Projected time until next feeding</h1>
	    	<h2 class="feed-time-next"></h2>
	    </li>

	    <li data-row="2" data-col="1" data-sizex="1" data-sizey="1" class="box-last-fed">
	    	<i class="last-fed-icon icon-tint"></i>
	    	<h1>Last fed</h1>
	    	<h1 class="last-fed-time"></h1>
	    	<h2 class="last-fed-amount"></h2>
	    	<h1 class="last-fed-type"></h1>
	    </li>

	    <li data-row="2" data-col="2" data-sizex="2" data-sizey="1" class="box5">
	    	Growth chart
	    </li>
    </ul>
</div>

@stop