<?php
include("functions.php");
include( "reviewArray.php" );
printHeader();
?>
<body>
<div id="outer"><?php printMenu();?>
<?php printBanner();?>

<div id="main">
<div id="content_large">
<h2>Patients and Families Reviews 病患 家屬回應</h2>
<div class="special">Allesgen 可以治療任何癌症初期致末期轉移的病人。</div>
<script>
    function updateClass( className, update ){
        var trs = document.getElementsByClassName( className );
        for( i=0; i<trs.length; i++){
            trs[i].style.display = update;
        }
    }
    
    function showAllTr(){
        updateClass( "chinese", "" );
        updateClass( "english", "" );
    }
</script>
<input type="radio" name="reviewType" value="english"
    onChange="updateClass( 'chinese','none' );updateClass( 'english','' );"
> English | 
<input type="radio" name="reviewType" value="chinese"
    onChange="updateClass( 'english','none' );updateClass( 'chinese','' );"
> 中文 |
<input type="radio" name="reviewType" value="all" checked="checked"
    onChange="showAllTr();"
>All Languages / 中英文
<table border>
<tbody>
<tr>
    <th width="10%">Date<br/>日期</th><th width="10%">Name<br/>簡稱</th><th>Content<br/>内容</th>
</tr>
<?php foreach( $reviewArray as $r ):?>
<tr class="<?php echo $r["lang"]?>">
    <td valign="top"><?php echo $r["date"]?>
    </td>
    <td valign="top"><?php echo $r["author"]?>
    </td>
    <td><span class="reviewTitle"><?php echo $r["title"]?></span><br/>&nbsp;&nbsp;&nbsp;
    <?php echo str_replace("\n", "<br/>&nbsp;&nbsp;&nbsp;&nbsp;",$r["content"]);?>
    </td>
</tr>
<?php endforeach;?>

</tbody>
</table>
<!--
<div id="sidebar1">
<div class="form"></div>
<h3><img src="images/holistic.png" width="335" height="328" alt="holistic"></h3>
<h3>病患 家屬回應</h3>
</div>-->
</div>
<br class="clear" />
</div>
<div style="text-align:center;"> 
</div>
<?php printFooter();?>
</div>
    <?php printCopyright();?>
	<div style="margin: 1em 0 3em 0; text-align: center;"></div>
</body>
</html>
