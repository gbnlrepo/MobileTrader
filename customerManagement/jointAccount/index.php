
<script src="customerManagement/jlib/menulib.js"></script>
<script src="customerManagement/jlib/mempop.js"></script>
<script src="customerManagement/jlib/normarizr.js"></script>
<link type="text/css" href="customerManagement/jlib/pop.css" rel='stylesheet'>

<div id="body_general">
<div id="accounttile">Company Setup 
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>




<div  class="dialog"  id="d11" >
<div id="indidual_general">
<div id="uppers">

<table width="560" border="1" style="margin-left:30px;">
  <tr>
    <td width="116"><div id="inputName">Name:</div></td>
    <td width="145"><div id="formInputs"><input type="text" value=""/><input type="hidden" value="<%= convert %>" class="regKey"/></div></td>
   </tr>
   
  <tr>
    <td><div id="inputName">Address:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
    
  <tr>
    <td><div id="inputName">Email:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
  </tr>
    
   <tr>
    <td><div id="inputName">Phone:</div></td>
    <td><div id="formInputs">
      <select>
        <option value=""></option>
      </select>
    </div></td>
   </tr>
      
    <tr>
    <td><div id="inputName">Status:</div></td>
    <td><div id="formInputs">
      <select>
        <option value=""></option>
      </select>
    </div></td>
    </tr>
</table>
<div id="butoss" style="margin-top:10px; margin-left:30px;"><button><img src="customerManagement/image/savebuttons.png" /> Submit </button> 
</div>

<br />

    <td width="299" align="left" valign="top">
    <div id="table_results">
      <table class="datatable" id="genericTableFormtable" summary="System Resources">
          <tbody>
            <tr>
              <th width="62"><div id="datatableColcontent">S/N</div></th>
              <th width="49"><div id="datatableColcontent">Name</div></th>
              <th width="64"><div id="datatableColcontent">Address</div></th>
              <th width="69"><div id="datatableColcontent">Email</div></th>
              <th width="52"><div id="datatableColcontent">Phone</div></th>
              <th width="74"><div id="datatableColcontent">Status</div></th>
            </tr>
          
            <tr  id="d" class="rowEven">
           
            </tr>
            <tr id="d"  class="rowOdd">
             
              <td></td>
              <td id="name1" scope="row"></td>
              <td id="type1"></td>
              <td id="type1">&nbsp;</td>
              <td id="type1"></td>
              <td id="type1"></td>
            </tr>
          </tbody>
        </table>
        </div>
    </td>
  </tr>
</table>


<div style="margin-bottom:40px;"></div>



