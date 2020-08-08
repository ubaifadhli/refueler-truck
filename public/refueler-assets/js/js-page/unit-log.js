var a = [
 {
   "Date Time": 2020,
   "Receipt ID": 260,
   "Total Volume": 2160780,
   "Total Warning": 1,
   "Product": "Jet A-1"
 },
 {
   "Date Time": 2020,
   "Receipt ID": 260,
   "Total Volume": 2160780,
   "Total Warning": 2,
   "Product": "Jet A-1"
 },
 {
   "Date Time": 2020,
   "Receipt ID": 260,
   "Total Volume": 2160780,
   "Total Warning": 0,
   "Product": "Jet A-1"
 },
 {
   "Date Time": 2020,
   "Receipt ID": 260,
   "Total Volume": 2160780,
   "Total Warning": 1,
   "Product": "Jet A-1"
 },
 {
   "Date Time": 2020,
   "Receipt ID": 260,
   "Total Volume": 2160780,
   "Total Warning": 1,
   "Product": "Jet A-1"
 },
 {
   "Date Time": 2020,
   "Receipt ID": 260,
   "Total Volume": 2160780,
   "Total Warning": 0,
   "Product": "Jet A-1"
 }
];

window.onload = function(){
   setTimeout(function(){
      createTable(a,"table1");
   },1000); 
   setTimeout(function(){
      $('tbody').click(function(){
         window.location.href="unit-detail.html";
      })
   },1000); 
}

