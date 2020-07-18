function createTable(jsonData, table_id){
    //json keys
    var keys = Object.keys(jsonData[0]);

    //emptied the container
    var deleteChild = document.getElementById(table_id);
    deleteChild.innerHTML = '';

    //create table html
    var table = document.createElement('table');

    //header
    var headerRow = document.createElement('tr');
    headerRow.classList.add("data-header");
    
    for (var i = 0; i < keys.length; i++) {
      var headerCell = document.createElement('td');
      headerCell.classList.add(keys[i]);
      headerCell.appendChild(document.createTextNode(keys[i]));
      headerRow.appendChild(headerCell);
      table.appendChild(headerRow);
    }

    //iterate through row
    for (var rowIndex = 0; rowIndex < jsonData.length; rowIndex++) {

      //make a new row html
      var row = document.createElement('tr');
      //assign class or id
      row.classList.add("data-"+jsonData[rowIndex][keys[0]]);

      for (var columnIndex = 0; columnIndex < jsonData.length; columnIndex++) {
        //make a new cell html
        var cell = document.createElement('td');
        //assign class or id
        //cell.classList.add(jsonData[0][columnIndex]);
        //insert the data
        cell.appendChild(document.createTextNode(jsonData[rowIndex][keys[columnIndex]]));
        //insert cell to row
        row.appendChild(cell);
      }

      //insert row to table
      table.appendChild(row);
    }//
    document.getElementById(table_id).appendChild(table);

}