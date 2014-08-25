<?php require_once('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Client Contract Management</title>
	<script src="jquery.js"></script>
	<link rel="shortcut icon" href="<?php echo ROOT; ?>images/sdsu-favicon.png">
	<link rel="stylesheet" href="<?php echo ROOT; ?>css/sdsu.css">
	<link rel="stylesheet" href="<?php echo ROOT; ?>css/style.css">
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0;">
	<tr>
		<td width="15%" class="header-red-background header"></td>
        <td width="85%" class="header-gold-background header"><p><a href="//www.sdsu.edu/"><img src="<?php echo ROOT; ?>/images/SDSU-header.gif" alt="SDSU Home Page" width="334" height="84" border="0"></a></p></td>
	</tr>
	<tr>
		<td bgcolor="#A81933" class="black-divider header"></td>
		<td bgcolor="#D2C694" class="red-underline header"><p class="breadcrumbdark"><a href="//uco.sdsu.edu/">University of Computer Operations</a> &gt; <a href="<?php echo ROOT; ?>">Client Contract Manager</a> &gt </p></td>
	</tr>
	<tr>
		<td id="sidebar" rowspan="2" valign="top" bgcolor="#A81933" class="black-divider header">
			<p class="menuwhite"><a href="<?php echo ROOT; ?>">Overview</a></p>
			<br>
			<p class="menuwhite"><a href="<?php echo ROOT; ?>contract">Create a Contract</a></p>
			<p class="menuwhite"><a href="<?php echo ROOT; ?>contact">Create a Contact</a></p>
			<br>
			<p class="menuwhite"><a href="<?php echo ROOT; ?>">Add an Administrator</a></p>
			<br>
			<p class="menuwhite"><a href="<?php echo ROOT; ?>logout">Logout</a></p>
		</td>
		<td id="content" valign="top">