<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[st_id])
	{
		$SQL="SELECT * FROM student WHERE st_id = '$_REQUEST[st_id]'";
		$rs=mysql_query($SQL) or die(mysql_error());
		$data=mysql_fetch_assoc($rs);
	}
?>
<style type="text/css">
<!--
.style1 {color: #CC0000}
-->
</style>
<form action="" name=""  method="post">
<table width="90%" border="0" align="center">
<tr>
    	<td>Donation</td>
	</tr>
<tr>
    <td width="90%">
      <p align="justify"><strong><em><u><a href="contact.php">DONATE  MONEY:</a></u> &nbsp;&nbsp; Donate generously to Bhartiya Kayastha. Our efforts are to rise clean money continues unabated and we need your help to expand our donor network. We are all in this together. This is our battle and ours mission to help poor Kayasthas to grow up. In the village area most of our Community lives like a beggar. They have no land, no other resources and not sufficient educated to get a job. We can help poor students of society by providing books, School?s fees and other reasonable way to develop them. 
        Our motto is to help old aged person who has no means and support of Family, orphans to grow in safe hands, treatment of acute ailments of poor persons and many more as required. Make a charitable contribution to Bhartiya Kayastha.org. We shall be glad to receive your financial donations, Every Rs you donate, BKS can provide help to needy person of society. <a href="contact.php">Click here...</a>
      </em></strong><strong></strong></p>
      <p align="justify"><span class="style1">Donations may be donated directly in our Bank account.&nbsp;You can donate using our account as detail given below:</span>
        <br>
    <li>Account Name: &nbsp;&nbsp; Bhartiya Kayastha.org
<br><li>Account No: 
<br><li>Name of Banker:
<br><li>Branch Name:
<br><li>Branch Code:
<br><li>IFS Code :</p>
    
    <p align="justify"><span class="style1">By Mail:&nbsp; Make your check payable to Bhartiya Kayastha Ranchi and mail to:
      Bhartiya Kayastha.org 
      MBB Sinha
      Road No. 6, Kishoreganj,
      Harmu Road, Ranchi-834001
      Mob: 09431176739/ 09934582611 </span> </p>
    <p align="justify">E. mail ID: <li>info@bhartiyakayastha.com<li>mbbsinha@gmail.com
    
	<p align="justify"><a href="contact.php">IMPORTANT: Donor will get Annual audited Balance sheet by e. mail at the 
end of Financial year within 45 days.<br>
    </a><br>
    </tr>

<tr>
    <td width="90%"><p align="justify"><strong><em><u><a href="contact.php">DONATE YOUR BOOK:</a></u> &nbsp;&nbsp;Donating your used book is an easy way to make a contribution to KAYASTHAS.The process is easy.All of you have to do to pick up the phone. Go to contact us and call or write message to us. Our Social activist will contact you. You may parcel books on our mailing address. Please donate only readable course text book, Novels of renowned writers, Topmost Literature, stories, fictions etc. 
<a href="contact.php">Click here...</a>
</em></strong><strong></strong></p>
      <p align="justify">&nbsp;</p></td>
</tr>

<tr>
    <td width="90%"><p align="justify"><strong><em><u><a href="contact.php"><h3>Donate Your Movable/Imovable Properties:</h3></a></u> &nbsp;&nbsp;
</em></strong><strong></strong></p>	</td>
</tr>
</table>
<?php include_once("includes/footer.php"); ?>