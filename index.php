<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .row{
    overflow: hidden; 
}

[class*="col-"]{
    margin-bottom: -99999px;
    padding-bottom: 99999px;
}
#ques{
	background-color: #fffcea;
}
#top{
background-color: black;
}
#options{
	background-color: yellow;
}
#addQues{
		
}

}
</style>
</head>
<body background="back.png">
<?php
echo "HELLLO";
?>
<div class="container">
<div class ="row" >
	<div class="col-sm-12" id="top"><h1>asdf</h1></div>
</div>
<div class="row">
	<div class="col-sm-3" id="options">
			<div class="col-sm-8">
				<label for="sel1">Category</label>
				<select class="form-control" id="sel1">
				<option>maths</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				</select>
			</div>
			  
			<div class="col-sm-8">
				<label for="sel1">Subject</label>
				<select class="form-control" id="sel1">
				<option>maths</option>
				<option><button>ADD</button></option>
				<option>3</option>
				<option>4</option>
				</select>
			</div>
			
			<div class="col-sm-8">
				<label for="sel1">Chapter Name</label>
				<select class="form-control" id="sel1">
				<option>maths</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				</select>
			</div>
		
	</div>
	<div class="col-sm-9" id="ques">
	<form class="form-horizontal" id="form1">
	<span class="help-block">Type your question and options and select the Correct option before adding.</span>
		<div class="form-group" id="form1">
			<div class="col-sm-6">
			<textarea class="form-control" id="focusedInput" placeholder="Enter Your Question "rows="5" ></textarea>
			</div>    
		</div>
		
		<div class="col-sm-3">
			<label class="radio">
			<input type="radio" name="optradio">  <input class="form-control" id="focusedInput" type="text" placeholder="Option 1">
			</label>
			<label class="radio">
			<input type="radio" name="optradio">  <input class="form-control" id="focusedInput" type="text" placeholder="Option 2">
			</label>
		</div>
		<div class="col-sm-3">
			<label class="radio">
			<input type="radio" name="optradio">  <input class="form-control" id="focusedInput" type="text" placeholder="Option 3">
			</label>
			<label class="radio">
			<input type="radio" name="optradio">  <input class="form-control" id="focusedInput" type="text" placeholder="Option 4">
			</label>
		</div>
		<div class="col-sm-6">
			<button type="button" id="addQues" class="btn btn-primary" >Add Question</button>
		</div>
		
  </form>
		  
	</div>
	<div class="col-sm-1">
	</div>
</div>
</div>
</body>
</html>