<!DOCTYPE html>
<html>
<head>
<title>Index</title>

    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=10" />


    <link rel="stylesheet" href="css/style_1.css" type="text/css">

    <script src="jquery/jquery.js" ></script>
    <script src="custom_plugin_1.js"></script>
    <script src="construct_1.js"></script>
    <script src="getdata.js"></script>
    <script src="calculate_1_v2.js"></script>

</head>
<body>



<div id="head_box">
    <h1>สงขลาเจริญการช่าง</h1>
    <p>Bill Sharp Ver. nightly-3</p>
</div>

<div id="choose">

<div id="choose_box">

<label for="select_headername">เลือกหัวข้อ : </label>
<select id="select_headername">
    <option>- โปรดเลือกหัวข้อ -</option>
    <option class="case_1">ใบแจ้งหนี้/ไม่ใช่ใบกำกับภาษี</option>
    <option class="case_2">ใบเสนอราคา/รายการซ่อม</option>
    <option class="case_3">ใบกำกับภาษี/ใบเสร็จรับเงิน</option>
</select>

</div>


<div id="radio_box">
    <input type="radio" name="vat" value="Normal" class="vat_1"> คำนวณ VAT ธรรมดา<br>
    <input type="radio" name="vat" value="Reverse" class="vat_2"> คำนวณ VAT แบบกลับค่า<br>
    <input type="radio" name="vat" value="nonVat" class="vat_3"> ไม่คำนวณ VAT

</div>

</div>
<div id="status_box">
    STATUS : <span id="status_1"></span>
</div>

<br><br>
    <div id="center_box">
<table border="1" id="table1">
    <tbody id="data_body">
        <tr>
            <th>จำนวน</th>
            <th>รายการ</th>
            <th>ราคาต่อหน่วย</th>
            <th>จำนวนเงิน</th>
        </tr>

        <tr>
            <td><input type="text"  class="0" id="unit" ></td>
            <td><input type="text"  class="0" id="name" style="width:400px"></td>
            <td><input type="text"  class="0" id="ppu"></td>
            <td><input type="text"  class="0" id="price"></td>
        </tr>

    </tbody>

    <tr>
        <td class="empty_white_cell"></td>
        <td class="empty_white_cell"></td>
        <td class="attri_1">รวมราคาทั้งหมด</td>
        <td class = "result_td"><input type="text" id="all_price"></td>
    </tr>

    <tr>
        <td class="empty_white_cell"></td>
        <td class="empty_white_cell"></td>
        <td class="attri_1">จำนวนภาษีมูลค่าเพิ่ม 7%</td>
        <td class = "result_td"><input type="text" id="vat_price"></td>
    </tr>

    <tr>
        <td class="empty_white_cell"></td>
        <td class="empty_white_cell"></td>
        <td class="attri_1">จำนวนเงินรวมทั้งสิ้น</td>
        <td class = "result_td"><input type="text" id="last_price"></td>
    </tr>
</table>

<br>
    </div>
<div id="button_box">
<button id="CreateRowButton">เพิ่มแถว</button>
<button id="DelRowButton">ลบแถว</button>
<button id="reading">ส่งข้อมูล</button>
</div>
<br><br>
<div id="show_result">
<span id="result"></span>
</div>



</body>
</html>
