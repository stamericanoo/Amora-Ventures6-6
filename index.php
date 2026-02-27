<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amora Ventures | Sulfuric Acid Plant</title>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<nav class="navbar">
<div class="logo">AMORA VENTURES</div>
<div class="nav-links">
<a href="#executive">Executive</a>
<a href="#technology">Technology</a>
<a href="#process">Process</a>
<a href="#stoich">Stoichiometry</a>
<a href="#mass">Mass Balance</a>
<a href="#energy">Energy</a>
<a href="#economics">Economics</a>
<a href="#risk">Risk</a>
<a href="#team">Team</a>
</div>
</nav>

<section class="hero">
<h1>Sulfuric Acid Plant Design</h1>
<h2>1000 Ton Per Day Industrial Facility</h2>
<p>Comprehensive Engineering & Economic Feasibility Study</p>
</section>

<section id="executive" class="section">
<h2>1. Executive Summary</h2>
<p>
This project presents the complete technical and economic evaluation of a sulfuric acid
production facility with a capacity of 1000 tons per day.
The plant utilizes the Contact Process with vanadium(V) oxide catalyst,
achieving 98% overall conversion efficiency.
Total Capital Investment (TCI) is estimated at Rp 1.127 trillion,
with projected annual net profit of approximately Rp 94.5 billion.
</p>
</section>

<section id="technology" class="section alt">
<h2>2. Technology Selection</h2>
<p>
The Contact Process was selected due to its high conversion efficiency,
operational stability, and environmental compliance.
Multi-bed catalytic reactors and double absorption systems
maximize sulfur conversion while minimizing SO₂ emissions.
</p>
</section>

<section id="process" class="section">
<h2>3. Process Description</h2>

<div class="equation">S + O₂ → SO₂</div>
<p>Combustion at 900–1100°C in sulfur furnace.</p>

<div class="equation">2SO₂ + O₂ ⇌ 2SO₃</div>
<p>Catalytic oxidation at 420–450°C using V₂O₅ catalyst.</p>

<div class="equation">SO₃ + H₂SO₄ → H₂S₂O₇</div>
<div class="equation">H₂S₂O₇ + H₂O → 2H₂SO₄</div>

</section>

<section id="stoich" class="section alt">
<h2>4. Stoichiometric Calculation</h2>
<p>Based on 1000 ton/day H₂SO₄ production:</p>

<ul>
<li>Sulfur: 181 ton/day</li>
<li>Oxygen: 266.98 ton/day</li>
<li>Water: 93.6 ton/day</li>
</ul>
</section>

<section id="mass" class="section">
<h2>5. Mass Balance</h2>

<table>
<tr><th>Component</th><th>Ton/Day</th></tr>
<tr><td>Sulfur</td><td>181</td></tr>
<tr><td>Oxygen</td><td>266.98</td></tr>
<tr><td>Water</td><td>93.6</td></tr>
<tr><td>Product</td><td>1000</td></tr>
</table>

<canvas id="massChart"></canvas>

</section>

<section id="energy" class="section alt">
<h2>6. Energy Integration</h2>
<p>
Heat from sulfur combustion and catalytic oxidation
is recovered through waste heat boilers.
Recovered steam supports plant utilities,
reducing operational energy cost.
</p>
</section>

<section id="economics" class="section">
<h2>7. Economic Feasibility</h2>

<div class="card">
<label>Selling Price (IDR/ton)</label>
<input type="number" id="price" value="2000000">

<label>Discount Rate (%)</label>
<input type="number" id="discount" value="10">

<label>Capacity Utilization (%)</label>
<input type="number" id="capacity" value="100">
</div>

<div class="card">
<p>NPV (Billion IDR)</p>
<div class="big" id="npvValue">0</div>
</div>

<div class="card">
<p>IRR (%)</p>
<div class="big" id="irrValue">0%</div>
</div>

<canvas id="cashChart"></canvas>

</section>

<section id="risk" class="section alt">
<h2>8. Risk & Environmental Analysis</h2>
<p>
Potential risks include sulfur price volatility,
catalyst poisoning, and acid mist formation.
Double absorption systems and emission control units
ensure compliance with environmental regulations.
</p>
</section>

<section id="team" class="section">
<h2>9. Project Team</h2>
<div class="team">
<div class="card">Azzam</div>
<div class="card">Dean</div>
<div class="card">Hasbi</div>
<div class="card">Aisha</div>
<div class="card">Keysha</div>
<div class="card">Jovita</div>
</div>
</section>

<footer>
© 2026 Amora Ventures – Industrial Chemical Engineering Project
</footer>

<script src="script.js"></script>
</body>
</html>
