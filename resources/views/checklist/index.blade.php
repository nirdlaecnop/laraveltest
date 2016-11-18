@extends('master')

 @section('content')
 <div class="row">
	<div class="col-md-12">
		<h1 class="text-info">Welcome to Checklist</h1>		
	</div>
	<div class="col-md-12">
	
		@foreach ($checklists as $checklist)
		<div class="col-md-12 "><h3 class="text-center"><strong ><span id="{{ $checklist->id }}" class="edit_checklist"> {{ $checklist->checklist_title }}</span></strong></h3></div>
			<div class="col-md-5 btn-info text-center border-gray">Ingredients</div>
			<div class="col-md-1 btn-info text-center border-gray">Monday</div>
			<div class="col-md-1 btn-info text-center border-gray">Tuesday</div>
			<div class="col-md-1 btn-info text-center border-gray">Wednesday</div>
			<div class="col-md-1 btn-info text-center border-gray">Thursday</div>
			<div class="col-md-1 btn-info text-center border-gray">Friday</div>
			<div class="col-md-1 btn-info text-center border-gray">Saturday</div>
			<div class="col-md-1 btn-info text-center border-gray ">Sunday</div>
			
			
			@foreach($checklist->ingredients as $ingred)
			<div id="{{ $ingred->id }}" class="edit_ingredient col-md-5 border-left border-gray">{{ $ingred->ingredient }}</div>
			
				@foreach(explode(",",$ingred->weekday) as $day)
				
				<div class="col-md-1 text-center border-gray">
				
				@if($day==1)
				{{ Form::checkbox('weekday',$day, true) }} 
				@else
				{{ Form::checkbox('weekday',$day, false) }} 
				@endif
				</div>
				
				@endforeach
			@endforeach
		
		<div class="col-md-12">&nbsp;</div>
		<div class="row">
			<div class="col-md-12 ">
				<a class="btn btn-success add_ingredient" href="#">Add Ingredient</a>
			</div>
		</div>
		@endforeach
	
	</div>
	<div class="row">
	<div class="new-checklist">
		<div class="col-md-2 text-right">
		<strong>New Check List</strong>
		</div>
		<div class="form-group col-md-10">
			<span class="col-md-8">
			<input type="text" class="form-control check-title" name="checklist_title" placeholder="Enter new checklist"  />
			</span>
			<span class="col-md-4">
			<input type="submit" class="btn-submit btn btn-success" value="Create" />
			    <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
			</span>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a class="btn add_check" href="{{route('blog.create')}}">Add Checklist</a>
		</div>
	</div>
 </div>
 
 @stop