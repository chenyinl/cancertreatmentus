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
<h2>感抗癌藥比較</h2>
<div class="special">抗癌藥比較</div>
<table border>
    <tr>
    <th>薬名</th>
    <th>Allesgen</th>
    <th>Tagrisso (Cycares) 美國抗癌藥</th>
    <th>Ibrance (Palbociclib) 美國抗癌藥</th>
    <th>Keytruda (Pembrolizumab) 美國抗癌藥</th>
    <th>Vectibix (Panitumumab) 美國抗癌藥</th>
    </tr>
    <tr>
        <td>單位</td>
        <td>每瓶60粒</td>
        <td>30粒</td>
        <td>21粒</td>
        <td>100mg</td>
        <td>400mg</td>
    </tr>
    <tr>
        <td>價格</td>
        <td>$1800/瓶</td>
        <td>$14500~$15000/瓶</td>
        <td>$12615/瓶</td>
        <td>$12500/瓶</td>
        <td>$7441/瓶</td>
    </tr>
    <tr>
        <td>用途及成功率</td>
        <td>一般的癌症 成功率: 52%</td>
        <td>抗治療肺癌 成功率: ≤10%</td>
        <td>治療乳癌 成功率: 15%</td>
        <td>抗治療肺癌 成功率: 1%</td>
        <td>治療腸癌, 腸胃癌 成功率: 增加5~6個月存活率</td>
    </tr>
    <tr>
        <td>製造商</td>
        <td>Oeyama-moto</td>
        <td>Astra-Zeneca</td>
        <td>Pfizer</td>
        <td>Merk</td>
        <td>Amgen</td>
    </tr>
    <tr>
        <td>副作用</td>
        <td>1. 無副作用<br/>2. 利用病人本身的白血球來製造干擾素: 2,6,8及癌細胞死亡酶T. N. F. <br/>3. 有1%的病人出現微面紅, 心悸</td>
        <td>1. 傷害肝, 腎, 骨髓, 功能降低 <br/>2.中度及嚴重貧血, 使白血球及血小板數量降低</td>
        <td>1. 傷害肝, 腎, 骨髓, 功能降低 <br/>2.中度及嚴重貧血, 使白血球及血小板數量降低</td>
        <td>1. 傷害肝, 腎, 骨髓, 功能降低 <br/>2.中度及嚴重貧血, 使白血球及血小板數量降低 <br/>3. 呼吸道肺炎 3% <br/>4. 甲狀腺炎 8.5% <br/>5. 肺炎1% <br/>6. 腎炎 <br/>7. 水腫 20%</td>
        <td>1. 皮膚炎 90% <br/>2. 肺炎 10% <br/>3. 肺血栓症 7% <br/>4. 腸胃炎 ≥20% <br/>5. 眼角膜炎</td>
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
