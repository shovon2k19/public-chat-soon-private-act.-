<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chat box</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

<style>
	.list-group{
		overflow-y: auto;
		height: 200px; 

	}
	::-webkit-scrollbar {

		
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px white; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #505054; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #0e0e0f; 
}
</style>
</head>
<body>

	<div class="container">

		<div class="row" id="app">
			<div class="offset-4 col-4">
				<li class="list-group-item active">Chat Room <span class="badge badge-pill badge-danger">@{{numberOfUsers}}</span></li>
				<div class="badge badge-pill badge-primary">@{{ typing }}</div>
			<ul class="list-group" v-chat-scroll>
  
<message v-for="value,index in chat.message":key=value.index 
:color=chat.color[index]
:user=chat.user[index]
:time=chat.time[index]

>
	@{{ value }}
	
</message>
  
</ul>
<input type="text" class="form-control" placeholder="Type your message here...." v-model='message' @keyup.enter='send'>

		</div>
	</div>
</div>


	<script src="{{asset('js/app.js')}}"></script>

</body>
</html>