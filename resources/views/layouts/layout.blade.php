<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>賣場管理系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<style>
    table.grid td {
        border: 0px solid white;
        border-collapse: collapse;
        background-color: rgb(227,232,255);
        padding: 10px 8px;
    }
    table.grid td:first-child {
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    table.grid td:last-child {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
	table.login td{
		padding:10px 10px;
	}
	html,body{
		background-color:rgb(220, 220, 220);
		font-family:微軟正黑體;
		height:100%;
		width:100%;
	}
	.title{
		text-align:center;
	}
	.table-container{
		margin-top:20px;
		margin-bottom:20px;
	}
	.table-container td{
		border:1px solid black;
	}
	.table-container th{
		border:1px solid black;
	}
</style>
<script type="text/javascript">
	function logout(){
		var form=document.getElementById('logout-form');
		form.submit();
	}
</script>
<body>

<div class="container">
    @yield('contents')
</div>

</body>
</html>
