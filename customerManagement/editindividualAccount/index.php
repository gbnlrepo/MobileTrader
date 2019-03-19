
<script src="customerManagement/jlib/menulib.js"></script>
<script src="customerManagement/jlib/mempop.js"></script>
<script src="customerManagement/jlib/normarizr.js"></script>
<link type="text/css" href="customerManagement/jlib/pop.css" rel='stylesheet'>

<div id="body_general">
<div id="accounttile">Company Setup 
<span id="close"><img src="customerManagement/jlib/cancel_icon.png"  /></span>
</div>

<div id="fix_pabePanel">
<div class="menu-wrapper">
               <ul>
                  <li class="" title="Users and Groups- Tab"> <a href="javascript:void(0)" title="Users and Groups- Tab" class="actives"  id="d1" lang="af" xml:lang="af"> <span class="tab"> <span>&nbsp;&nbsp;&nbsp;&nbsp;General&nbsp;&nbsp;&nbsp;&nbsp;</span> </span> </a> </li>
              
                   <li class="" title="Users and Groups- Tab"> <a href="javascript:void(0)" title="Users and Groups- Tab" class="noneactives"  id="d3" lang="af" xml:lang="af"> <span class="tab"> <span>Background Information</span> </span> </a> </li>
                </ul>
              </div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>







<div  class="dialog"  id="d12" style="display:none">
<div id="indidual_background">
<div id="body_generals">

<div id="uppersq">
<table width="200" border="1" style="margin-left:30px;">
  <tr>
    <td valign="top"><table width="471" border="1">
  <tr>
    <td width="193"><div id="inputName">No of Clients:</div></td>
    <td width="262"><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Date of registration:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Location:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">No. of Branches:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">No. of Staffs:</div></td>
    <td><div id="formInputs">
      <input name="text" type="text" value="" />
    </div></td>
    </tr>
  <tr>
    <td><div id="perIndicator" style="text-align:left">Performance Indicator</div></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td><div id="inputName">Outstanding Porfolio:</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Portfolio at Risk (PAR) (%):</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Operating Cost Ration (%):</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">Dept Enquiry Ratio (%):</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
  <tr>
    <td><div id="inputName">operating Self Suficient (%):</div></td>
    <td><div id="formInputs"><input type="text" value="" /></div></td>
    </tr>
</table></td>
    <td valign="top">
    <table width="261" border="1" style="width:200px;">
  <tr>
    <td width="149"><div id="perIndicator" style="text-align:left">Other Lenders</div></td>
    <td width="96"><div id="perIndicator" style="text-align:left">Loan Balance</div></td>
  </tr>
  <tr>
    <td><div id="formInputsy"><input type="text" value="" /></div></td>
    <td><div id="formInputsy"><input type="text" value="" style="width:100px;"/></div></td>
    </tr>
  <tr>
    <td><div id="formInputsy"><input type="text" value="" /></div></td>
    <td><div id="formInputsy"><input type="text" value="" style="width:100px;"/></div></td>
    </tr>
  <tr>
    <td><div id="formInputsy"><input type="text" value="" /></div></td>
    <td><div id="formInputsy"><input type="text" value="" style="width:100px;"/></div></td>
    </tr>
  <tr>
    <td><div id="formInputsy"><input type="text" value="" /></div></td>
    <td><div id="formInputsy"><input type="text" value="" style="width:100px;"/></div></td>
    </tr>
</table></td>
  </tr>
</table>


</div>



</div>
</div>
</div> 



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



