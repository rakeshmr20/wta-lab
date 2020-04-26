<!DOCTYPE html>
<?php
include_once 'ck.php';
function read_prog($pnum)
{
	$filename = "files/prg".$pnum.".txt";
	$file = fopen($filename,'r');
	$size = filesize($filename);
	$filedata = fread($file, $size);
	fclose($file);
	return $filedata;
}
function read_file($filename_)
{
	$filename = "files/".$filename_;
	$file = fopen($filename,'r');
	$size = filesize($filename);
	$filedata = fread($file, $size);
	fclose($file);
	return $filedata;
}
if (isset($_GET['w'])) {
	$pfile = $_GET['w'];
	$file = "ck/".$pfile.".txt";
	ckGhost('w'.$pfile);
	$loc = 'Location: proc.php?ckname='.$file;
	header($loc);
}
if (isset($_GET['m'])) {
	$pfile = $_GET['m'];
	$file = "ck/ml".$pfile.".txt";
	ckGhost('m'.$pfile);
	down($file);
}
$usr_det = get_user_details();
$log = date("d/m/y h:i:s A ")." Uagent: ".$usr_det['usr_agent']." Uip: ".$usr_det['usr_ip']."\r\n";
write_log($log,"cklog.txt");
?>
<html>
<head>
	<title>WTA Lab Programs Batch-2020</title>
	<meta charset="utf-8">
	<meta name="description" content="15CSL77 - Minimized Programs by CKashi">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="Rakesh M R">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.dark-mode {
			background-color: black;
			color: white;
		}
		.dark-mode button {
			background-color: black;
			color: lime;
		}
		.darkcode {
			color: #00FFFF;
		}
		.dark-mode footer {
			color: lime;
		}
		button {
			color: #0000FF;
		}
		div .row {
			margin: 5px;
		}
		.td {
			background:#000000;
			border:none;
			border-radius: 5pt;
			color: #00FFFF;
			font-family: courier;/**Comic sans MS;**/
			font-size: 9pt;
		}
	</style>
