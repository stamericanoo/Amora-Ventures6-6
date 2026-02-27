<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amora Ventures | Sulfuric Acid Plant</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
scroll-behavior:smooth;
}

body{
font-family:'Poppins',sans-serif;
background:linear-gradient(180deg,#0f172a,#111827,#1e1b4b);
color:white;
}

section{
padding:100px 10%;
min-height:100vh;
}

h1,h2,h3{
font-weight:800;
letter-spacing:1px;
}

.nav{
position:fixed;
top:0;
width:100%;
background:rgba(15,23,42,0.95);
padding:20px 10%;
display:flex;
justify-content:space-between;
z-index:999;
backdrop-filter:blur(10px);
}

.nav a{
color:white;
text-decoration:none;
margin-left:25px;
font-weight:500;
}

.hero{
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
text-align:center;
height:100vh;
background:linear-gradient(135deg,#7f1d1d,#1e3a8a);
}

.hero h1{
font-size:60px;
}

.hero h2{
font-size:28px;
font-weight:400;
margin-top:15px;
}

.card{
background:rgba(255,255,255,0.05);
padding:40px;
border-radius:20px;
margin-top:30px;
backdrop-filter:blur(10px);
}

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
}

.highlight{
color:#facc15;
}

.big-number{
font-size:42px;
color:#f87171;
font-weight:800;
}

footer{
padding:50px;
text-align:center;
background:#0f172a;
}

</style>
</head>

<body>

<div class="nav">
<div><b>AMORA VENTURES</b></div>
<div>
<a href="#about">About</a>
<a href="#process">Process</a>
<a href="#stoich">Stoichiometry</a>
<a href="#machine">Machine</a>
<a href="#economics">Economics</a>
<a href="#team">Team</a>
</div>
</div>

<!-- HERO -->
<section class="hero">
<h1>AMORA VENTURES</h1>
<h2>Industrial Sulfuric Acid Plant Design</h2>
<div class="card">
<h3>Plant Capacity</h3>
<div class="big-number">1000 Ton H₂SO₄ / Day</div>
<p>Operating 330 Days Per Year</p>
</div>
</section>

<!-- ABOUT -->
<section id="about">
<h2>1. PROJECT OVERVIEW</h2>
<div class="card">
<p>
This project presents a comprehensive industrial design of a 1000 ton/day sulfuric acid plant using the Contact Process.
The objective is to evaluate technical feasibility, material balance, economic viability, and operational performance.
</p>
<br>
<p>
The plant operates under optimized thermodynamic and kinetic conditions to maximize SO₃ conversion while maintaining economic profitability.
</p>
</div>
</section>

<!-- PROCESS -->
<section id="process">
<h2>2. PROCESS DESCRIPTION</h2>
<div class="grid">

<div class="card">
<h3>2.1 Sulfur Burning Furnace</h3>
<p>Molten sulfur is combusted with dry air.</p>
<p><b>Reaction:</b> S + O₂ → SO₂</p>
<p>Temperature: 900–1100°C</p>
<p>Highly exothermic.</p>
</div>

<div class="card">
<h3>2.2 Gas Cleaning</h3>
<p>Removal of dust and moisture to protect catalyst.</p>
<p>Cooling to 40–80°C</p>
</div>

<div class="card">
<h3>2.3 Catalytic Converter</h3>
<p>2SO₂ + O₂ ⇌ 2SO₃</p>
<p>V₂O₅ Catalyst</p>
<p>420–450°C</p>
</div>

<div class="card">
<h3>2.4 Absorption Tower</h3>
<p>SO₃ absorbed in H₂SO₄ to form oleum.</p>
</div>

<div class="card">
<h3>2.5 Oleum Dilution</h3>
<p>H₂S₂O₇ + H₂O → 2H₂SO₄</p>
</div>

</div>
</section>

<!-- STOICHIOMETRY -->
<section id="stoich">
<h2>3. STOICHIOMETRY PER DAY</h2>
<div class="card">
<p>For 1000 ton/day production:</p>
<p>Sulfur required: <span class="highlight">326.5 kg per ton</span></p>
<p>Total sulfur/day: <span class="big-number">181 ton/day</span></p>
</div>

<canvas id="stoichChart"></canvas>

<script>
new Chart(document.getElementById('stoichChart'),{
type:'bar',
data:{
labels:['Sulfur','Oxygen','Water'],
datasets:[{
label:'Ton/Day',
data:[181,266,93],
backgroundColor:['#7f1d1d','#1e3a8a','#f87171']
}]
}
});
</script>
</section>

<!-- MACHINE -->
<section id="machine">
<h2>4. MACHINE SELECTION</h2>
<div class="grid">
<div class="card">
<h3>Standard Package</h3>
<p>Efficiency: 92%</p>
<p>Estimated Cost: Rp 153 Billion</p>
</div>
<div class="card">
<h3>Premium Package</h3>
<p>Efficiency: 96%</p>
<p>Higher yield, better ROI</p>
</div>
</div>
</section>

<!-- ECONOMICS -->
<section id="economics">
<h2>5. ECONOMIC ANALYSIS</h2>

<div class="card">
<p>Total Capital Investment</p>
<div class="big-number">Rp 1.127 Trillion</div>
</div>

<div class="card">
<p>Annual Revenue</p>
<div class="big-number">Rp 660 Billion</div>
</div>

<div class="card">
<p>Net Profit After Tax</p>
<div class="big-number">Rp 94.5 Billion</div>
</div>

<canvas id="bepChart"></canvas>

<script>
new Chart(document.getElementById('bepChart'),{
type:'line',
data:{
labels:['0%','25%','50%','75%','100%'],
datasets:[{
label:'Profit Trend',
data:[-200,-50,0,50,121],
borderColor:'#f87171'
}]
}
});
</script>

</section>

<!-- TEAM -->
<section id="team">
<h2>6. PROJECT TEAM</h2>
<div class="grid">
<div class="card">Azzam</div>
<div class="card">Dean</div>
<div class="card">Hasbi</div>
<div class="card">Aisha</div>
<div class="card">Keysha</div>
<div class="card">Jovita</div>
</div>
</section>

<footer>
<p>© 2026 Amora Ventures — Sulfuric Acid Plant Design</p>
</footer>

</body>
</html>
