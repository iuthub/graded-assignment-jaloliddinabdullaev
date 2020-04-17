@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<style >
    		.addBtn {
    		   padding: 10px;
              width: 15%;
              background: #d9d9d9;
              color: #555;
    			margin-left: 5px;
    			margin-top: 5px;
    			float:right;          
	              text-align: center;
              font-size: 24px;
              cursor: pointer;
              transition: 0.3s;
              border-radius: 0;
              border: none;
            }
            .task {
                flex-grow: 1;
              position: relative;
              padding: 5px 5px 5px 5px;
              background: #d5f4e6;
              font-size: 18px;
              transition: 0.2s;
              display: flex;
              flex-flow: row nowrap;
              align-items: center;
              justify-content: flex-start;
            	}
            	
            </style>
<div  class="task">
    <h2>{{ $post['title'] }}</h2>
</div>
      	     
<a href="{{ route('userIndex') }}"><button type="submit" class="addBtn">Back</button></a>
            

    

@endsection