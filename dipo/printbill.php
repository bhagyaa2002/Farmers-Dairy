<html>
<head>
<style>
.table{
	  border: 3px solid black;
  }
.box-title{
  font-weight:bold;
}
.heading-row td{
  font-weight:bold;
  text-align:center;
  border-bottom:solid 1px red;
}

.total-row td{
  font-weight:bold;
}
.v-row td{
  border:none;
}
@media print{
  button .print-btn{
    display:none;
  }
  
}
</style>
 </head>
 <body>
 <div class="container-fluid">
  <div id="bill-display">
    <!-- ----- HEADER ---- -->
    <table class="table table-bordered">
      <caption class="text-center"><H1><B>Amrutha Sangama M.P.C.S</B></H1></caption>
      <tr align="center">
        
		<td colspan="2" >
		
          <div class="box-title">Date</div>
          <div class="box-content">10-08-2016</div>
        </td>
		
		<td colspan="2" >
          <div class="box-title">Time</div>
          <div class="box-content"> Morning</div>
        </td>
        </tr>
      <tr align="center">
	    <td colspan="2">
          <div class="box-title">Code</div>
          <div class="box-content">452</div>
        </td>
		<td colspan="2">
          <div class="box-title">Cattle</div>
          <div class="box-content">Cow</div>
        </td>
        
        </tr>
      <tr align="center">
        <td colspan="3" rowspan="3">
          <div class="box-title">Name</div>
          <div class="box-content">
            Mahesh Nedchil<br>
         </div>
        </td>
        
      </tr><TR></TR>
      </tr><TR></TR>
     <BR>
      <!-- ----- BODY ---- -->
      <tr align="center" class="heading-row v-row" >
        <th>FAT</th>
        <th>CLR</th>
        <th>SNF</th>
		<th>Liter</th>
       </tr>
      <tr class="v-row">
        <td>3.5</td>
        <td>9.00</td>
        <td>8.5</td>
        <td >3.9</td>
      </tr>
      
      <!-- ----- FOOTER ---- -->
      <tr>
        <th colspan="3">Amount  
        </th><td>29.00</td></tr>
	<tr>
        <th colspan="3" >Total Amount</th><td>113.10</td>
      </tr>
      
    </table>
  </div>
  <button class="btn btn-default .print-btn" onclick="jsvascript:window.print()">Bill</button>
</div>
 </body>
</html>
