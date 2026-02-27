const TCI = 1127;
const annualProduction = 330000;
const baseOPEX = 538.8;
const taxRate = 0.22;
const depreciationYears = 10;

const priceInput = document.getElementById("price");
const discountInput = document.getElementById("discount");
const capacityInput = document.getElementById("capacity");

const npvValue = document.getElementById("npvValue");
const irrValue = document.getElementById("irrValue");

const cashChart = new Chart(document.getElementById("cashChart"),{
type:"line",
data:{
labels:["Y1","Y2","Y3","Y4","Y5","Y6","Y7","Y8","Y9","Y10"],
datasets:[{
label:"Free Cash Flow (Billion IDR)",
data:Array(10).fill(0),
borderColor:"#f87171",
fill:false
}]
}
});

function calculate(){

let sellingPrice=parseFloat(priceInput.value);
let discountRate=parseFloat(discountInput.value)/100;
let capacity=parseFloat(capacityInput.value)/100;

let production=annualProduction*capacity;
let revenue=sellingPrice*production/1000000000;

let depreciation=TCI/depreciationYears;

let cashflows=[];
for(let year=1;year<=10;year++){
let EBIT=revenue-baseOPEX-depreciation;
let tax=EBIT>0?EBIT*taxRate:0;
let netIncome=EBIT-tax;
let freeCashFlow=netIncome+depreciation;
cashflows.push(freeCashFlow);
}

let npv=-TCI;
for(let i=0;i<10;i++){
npv+=cashflows[i]/Math.pow((1+discountRate),(i+1));
}

let irr=0.1;
for(let k=0;k<200;k++){
let testNPV=-TCI;
for(let i=0;i<10;i++){
testNPV+=cashflows[i]/Math.pow((1+irr),(i+1));
}
irr+=testNPV>0?0.0005:-0.0005;
}

npvValue.innerText=npv.toFixed(2);
irrValue.innerText=(irr*100).toFixed(1)+"%";

cashChart.data.datasets[0].data=cashflows;
cashChart.update();
}

priceInput.addEventListener("input",calculate);
discountInput.addEventListener("input",calculate);
capacityInput.addEventListener("input",calculate);

calculate();

new Chart(document.getElementById("massChart"),{
type:"bar",
data:{
labels:["Sulfur","Oxygen","Water","Product"],
datasets:[{
data:[181,266.98,93.6,1000],
backgroundColor:["#7f1d1d","#1e3a8a","#f87171","#22c55e"]
}]
}
});
