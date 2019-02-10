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
<h2>抗癌比較</h2>

<div class="special">美國中,晚期抗癌藥和廖博士研發的 Allesgen 比較
<br/>Third & Terminal Stage of Anti-Cancer Drugs Comparison</div><br/>
<table border cellpadding="2">
    <tr>
    <th>名<br/>Name</th>
    <th class="secondCol">Allesgen<br/>(廖博士研發)</th>
    <th>Tagrisso<br/> (Cycares)<br/>泰瑞沙</th>
    <th>Ibrance<br/>(Palbociclib)<br/>帕博西尼</th>
    <th>Keytruda<br/>(Pembrolizumab)<br/>派姆單抗</th>
    <th>Vectibix<br/>(Panitumumab)<br/>維克替比注射劑</th>
    </tr>
    <tr>
        <th>單位<br/>Unit</th>
        <td align='center'>每60 粒/60 Capsules</td>
        <td align='center'>30 粒/30 Tab</td>
        <td align='center'>21 粒/21 Tab</td>
        <td align='center'>100mg</td>
        <td align='center'>400mg</td>
    </tr>
    <tr>
        <th>價格(美元)<br/>Price (US Dollars)</th>
        <td align='center'></td>
        <td align='center'>$18000/瓶/Bottle</td>
        <td align='center'>$11800/瓶/Bottle</td>
        <td align='center'>$12500/瓶/Bottle <br/>$150000/year</td>
        <td align='center'>$$8000/Bottle/Month<br/>$100000/Year
    <tr>
        <th>用途及成功率<br/>Diseases & CR</th>
        <td align='center'>任何癌症 
        <br/>成功率: 52% 腫瘤消失 
        <br/>37% 延長生命
<br/>Most types of cancers 
<br/>CR: 52%
<br/>PR:27%

37% Prolong life</td>
        <td align='center'>治療肺癌 <br/>成功率: ≤10%
<br/>Lung Cancer
CR: ≤10%</td>
        <td align='center'>治療乳癌 <br/>成功率: 42%延長生命
<br/>Breast Cancer 42% decrease disease progress</td>
        <td align='center'>治療肺癌 <br/>成功率: 1%
<br/>Lung Cancer CR: 1%</td>
        <td align='center'>治療腸癌, 腸胃癌 <br/>成功率: 增加 5~6 個月存活率
<br/>GI CancerIncrease 5~6 months survival time</td>
    </tr>
    <tr>
        <th>製造商<br/>Manufacture</th>
        <td align='center'>Oeyama-Moto (大山本)</td>
        <td align='center'>Astra-Zeneca (阿斯利康藥廠)</td>
        <td align='center'>Pfizer (輝瑞藥廠)</td>
        <td align='center'>Merck (默克藥廠)</td>
        <td align='center'>Amgen (安进藥廠)</td>
    </tr>
    <tr>
        <th>副作用及原理<br/>Side Effects & Actions</th>
        <td valign="top">1. <b><span class="fdaRed">無副作用</span></b>
        <br/>2. 利用病人本身的白血球來製造干擾素: 2,6,8及癌細胞死亡酶T. N. F. 
        <br/>3. 有1%的病人出現微面紅, 心悸
        <br/>1. <b><span class="fdaRed">No Side Effects</span></b>
        <br/>2. T.B. Cells to product interleukin 1,6,8 & T.N.F.
        <br/>3. 1% has hot flashes & aplpitation</td>
        <td valign="top">1. 傷害肝, 腎, 骨髓,功能降低
<br/>2. 中度及嚴重貧血,使白血球及血小板數量降低
<br/>1. Toxic to liver and kidney, and bone marrow
<br/>2. Mod. to severe Anemia, Leucopenia, lower platelets counts</td>
<td valign="top">1. 傷害肝, 腎, 骨
髓, 功能降低
<br/>2.中度及嚴重貧血, 使白血球及血小板數量降低
<br/>1. Toxic to liver, kidney, and bone marrow
<br/>2. Mod. to severe Anemia, Leucopenia, lower platelets counts</td>
<td valign="top">1. 副作用同左
<br/>2. 支氣管炎
<br/>3. 肺炎
<br/>4. 甲狀腺炎
<br/>5. 腎炎
<br/>6. 水腫
<br/>7. 肝炎
<br/>8. 皮膚炎
<br/>1. Same as left side
<br/>2. Bronchitis 3%
<br/>3. Pneuomonia 1%
<br/>4. Thyroiditis 8.5%
<br/>5. Nephritis
<br/>6. Edema 20%
<br/>7. Hepatitis 1.2%
Dermatitis 17%</td>
<td valign="top">1.各種皮膚炎
<br/>2. 肺炎
<br/>3. 肺受損
<br/>4. 血栓性静脈炎
<br/>5. 胃肠炎
<br/>6. 眼部葡萄膜炎
<br/>6. 眼部葡萄膜炎
<br/>1. All types Dermatitis 90%
<br/>2. Pneumonia 10%
<br/>3. Lung Injury
<br/>4. Thrombophlebitis 7%
<br/>5. Gastroenteritis ≥20%
<br/>6. Corneal infection (uveitis)
<br/></td>
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
