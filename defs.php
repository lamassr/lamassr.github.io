<?php
header('https://lamassr.github.io/');

## menu gauche

function menuitem($ref, $name, $on) {
  if ($on) {
    echo "  <li><a class = \"noactive\" href = \"$ref\">$name</a></li>\n";
  }
}

function menu() {
  echo "<ul><ul>";
  menuitem("index.php",  	        "<strong>About SR 2020</strong>", 1);
  menuitem("speakers.php", 		"Invited speakers",		1);
  menuitem("schedule.php",		"Programme",			1);
  menuitem("committees.php",		"Committees",			1);
  menuitem("accepted.php",		"Accepted contributions",	0);
  menuitem("Papers/",			"Papers",			0);
  menuitem("cfp.php",			"Call for Papers",		1);
  menuitem("https://easychair.org/conferences/?conf=sr2019",			"Submissions",		0);
  menuitem("dates.php",			"Important dates",		1);
  menuitem("",				"Programme",			0);
  menuitem("",				"Talks",			0);
  menuitem("",				"Proceedings",			0);
  menuitem("cfp.php",				"Call for contributions",	0);
  menuitem("venue.php",		"Venue",			1);
  menuitem("https://www.ijcai19.org/register.html",		"Registration",			0);
  menuitem("",	"Accommodation",		0);
  menuitem("editions.php",	"Edition archive",	1);
  echo "</ul>
";
return(1);
}


function pc($nom, $www, $aff) {
  print "<li><a href='$www'>$nom</a>, $aff</li>\n";
}

function sponsors() {
}

## headers

function baseref()
{
  if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    $baseref='http://localhost:8000/';
  } else {
    $baseref='https://lamassr.github.io/';
  }
  return $baseref;
}

function head($title="LAMAS&SR 2021") {
  echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns = \"http://www.w3.org/1999/xhtml\" xml:lang = \"en\">
	<head>
		<title> LAMAS&SR </title>
		<meta name = \"title\" content = \"LAMAS&SR\" />
		<meta name = \"description\" content = \"International Workshop on Logical Aspects in Multi-Agent Systems and Strategic Reasoning\" />
		<meta name = \"keywords\" content = \"Theoretical computer science; Strategic reasoning.\" />
		<meta http-equiv = \"content-type\" content = \"text/html; charset=utf-8\" />
		<meta http-equiv = \"content-style-type\" content = \"text/css; charset=utf-8\" />
		<meta http-equiv = \"content-language\" content = \"en\" />
		<meta name = \"author\" content = \"Nicolas Markey / Patricia Bouyer / / François Schwarzentruber / Fabio Mogavero\" />
		<meta name = \"copyright\" content = \"This website is based on Fabio Mogavero's http://www.strategicreasoning.net/\" />
		<meta name = \"language\" content = \"eng\" />
		<base href = \"";
      echo baseref();
      echo "\" />		
		<meta name = \"robots\" content = \"index, follow\" />
		<meta name = \"verify-v1\" content = \"\" />
		<link rel = \"icon\" type = \"image/png\" href = \"commons/images/favicon.png\" />
		<link rel = \"shortcut icon\" type = \"image/png\" href = \"commons/images/favicon.png\" />
		<link rel = \"stylesheet\" type = \"text/css\" href = \"commons/css/style.css\" media = \"screen, projection\" />
		<!--[if lt IE 8]><style type = \"text/css\">body div.end { clear: none; }</style><![endif]-->
	</head>
	<body>
		<div id = \"wrapper\">
			<div id = \"header\">
				<h1>$title</h1>
			</div>
			<div id = \"innerwrapper\">
				<div id = \"sidebar\">
";
  menu();
  sponsors();
  echo "</div>
    <div id = \"content\">
";
return(1);
}

function foot() {
  echo "
</div>

<div id = \"end\"></div>
</div>
</div>
<div id = \"footer\">
  <p>
    This website is based on Fabio Mogavero's
    <a href='http://www.strategicreasoning.net/'>http://www.strategicreasoning.net/</a>.
    <br/>
    Valid <a href = \"http://validator.w3.org/check?uri=referer\">xhtml 1.0</a> /
	<a href = \"http://jigsaw.w3.org/css-validator/check/referer?profile=css3\">css 3</a>.
  </p>
</div>
</body>
</html>
";
}


?>