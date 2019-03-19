
  <c:forEach items="${getUserTitles}" var="userTitlesSerials" > 
    <tr  class="rowOdd" id="${userTitlesSerials.gGroupSERIAL_NO}" data-row-id="${userTitlesSerials.gGroupSERIAL_NO}">
    <td width="428">${userTitlesSerials.gGroupmenuTilte}</td>
    <td width="63">&nbsp;
    <input   value="${userTitlesSerials.gGroupSERIAL_NO}"  type="checkbox" class="sub_chk" data-id="${userTitlesSerials.gGroupSERIAL_NO}" name="disableCk" />
    </td>
    </tr>
   </c:forEach>
    