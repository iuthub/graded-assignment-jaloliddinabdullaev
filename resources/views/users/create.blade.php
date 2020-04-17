@extends('layouts.users_layout')

@include('partials.error_block')


@section('content')

			<form id="postForm" action="{{ route('userCreatePost') }}" method="post" >
          	@csrf
            <div id="myDIV" class="header">
              <h2>My To Do List</h2>
              <input type="text" class="titlee" form="postForm" name="title" placeholder="Title..." >
              <button type="submit" class="addBtn">Add</button>
            </div>
        </form>
			
		
		<div class="article-footer">
			<div class="article-meta">
				
			</div>
			<div class="article-actions">
			</div>
		</div>
	</div>
