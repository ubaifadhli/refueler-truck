function getToken() {
  return localStorage.token;
}

function components(){};//components data
$.get('components.html', null, function(text){
    components.table = $(text).find('.component'+'.table')[0].cloneNode(true);
    components.tableHeaderCell = components.table.getElementsByTagName('th')[0];
    components.tableRow = components.table.getElementsByTagName('tr')[1];
    components.tableCell = components.table.getElementsByTagName('td')[0];
});

function createTable(jsonData, tableID){
  var headers = Object.keys(jsonData[0]);
  var table = components.table.cloneNode(true);
  
  //clear header cell
  table.getElementsByTagName('tr')[0].innerHTML = '';

  for (var i = 0; i < headers.length; i++) {
    //making headers
    var header = components.tableHeaderCell.cloneNode(true);
    //edit text header
    header.innerHTML = headers[i];
    //add to table
    table.getElementsByTagName('tr')[0].appendChild(header);
  }

  //clear body cell
  table.getElementsByTagName('tbody')[0].innerHTML = '';

  for (var r = 0; r < jsonData.length; r++) {
    //making row
    var row = components.tableRow.cloneNode(true);
    
    //clear row from cells
    row.innerHTML = '';

    //add cell
    for (var c = 0; c < headers.length; c++){
      //making cell
      var cell = components.tableCell.cloneNode(true);
      //edit text cell
      cell.innerHTML = jsonData[r][ headers[c] ];
      //add to row
      row.appendChild(cell);
    }
    
    //add to body cell
    table.getElementsByTagName('tbody')[0].appendChild(row);
  }
  //return table;

  //change the id
  table.id = tableID;
  document.getElementById(tableID).replaceWith(table);
}

var a;
function storeA(asdf) {
  a = asdf;
}
