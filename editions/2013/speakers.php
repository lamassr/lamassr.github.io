
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang = "en">
	<head>
		<title> SR - International Workshop on Strategic Reasoning </title>
		<meta name = "title" content = "SR - International Workshop on Strategic Reasoning" />
		<meta name = "description" content = "International Workshop on Strategic Reasoning: SR Central Web Site" />
		<meta name = "keywords" content = "Theoretical computer science; Strategic reasoning." />
		<meta http-equiv = "content-type" content = "text/html; charset=utf-8" />
		<meta http-equiv = "content-style-type" content = "text/css; charset=utf-8" />
		<meta http-equiv = "content-language" content = "en" />
		<meta name = "author" content = "Nicolas Markey / Patricia Bouyer / / François Schwarzentruber / Fabio Mogavero" />
		<meta name = "copyright" content = "This website is based on Fabio Mogavero's http://www.strategicreasoning.net/" />
		<meta name = "language" content = "eng" />
		<base href = "" />		
		<meta name = "robots" content = "index, follow" />
		<meta name = "verify-v1" content = "" />
		<link rel = "icon" type = "image/png" href = "../../commons/images/favicon.png" />
		<link rel = "shortcut icon" type = "image/png" href = "../../commons/images/favicon.png" />
		<link rel = "stylesheet" type = "text/css" href = "../../commons/css/style.css" media = "screen, projection" />
		<!--[if lt IE 8]><style type = "text/css">body div.end { clear: none; }</style><![endif]-->
	</head>
	<body>
		<div id = "wrapper">
			<div id = "header">
				<h1>SR 2013</h1>
			</div>
			<div id = "innerwrapper">
				<div id = "sidebar">
<ul><ul>  <li><a class = "noactive" href = "index.php"><strong>About SR 2013</strong></a></li>
  <li><a class = "noactive" href = "speakers.php">Invited speakers</a></li>
  <li><a class = "noactive" href = "program.php">Program</a></li>
  <li><a class = "noactive" href = "committees.php">Committees</a></li>
  <li><a class = "noactive" href = "accepted.php">Accepted contributions</a></li>
  <li><a class = "noactive" href = "cfp.php">Call for Papers</a></li>
  <li><a class = "noactive" href = "dates.php">Important dates</a></li>
  <li><a class = "noactive" href = "proceedings.php">Proceedings</a></li>
  <li><a class = "noactive" href = "venue.php">Venue</a></li>
  <li><a class = "noactive" href = "../../editions.php">Edition archive</a></li>
</ul>
</div>
    <div id = "content">

				<h1>Invited Speakers</h1>

				<br/>

				<h3>
					<a href = "http://pub.ist.ac.at/~kchatterjee/">Krishnendu Chatterjee</a> (IST Austria)
				</h3>

				<strong>Breaking the O(n*m) Barrier for B&uuml;chi Games and Probabilistic Verification.</strong>

				<p>
					Turn-based B&uuml;chi games and maximal end-component decomposition are two classic graph theoretic problems
					that are core algorithmic problems in synthesis and verification of probabilistic systems.
					Moreover, many other problems on graph games reduce to them, and as an example we will first describe how
					analysis of reachability objectives in concurrent games reduces to B&uuml;chi games.
					We will present recent results that break the O(n*m) barrier for B&uuml;chi games, and show how the same
					techniques break the barrier for maximal end-component decomposition.
				</p>

				<br/>

				<h3>
					<a href = "http://www.doc.ic.ac.uk/~alessio/">Alessio R. Lomuscio</a> (Imperial College London)
				</h3>

				<strong>Model Checking Systems against Epistemic Specifications.</strong>

				<p>
					Twenty years after the publication of the influential article "Model checking vs theorem proving: a manifesto"
					by Halpern and Vardi, the area of model checking systems against agent-based specifications is flourishing.

					In this talk I will present some of the approaches I have developed with collaborators.
					I will begin by discussing BDD-based model checking for epistemic logic combined with ATL operators and then
					move to abstraction techniques including symmetry reduction.
					I will then highlight how, in our experience, bounded model checking can also successfully be used in this
					context, particularly in combination with BDDs, and how synthesis problems can be formulated and solved in an
					epistemic setting.

					The talk will include examples in the context of security protocols and a brief demo of MCMAS, an open-source
					model checker implementing some of these techniques.
				</p>

				<br/>

				<h3>
					<a href = "http://www.ulb.ac.be//di/ssd/jfr/">Jean-Francois Raskin</a> (Universit&eacute; Libre de Bruxelles)
				</h3>

				<strong>Looking at Mean-Payoff and Total-Payoff through Windows.</strong>

				<p>
					We consider two-player games played on weighted directed graphs with mean-payoff and total-payoff objectives,
					which are two classical quantitative objectives.
					While for single dimensional objectives all results for mean-payoff and total-payoff coincide, we show that in
					contrast to multi-dimensional mean-payoff games that are known to be coNP-complete, multi-dimensional
					total-payoff games are undecidable.
					We introduce conservative approximations of these objectives, where the payoff is considered over a local
					finite window sliding along a play, instead of the whole play.
					For single dimension, we show that (i) if the window size is polynomial, then the problem can be solved in
					polynomial time, and (ii) the existence of a bounded window can be decided in NP and in coNP, and is at least
					as hard as solving mean-payoff games.
					For multiple dimensions, we show that (i) the problem with fixed window size is ExpTime-complete, and (ii)
					there is no primitive-recursive algorithm to decide the existence of a bounded window.
				</p>

				<br/>

				<h3>
					<a href = "http://www.cs.ox.ac.uk/people/michael.wooldridge/">Michael Wooldridge</a> (University of Oxford)
				</h3>

				<strong>Bad Equilibria (and what to do about them).</strong>

				<p>
					In economics, an equilibrium is a steady-state situation, which obtains because no participant has any
					rational incentive to deviate from it.
					Equilibrium concepts are arguably the most important and widely used analytical weapons in the game theory
					arsenal.
					The concept of Nash equilibrium in particular has found a huge range of applications, in areas as diverse and
					seemingly unrelated as biology and moral philosophy.
					However, there remain fundamental problems associated with Nash equilibria and their application.
					First, there may be multiple Nash equilibria, in which case, how should we choose between them?
					Second, some equilibria may be undesirable, in which case, how can we avoid them?
					In this presentation, I will introduce work that we have done addressing these problems from a
					computational/AI perspective.
					Assuming no prior knowledge of game theory or economic solution concepts, I will discuss various ways in
					which we can try to engineer a game so that desirable equilibria result, or else engineer out undesirable
					equilibria.
					In particular, I will consider thee possible devices for the management of equilibria: taxation,
					communication, and law-making.
					While all of these devices are regularly used in human societies, in this work, we consider these as
					computational problems.
				</p>

<br/><br/>
<hr>


</div>

<div id = "end"></div>
</div>
</div>
<div id = "footer">
  <p>
    This website is based on Fabio Mogavero's
    <a href='http://www.strategicreasoning.net/'>http://www.strategicreasoning.net/</a>.
    <br/>
    Valid <a href = "http://validator.w3.org/check?uri=referer">xhtml 1.0</a> /
	<a href = "http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css 3</a>.
  </p>
</div>
</body>
</html>
