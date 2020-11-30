
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
				<h1>SR 2014</h1>
			</div>
			<div id = "innerwrapper">
				<div id = "sidebar">
<ul><ul>  <li><a class = "noactive" href = "index.php"><strong>About SR 2014</strong></a></li>
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
					<a href = "http://pub.ist.ac.at/~tah/">Thomas A. Henzinger</a> (IST Austria)
				</h3>

				<strong>Simulation Games.</strong>

				<p>
					Milner's simulation relation is a fundamental concept to compare the behaviors of two discrete dynamical
					systems.
					While originally defined for safety properties of state transition graphs, its game-theoretic formulation
					allows a natural generalization to liveness and quantitative properties.
					The resulting games are implication games on product graphs, i.e., the derived (simulation) objective takes
					the form of a logical implication between primary (system) objectives.
					We summarize the hardness of such implication games for important classes of system objectives: in some cases
					the implication game is no harder to solve than the corresponding primary game; in other cases the implication
					game is open even though we know how to solve the primary game.
				</p>

				<br/>

				<h3>
					<a href = "http://cgi.csc.liv.ac.uk/~wiebe/">Wiebe van der Hoek</a> (University of Liverpool)
				</h3>

				<strong>Two Themes in Modal Logic.</strong>

				<p>
					Modal logics form the basis for knowledge representation languages in AI, enabling us to reason about time,
					knowledge, beliefs, desires and obligations of agents.
					In my talk, I will address two contemporary research themes in this field.
					<br/>
					A good old fashioned line of research in modal logic is that of "correspondence theory" which establishes a
					direct link between first order properties on Kripke models (basically, graphs) and modal sentences.
					Standard results have a typical global flavour: in terms of beliefs for instance, reflexive models guarantee
					that the agent's beliefs are correct, and inclusion of the doxastic relation of agent <em>a</em> in that of
					agent <em>b</em> guarantees that agent <em>a</em> believes whatever <em>b</em> believes.
					However, such results cannot cater for cases where we want to express that such properties only hold locally,
					as in "agent <em>a</em> believes his beliefs are correct, but this is not the case", or in "agent <em>a</em>
					believes anything agent <em>b</em> believes, but this will cease to hold as soon as <em>b</em> reads the
					letter".
					I will present a logic that can deal with such local cases.
					<br/>
					The second theme concerns the question how we compare different logics.
					Standard ways to compare <em>L1</em> with <em>L2</em> address their expressivity, or the computational
					complexity of reasoning problems one can perform in each.
					In many cases, two logics are comparable on both measures.
					Only recently the field of knowledge representation has started to address the issue of succinctness: how
					economically can one express properties in each logic?
					I give a working definition of what it means that <em>L1</em> is exponentially more succinct than <em>L2</em>,
					and then I present a tool which can be used to prove succinctness results, the so-called Formula Size Games.
					Such games are played on two sets of models, and it establishes a relation between the number of moves needed
					to win the game, and the length of a formula that discriminates between the sets.
					I will present some examples of succinctness results.
				</p>

				<br/>

				<h3>
					<a href = "http://www.doc.ic.ac.uk/~alessio/">Alessio R. Lomuscio</a> (Imperial College London)
				</h3>

				<strong>Model Checking Systems Against Epistemic Specifications.</strong>

				<p>
					Twenty years after the publication of the influential article "Model checking vs theorem proving: a manifesto"
					by Halpern and Vardi, the area of model checking systems against agent-based specifications is flourishing.
					<br/>
					In this talk I will present some of the approaches I have developed with collaborators.
					I will begin by discussing BDD-based model checking for epistemic logic combined with ATL operators and then
					move to abstraction techniques including symmetry reduction.
					I will then highlight how, in our experience, bounded model checking can also successfully be used in this
					context, particularly in combination with BDDs, and how synthesis problems can be formulated and solved in an
					epistemic setting.
					<br/>
					The talk will include examples in the context of security protocols and a brief demo of MCMAS, an open-source
					model checker implementing some of these techniques.
					<br/>
					(This talk was meant to feature in the SR 2013 programme but could not be given due to ill health of the
					speaker).
				</p>

				<br/>

				<h3>
					<a href = "http://www.automata.rwth-aachen.de/~thomas/index.en">Wolfgang Thomas</a> (RWTH Aachen)
				</h3>

				<strong>What are "Good" Winning Strategies in Infinite Games?</strong>

				<p>
					Infinite games were invented in descriptive set theory, where the dominating question was determinacy - the
					mere existence of a winning strategy for one of the two players.
					In computer science the problem was put into an algorithmic setting: Can one decide who wins and can one
					effectively construct a winning strategy?
					In this talk we address quantitative refinements of the problem, reflecting a major current trend of research:
					How to construct winning strategies that are "good" or even "optimal" in some sense?
					The size of memory of finite-state machines executing winning strategies is a well-known criterion.
					Other criteria refer to the "efficient behavior" of strategies, as captured by the application of the solution
					of mean-payoff games.
					A third approach aims at novel formats of winning strategies, e.g. as "programs" (rather than state-machines).
					We survey old and recent work on these topics, spanning the literature from the beginnings
					(B&uuml;chi-Landweber 1969) to recent results obtained in the Aachen research group, among them the study of
					winning strategies as Boolean programs (Br&uuml;tsch 2013) and the Turing machine based model of "strategy
					machine" (Gelderie 2014).
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
