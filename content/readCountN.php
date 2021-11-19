<? include $_SERVER['DOCUMENT_ROOT']."/admin/common/config.php"; ?>
<meta charset="utf-8">
<?
$no = $_GET['no'];
$searchSelect = $_GET['searchSelect'];
$searchText = $_GET['searchText'];
$cp = $_GET['cp'];
$select_query = "select * from mtNotice where no=$no";
$result01 = mysql_query( $select_query) or die(mysql_error());
$row = mysql_fetch_array($result01);
$readcount = $row['readCount']*1;

if($readcount==0){
	$readcount=1;
}else{
	$readcount = $readcount+1;
}
if($no){
$update_query = "update mtNotice set readCount='$readcount' where no=$no ";
mysql_query( $update_query) or die(mysql_error());
}
?>
<script>
location.href="/content/cs_view.html?no=<?=$no?>&cp=<?=$cp?>&searchSelect=<?=$searchSelect?>&searchText=<?=$searchText?>";
</script>