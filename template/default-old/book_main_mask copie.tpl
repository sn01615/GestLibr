<center>{NAV}</center>
<form name=bookForm method=POST action='{BOOKS_FORM}'>

<table width='100%'>
<tr>
  <td valign='top'>
    <table>
		  <tr><td>{BOOKS_ID}: </td><td><input type='text' size='5' name='id' value="{ID_V}"></td></tr>
		  <tr><td>{BOOKS_AUTHOR}: </td><td><input type='text' size='40' name='author' value="{AUTHOR_V}"></td></tr>
		  <tr><td>{BOOKS_TITLE}: </td><td><textarea cols='40' rows='2' name='title'>{TITLE_V}</textarea></td></tr>
		  <tr><td>{BOOKS_DESCRIPTION}: </td><td><textarea cols='40' rows='6' name='description'>{DESCRIPTION_V}</textarea></td></tr>
		  <tr><td>{BOOKS_PRICE}: </td><td><input type='text' size='4' name='price' value="{PRICE_V}"> �
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type='checkbox' name='internet' value='1' {INTERNET_V} id='checkbox_on_internet'/><label for='checkbox_on_internet'> {BOOKS_ON_INTERNET}</label>{INTERNET_SEARCH}</td></tr>
		  <tr><td>{BOOKS_QUANTITY}: </td><td><input type='text' size='3' name='quantity' value="{QUANTITY_V}">{QUANTITY_NOT_NULL}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      {BOOKS_LOCATION}: <input type='text' size='2' name='location' value="{LOCATION_V}" onChange="javascript:this.value=this.value.toUpperCase();">
      </td></tr>
    </table>
  </td>
  <td valign='top'>
    <table>
		  <tr><td>{BOOKS_ISBN}: </td><td><input type='text' size='15' name='isbn' value="{ISBN_V}"></td></tr>
		  <tr><td>{BOOKS_NOTES}: </td><td><textarea cols='25' rows='2' name='notes'>{NOTES_V}</textarea></td></tr>
		  <tr><td>{BOOKS_MODIFYDATE} </td><td>{MODIFYDATE_V}</td></tr>
		  <tr><td>{BOOKS_CATEGORY}: </td><td>{CATEGORY_V}</td></tr>
		  <tr><td>{BOOKS_IN_CATALOG} </td><td>{IN_CATALOG_V}</td></tr>
    </table>
  </td>
</tr>
</table>

<input type=hidden name=sub value='ok'>
<input type=hidden name=opt1 value='OPT1_V'>
<input type=hidden name=opt2 value='OPT2_V'>
<input type=submit value='{BOOKS_SUBMIT}'>
</form>
 <script language="JavaScript">
<!--
document.bookForm.author.focus()
// -->
</script>
