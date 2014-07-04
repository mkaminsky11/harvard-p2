<!DOCTYPE html>
	<head>
		<script src="lib/jquery.js"></script>
		<script src="lib/knob/knob.js"></script>
		
		<meta charset="utf-8">
		<title>XKCD Password Generator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<link href="flat/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="flat/css/flat-ui.css" rel="stylesheet">
	
	    <link rel="shortcut icon" href="favicon.ico"> 
	
	    	<!--[if lt IE 9]>
		<script src="flat/js/html5shiv.js"></script>
		<script src="flat/js/respond.min.js"></script>
		<![endif]-->
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="style.css">
		<?php
		require('init.php');
		?>
	</head>
	<body>
		<div class="header">
			<h1>XKCD Password Generator</h1>
			<h4>By Michael Kaminsky</h4>
		</div>
		<div class="main">
		<form method="POST" action="index.php">
			<h1>WELCOME</h1>
			<hr/>
			<p>Ok, here's how it works. You choose a number of words (0 to 20), whether or not to include numbers, and a bunch of other useless options. At the end, there's a button. You can't miss it. When pressed, it will generate your very own super-horse-staple-battery-correct password. There's also an explanation of the inspiration for this little gem. Go on, unless you're a disease-shake-rival-shake...</p>
			<div class="first">
				<h2>How Many Words Do You Want?</h2>
				<br/>
				<div class="knob">
					<input type="text" class="dial" name="dial" data-min="1" data-max="20" value="1" data-width="500" data-height="500">
				</div>
				<br/>
				<div class="well"><h4 id="dialog-1">Booooring!</h4></div>
			</div>
			
			<br/>
			<h2>Add Toppings</h2>
			<p>Mmmm.... camel case. Or, should I say, CamelCase?</p>
			<div class="row">
				<h4>Numbers</h4>
				<div class="switch switch-square" data-on-label="<i class='fui-check'></i>" data-off-label="<i class='fui-cross'></i>">
			        <input type="checkbox" checked id="number" name="number"/>
			    </div>
			</div>
		    
		    <div class="row">
				<h4>Capitalize First Letter</h4>
				<div class="switch switch-square" data-on-label="<i class='fui-check'></i>" data-off-label="<i class='fui-cross'></i>">
			        <input type="checkbox" checked id="capital" name="capital"/>
			    </div>
			</div>
		    
		    <div class="row">
				<h4>Add Punctuation</h4>
				<div class="switch switch-square" data-on-label="<i class='fui-check'></i>" data-off-label="<i class='fui-cross'></i>">
			        <input type="checkbox" id="punc" name="punc"/>
			    </div>
			</div>
			
		    <div class="row">
				<h4><a href="http://en.wikipedia.org/wiki/CamelCase">Camel Case</a></h4>
				<div class="switch switch-square" data-on-label="<i class='fui-check'></i>" data-off-label="<i class='fui-cross'></i>">
			        <input type="checkbox" id="camel" name="camel"/>
			    </div>
			</div>
		    
		    
			<h2>I Lied</h2>
			<p>There are two buttons. The first is to the Github page for this project. The second is to generate the password.</p>
			
			<a href="https://github.com/mkaminsky11/harvard-p2" class="btn btn-lg btn-inverse"><i class="fa fa-github">Github</i></a>
			<input type="submit" class="btn btn-success btn-lg" value="Generate!">
			<br/><br/>
			<div class="well">
				<small>Note: it takes a few seconds. Fetching words from the internet isn't easy!</small>
			</div>
			<br/><br/>
			<p>Drumroll please....</p>
			<input type="text" id="final" class="form-control" value="<?php echo($output);?>">
			<br/>
			<h2>What the Frig?</h2>
			<p>Yeah, the passwords are strange. They are inspired by an <a href="http://xkcd.com">XKCD</a> comic.</p>
			<img src="img/xkcd.png" width="100%">
			<br/>
			<p>So go forth, disciples of the correct-horse-staple-battery, and spread the word. Or, at least make another funny password. Your choice.</p>
			
		</form>
		</div>

		<script src="main.js"></script>
		
		<script src="flat/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="flat/js/jquery.ui.touch-punch.min.js"></script>
		<script src="flat/js/bootstrap.min.js"></script>
		<script src="flat/js/bootstrap-select.js"></script>
		<script src="flat/js/bootstrap-switch.js"></script>
		<script src="flat/js/flatui-checkbox.js"></script>
		<script src="flat/js/flatui-radio.js"></script>
		<script src="flat/js/jquery.tagsinput.js"></script>
		<script src="flat/js/jquery.placeholder.js"></script>
	</body>
</html>