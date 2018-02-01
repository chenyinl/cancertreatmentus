<?php
include("functionsstage.php");
include( "reviewArray.php" );
printHeader();
?>
<body>
<div id="outer"><?php printMenu();?>
<?php printBanner();?>

<div id="main">
<div id="content_large">
<h2>抗癌藥比較</h2>

<div class="special">抗癌藥比較</div><br/>
<table border cellpadding="2">
    <tr>
    <th>薬名</th>
    <th>Allesgen</th>
    <th>Tagrisso<br/> (Cycares)<br/>美國抗癌藥</th>
    <th>Ibrance<br/>(Palbociclib)<br/>美國抗癌藥</th>
    <th>Keytruda<br/>(Pembrolizumab)<br/>美國抗癌藥</th>
    <th>Vectibix<br/>(Panitumumab)<br/>美國抗癌藥</th>
    </tr>
    <tr>
        <th>單位</th>
        <td align='center'>每瓶60粒</td>
        <td align='center'>30粒</td>
        <td align='center'>21粒</td>
        <td align='center'>100mg</td>
        <td align='center'>400mg</td>
    </tr>
    <tr>
        <th>價格</th>
        <td align='center'>$1800/瓶</td>
        <td align='center'>$14500~$15000/瓶</td>
        <td align='center'>$12615/瓶</td>
        <td align='center'>$12500/瓶</td>
        <td align='center'>$7441/瓶</td>
    </tr>
    <tr>
        <th>用途及成功率</th>
        <td align='center'>一般的癌症<br/>成功率: <b>52%</b></td>
        <td align='center'>抗治療肺癌<br/>成功率:  <b>≤10%</b></td>
        <td align='center'>治療乳癌<br/>成功率:  <b>15%</b></td>
        <td align='center'>抗治療肺癌<br/>成功率:  <b>1%</b></td>
        <td align='center'>治療腸癌, 腸胃癌<br/>成功率: 增加5~6個月存活率</td>
    </tr>
    <tr>
        <th>製造商</th>
        <td align='center'>Oeyama-moto</td>
        <td align='center'>Astra-Zeneca</td>
        <td align='center'>Pfizer</td>
        <td align='center'>Merk</td>
        <td align='center'>Amgen</td>
    </tr>
    <tr>
        <th>副作用</th>
        <td valign="top">1. <b>無副作用</b><br/>2. 利用病人本身的白血球來製造干擾素: 2,6,8及癌細胞死亡酶T. N. F. <br/>3. 有1%的病人出現微面紅, 心悸</td>
        <td valign="top">1. 傷害肝, 腎, 骨髓, 功能降低 <br/>2.中度及嚴重貧血, 使白血球及血小板數量降低</td>
        <td valign="top">1. 傷害肝, 腎, 骨髓, 功能降低 <br/>2.中度及嚴重貧血, 使白血球及血小板數量降低</td>
        <td valign="top">1. 傷害肝, 腎, 骨髓, 功能降低 <br/>2.中度及嚴重貧血, 使白血球及血小板數量降低 <br/>3. 呼吸道肺炎 3% <br/>4. 甲狀腺炎 8.5% <br/>5. 肺炎1% <br/>6. 腎炎 <br/>7. 水腫 20%</td>
        <td valign="top">1. 皮膚炎 90% <br/>2. 肺炎 10% <br/>3. 肺血栓症 7% <br/>4. 腸胃炎 ≥20% <br/>5. 眼角膜炎</td>
    </tr>
</table>
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
