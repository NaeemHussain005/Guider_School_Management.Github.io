
<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>

	<style>
	table {
  width: 100%;
}
td{
	height: 50px;
	text-align: center;
}
th {
  height: 50px;
  text-align: center;
}


</style>
</head>
<body>
<p>Cv File</p>
        <iframe height="1700" width="1700" src="{{ asset('assets/' . $data->cv_file) }}"></iframe>
        <iframe height="1700" width="1700" src="{{ asset('assets/' . $data->result_file) }}"></iframe>
</body>
</html>