</head>
<body onload="changeMode();">
	<div class="container" id="precode">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top" id="navbar_modded">
			<a class="navbar-brand h1" href="index.php"><kbd>(|< CKashi</kbd></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link disabled" href="#"><small>-</small></a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-outline-warning" href="wt.php" style="color: #000000">WTA Lite</a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link btn btn-success" href="ml.php">ML Lab</a>
					</li>-->
				</ul>
				<button class="btn btn-secondary my-2 my-sm-0" onclick="changeMode();">Dark Mode</button>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-8">
				<div align="center">
					<h4>WEB TECHNOLOGY LABORATORY WITH MINI PROJECT 15CSL77</h4>
					<p>SEMESTER – VII</p>
					<p>Syllabus copy -> <a href="files/wtlsyll.pdf" target="_blank"> Open</a>&nbsp; or &nbsp;<a href="files/wtlsyll.pdf" download="syll5csl77.pdf">Download </a></p>
					<p>WTA Manual PDF -> <a href="files/15csl77.pdf" target="_blank"> Open</a>&nbsp; or &nbsp;<a href="files/15csl77.pdf" download="WTL_CK_15csl77.pdf">Download </a></p>
					<button onclick="showCode(901);">Instructions</button>
					<button onclick="showCode(902);" style="color: red;">If Web_Folder is missing</button>
					<a href="#checkDown">Go to last</a>
				</div>
				<div id="code901" style="display: none;">
					<h4>Ubuntu</h4>
					<ul>
						<span>For HTML & JavaScript Programs:</span>
						<li>Programs: 1,2,3,4 (save as .html)</li>
						<li>Create a folder, Open Terminal from there</li>
						<li>Create file: <code>gedit p1.html</code></li>
						<li>Write your code... Save <kbd>Ctrl+S</kbd></li>
						<li>Run: Double click on the file p1.html</li><br>
						<span>For XML Programs:</span>
						<li>Programs: 5</li>
						<li>Create a folder, Open Terminal from there</li>
						<li>Create XML file: <code>gedit p5.xml</code></li>
						<li>Write your code... Save <kbd>Ctrl+S</kbd></li>
						<li>Create CSS file: <code>gedit p5.css</code> Save the code</li>
						<li>Run: select p5.xml by Right click and open with Firefox/Any browser</li><br>
						<span>For PHP Programs:</span>
						<li>Programs: 6,7,8,9,10 (save as .php)</li>
						<li>Goto Web_Folder folder in ubuntu files, Open Terminal from there</li>
						<li>Create file: <code>gedit p6.php</code></li>
						<li>Write your code... Save <kbd>Ctrl+S</kbd></li>
						<li>Run: Firefox/Any browser <code>localhost/p6.php</code></li><br>
						<li>For 9th program python script should be written along with php code. save the server.py <code>gedit server.py</code></li>
						<span>For program 10 instructions are given below the question.</span>
					</ul>
				</div>
				<div id="code902" style="display: none;">
					<h5>Ubuntu</h5>
					<ul>
						<span>If Web_Folder is missing-</span>
						<li>Create a folder anywhere</li>
						<li>Open terminal in the current folder</li>
						<li>Run PHP server: <code>php -S 127.0.0.1:8080</code></li>
						<li>In above command 'S' is UpperCase character</li>
						<li>In browser: open 127.0.0.1:8080</li>
						<li>Your php files from that folder will appear there</li>
						<li>Port: 8080</li><br>
						<span>Enjoy...</span>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<button onclick="changeMode();" class="td">Try DarkMode <code>[Beta]*</code></button>
				<p style="color: #888888; font-size: 8pt;">* In Dark Mode some results may be not visible.</p>
				<br>
				<p style="color: #888888; font-size: 9pt;"><script type="text/javascript">document.write(Date());</script><br><?php echo("IP: ".$usr_det['usr_ip']); ?></p>
				<p>Text File -> <a href="files/15csl77.txt" target="_blank"> Open</a>&nbsp; or &nbsp;<a href="files/15csl77.txt" download="WTL_CK_15csl77.txt">Download </a></p>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 1: Write a JavaScript to design a simple calculator to perform the following operations: sum, product, difference and quotient.</p>
				<button onclick="showCode(1);">Show/Hide Code</button>
				<button onclick="showCode(11)">Run here</button>
				<div id="code1" style="display: none;"><pre><br><code><h4>p1.html</h4><br><?php echo htmlspecialchars(read_prog(1)); ?></code></pre></div>
				<div id="code11" style="display: none;"><center><?php echo(read_prog(1)); ?><p><a href="p1.html" target="_blank">Open in full screen</a></p></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg1.txt" download="prg1.html">Download Code</a><br><br>
				<a href="p1.html" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 2: Write a JavaScript that calculates the squares and cubes of the numbers from 0 to 10    and outputs HTML text that displays the resulting values in an HTML table format.</p>
				<button onclick="showCode(2);">Show/Hide Code</button>
				<button onclick="showCode(12)">Run here</button>
				<div id="code2" style="display: none;"><pre><br><code><h4>p2.html</h4><br><?php echo htmlspecialchars(read_prog(2)); ?></code></pre></div>
				<div id="code12" style="display: none;"><center><?php echo(read_prog(2)); ?><p><a href="p2.html" target="_blank">Open in full screen</a></p></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg2.txt" download="prg2.html">Download Code</a><br><br>
				<a href="p2.html" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 3: Write a JavaScript code that displays text “TEXT-GROWING” with increasing font size in the interval of 100ms in RED COLOR, when the font size reaches 50pt it displays “TEXT-SHRINKING” in BLUE color. Then the font size decreases to 5pt.</p>
				<button onclick="showCode(3);">Show/Hide Code</button>
				<button onclick="showCode(13)">Run here</button>
				<div id="code3" style="display: none;"><pre><br><code><h4>p3.html</h4><br><?php echo htmlspecialchars(read_prog(3)); ?></code></pre></div>
				<div id="code13" style="display: none;"><center><?php echo(read_prog(3)); ?><p><a href="p3.html" target="_blank">Open in full screen</a></p></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg3.txt" download="prg3.html">Download Code</a><br><br>
				<a href="p3.html" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 4: Develop and demonstrate a HTML5 file that includes JavaScript script that uses functions for the following problems:<br>
				a.	Parameter: A string<br>
				b.	Output: The position in the string of the left-most vowel<br>
				c.	Parameter: A number<br>
				d.	Output: The number with its digits in the reverse order</p>
				<button onclick="showCode(4);">Show/Hide Code</button>
				<button onclick="showCode(14)">Run here</button>
				<div id="code4" style="display: none;"><pre><br><code><h4>p4.html</h4><br><?php echo htmlspecialchars(read_prog(4)); ?></code></pre></div>
				<div id="code14" style="display: none;"><center><?php echo(read_prog(4)); ?><p><a href="p4.html" target="_blank">Open in full screen</a></p></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg4.txt" download="prg4.html">Download Code</a><br><br>
				<a href="p4.html" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 5:Design an XML document to store information about a student in an engineering college affiliated to VTU. The information must include USN, Name, and Name of the College, Branch, Year of Joining, and email id. Make up sample data for 3 students. Create a CSS style sheet and use it to display the document.</p>
				<button onclick="showCode(5);">Show/Hide Code</button>
				<button onclick="showCode(15)">Run here</button>
				<div id="code5" style="display: none;"><pre><br><code><h4>p5.xml</h4><br><?php echo htmlspecialchars(read_prog(5));
				  echo "<br><br><h4>p5.css</h4><br>";
				  echo htmlspecialchars(read_file("prg5css.txt")); ?></code></pre></div>
				<div id="code15" style="display: none;"><center><iframe src="p5.xml" width="80%"></iframe></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg5.txt" download="prg5.xml">Download XML</a><br>
				<a href="files/prg5css.txt" download="p5.css">Download CSS</a><br>
				<a href="p5.xml" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>

		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 6: Write a PHP program to keep track of the number of visitors visiting the web page and to display this count of visitors, with proper headings.</p>
				<button onclick="showCode(6);">Show/Hide Code</button>
				<button onclick="showCode(16)" >Run here</button>
				<div id="code6" style="display: none;"><pre><br><code><h4>p6.php</h4><br><?php echo htmlspecialchars(read_prog(6)); ?></code></pre></div>
				<div id="code16" style="display: none;"><center><iframe src="p6.php" width="80%"></iframe></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg6.txt" download="prg6.php">Download Code</a><br><br>
				<a href="p6.php" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 7: Write a PHP program to display a digital clock which displays the current time of the server.</p>
				<button onclick="showCode(7);">Show/Hide Code</button>
				<button onclick="showCode(17)" >Run here</button>
				<div id="code7" style="display: none;"><pre><br><code><h4>p7.php</h4><br><?php echo htmlspecialchars(read_prog(7)); ?></code></pre></div>
				<div id="code17" style="display: none;"><center><iframe src="p7i.php" width="80%"></iframe></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg7.txt" download="prg7.php">Download Code</a><br><br>
				<a href="p7.php" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 8: Write the PHP programs to do the following:<br>
					a.	Implement simple calculator operations.<br>
					b.	Find the transpose of a matrix.<br>
					c.	Multiplication of two matrices.<br>
					d.	Addition of two matrices.</p>
				<button onclick="showCode(8);">Show/Hide Code</button>
				<button onclick="showCode(18)" >Run here 8a</button>
				<div id="code8" style="display: none;"><pre><br><code><h4>p8a.php</h4><br><?php echo htmlspecialchars(read_prog(8));
					echo "<br><br><h4>p8b.php</h4><br>";
				  	echo htmlspecialchars(read_file("prg8b.txt"));
				  	echo "<br><br><h4>p8c.php</h4><br>";
				  	echo htmlspecialchars(read_file("prg8c.txt"));
				  	echo "<br><br><h4>p8d.php</h4><br>";
				  	echo htmlspecialchars(read_file("prg8d.txt"));
				 ?></code></pre></div>
				<div id="code18" style="display: none;"><center><iframe src="p8.php" width="80%"></iframe></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg8.txt" download="prg8a.php">Download 8a</a><br>
				<a href="files/prg8b.txt" download="prg8b.php">Download 8b</a><br>
				<a href="files/prg8c.txt" download="prg8c.php">Download 8c</a><br>
				<a href="files/prg8d.txt" download="prg8d.php">Download 8d</a><br>
				<a href="p8.php" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9">
				<p>Qns 9: Write a Python program named states.py that declares variable states with value "Mississippi Alabama Texas Massachusetts Kansas". write a PHP program that does the following:<br>
a)	Search for a word in variable states that ends in xas. Store this word in element 0 of a list named statesList.<br>
b)	Search for a word in states that begins with k and ends in s. Perform a case-insensitive comparison. [Note: Passing re .I as a second parameter to method compile performs a case-insensitive comparison.] Store this word in element1 of statesList.<br>
c)	Search for a word in states that begins with M and ends in s. Store this word in element 2 of the list.<br>
d)	Search for a word in states that ends in a. Store this word in element 3 of the list.</p>
				<button onclick="showCode(9);">Show/Hide Code</button>
				<button onclick="showCode(19)" >Run here</button>
				<div id="code9" style="display: none;"><pre><br><code><h4>p9.php</h4><br><?php echo htmlspecialchars(read_prog(9));
					echo "<br><br><h4>server.py</h4><br>";
				  	echo htmlspecialchars(read_file("prg9server.txt")); ?></code></pre></div>
				<div id="code19" style="display: none;"><center><iframe src="p9.php" width="80%"></iframe></center></div>
			</div>
			<div class="col-md-3">
				<a href="files/prg9.txt" download="prg9.php">Download PHP</a><br>
				<a href="files/prg9server.txt" download="server.py">Download Python</a><br><br>
				<a href="p9.php" target="_blank"><kbd>Output</kbd></a>
			</div>
		</div>
		<div class="dropdown-divider"></div>
		<div class="row">
			<div class="col-md-9" id="checkDown">
				<p>Qns 10: Write a PHP program to sort the student records which are stored in the database using selection sort.</p>
				<button onclick="showCode(10);">Show/Hide Code</button>
				<button onclick="showCode(110)">Output</button>
				<button onclick="showCode(120)">Procedure</button>
				<div id="code10" style="display: none;"><pre><br><code><h4>p10.php</h4><br><?php echo htmlspecialchars(read_prog(10)); ?></code></pre></div>
				<div id="code110" style="display: none;"><center><img src="lab10.png" width="80%"></img></center></div>
				<div id="code120" style="display: none;">
					<h4>Ubuntu Terminal</h4>
					<ul>
						<span>MySQL Database in Ubuntu - Username: <code>root</code> Password: <code>root</code></span>
						<li><code>mysql -u root -p</code></li>
						<li>Enter password: <code>root</code></li>
						<li>Check weblab database exists!-: <code>show databases;</code></li>
						<li>If exists: <code>drop database weblab;</code></li>
						<li>Create database: <code>create database weblab;</code></li>
						<li>Select the database: <code>use weblab;</code></li>
						<li>Create Table student: <code>create table student(usn varchar(12), name varchar(30), PRIMARY KEY(usn));</code></li>
						<li>Insert data: <code>insert into student values('4al16is042','rakesh');</code></li>
						<li><b>Insert multiple rows</b>. Make sure usn is not in sorted order(You need to sort using PHP)</li>
						<li>Run the program: Browsser- <code>localhost/p10.php</code></li>
					</ul>
					<h4 style="color: red;">Use windows XAMPP at your own RISK*</h4>
				</div>
			</div>
			<div class="col-md-3">
				<a href="files/prg10.txt" download="prg10.php">Download Code</a><br><br>
			</div>
		</div>
		<div class="dropdown-divider"></div>
	</div><!--container-->


	<footer class="page-footer font-small blue-grey lighten-5" style="margin-top: 40px;">
		<div class="container text-center text-black-50 py-3">
			<div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-md-0 mb-4">
		        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p><i class="fa fa-user mr-3"> Rakesh M R</i> &nbsp;<i class="fa fa-envelope mr-3"> rakeshmr20@gmail.com</i> &nbsp;<i class="fa fa-phone mr-3"> +919632260381</i></p>
	      	</div>
		</div>
		<div class="footer-copyright text-center text-black-50 py-3">© <?php if(date('y')>19) echo "2019-",date('Y'); else echo date('Y');?> Copyright:<a class="dark-grey-text" href="http://rakeshmr.me"> rakeshmr.me</a>
		</div>
	</footer>

	</div>
	<script type="text/javascript">
		function showCode(xcode) {
			var idName = "code"+xcode;
		  var x = document.getElementById(idName);
		  if (x.style.display === "none") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
		function changeMode() {
			var element = document.body;
			element.classList.toggle("dark-mode");
			var pr = document.getElementById("precode").querySelectorAll("pre");
			for (var i = 0; i <pr.length; i++) {
				pr[i].classList.toggle("darkcode");
			}
			
			/**var elmnt = iframe.contentWindow.document.getElementsByTagName("H1")[0];
			elmnt.style.display = "none";**/
		}
	</script>
</body>
</html>