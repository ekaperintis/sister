<html>
  <head>
		<style>
		body {
			margin: 0px;
		}
			#header{
				background-color: lightblue;
				width:100%;
				height:50px;
				text-align: center;
			}
			#sidebar-left{
				float:left;
				width:15%;
				background-color: red;
			}
			#main{
				float:left;
				width:85%;
				background-color: lightgray;
			}
			#sidebar-right{
				float:left;
				width:15%;
				margin-left: 0px;
				background-color: red;
			}
			#footer{
				clear:both;
				height: 50px;
				width: 100%;
				text-align: center;
				background-color: lightblue;
			}
			#sidebar-left, #main, #sidebar-right{
				min-height: 600px				
			}
		</style>
	</head>
	<body>
		<div id="header">Header</div>
		<div id="sidebar-left">Left</div>
		<div id="main">Main</div>
		
		<div id="footer">Footer</div>
	</body>
</html>