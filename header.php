<?php $p = $_GET['p'] ? $_GET['p'] : 'front'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Client Contract Management</title>
	<script src="jquery.js"></script>
	<link rel="shortcut icon" href="images/sdsu-favicon.png">
	<link rel="stylesheet" href="css/style-sdsu.css">
	<?php if (file_exists('css/' . $p . '.css')) echo "<link rel=\"stylesheet\" href=\"css/$p.css\">"; ?>
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="15%" class="header-red-background"></td>
        <td width="85%" class="header-gold-background"><p><a href="http://www.sdsu.edu/"><img src="images/SDSU-header.gif" alt="SDSU Home Page" width="334" height="84" border="0"></a></p></td>
	</tr>
	<tr>
		<td bgcolor="#A81933" class="black-divider"></td>
		<td bgcolor="#D2C694" class="red-underline"><p class="breadcrumbdark"><a href="http://bfa.sdsu.edu/">Business and Financial Affairs</a> &gt; Business Operations &gt; <a href="http://ets.sdsu.edu/">Enterprise Technology Services</a> &gt; <a href="http://uco.sdsu.edu/">University Computer Operations</a> &gt;</p></td>
	</tr>
	<tr>
		<td rowspan="2" valign="top" bgcolor="#A81933" class="black-divider"></td>
		<td valign="top" bgcolor="white">