<form action="confirm.php" method="GET">
<table width="100%" border="0" cellpadding="3" cellspacing="3">
	<tr>
    	<td colspan="2" align="center">
        	<h2>OTP CONFIRM</h2>
        </td>
        
    </tr>
    
    <tr><td width="35%" align="right">
        	OTP :
        </td>
        <td width="65%">
        	<input type="text" id="otp" name="otp" value=""/>
        </td>
    </tr>
     <tr>
    	<td align="right">
        	
        </td>
        <td>
        	<input type="submit" value="Submit" />
        </td>
    </tr>
</table>
<input type="hidden" name="requestId" value="<?php $requestId = isset($_GET["requestId"]) ? $_REQUEST["requestId"] : NULL; echo $requestId; ?>"/>

<input type="hidden" name="transId" value="<?php $transId = isset($_GET["transId"]) ? $_REQUEST["transId"] : NULL;echo $transId;?>"/>

<input type="hidden" name="access_key" value="<?php $access_key = isset($_GET["access_key"]) ? $_REQUEST["access_key"] : NULL;echo $access_key;?>"/>

<input type="hidden" name="amount" value="<?php $amount = isset($_GET["amount"]) ? $_REQUEST["amount"] : NULL;echo $amount;?>"/>

</form>