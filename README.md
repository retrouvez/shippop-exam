# shippop-exam

## PDF Exam 1

### เขียนโปรแกรมตามภาพตัวอย่างด้านล่างโดย
1. โปรแกรมสามารถ Input ได้ 3 อย่างคือ List , ค้นหา และ ประเภทการค้นหา
```bash
a. List คือตัวเลขอะไรก้ได้ที่กรอกต่อกันตามตัวอย่าง
b. Search คือ ตัวเลขที่ต้องการค้นหา อาจจะมีอยู่ใน list หรือไม่มีก้ได้
c. ประเภทการค้นหา สามารถเลือกได้ 3 อย่างคือ Linear Search, Binary Search, Bubble
Search
```
2. ผลลัพธ์แสดงผลเป็นรอบการทำงานของประเภทการค้นหาตามที่เลือก

```bash
<!doctype html>
<html>
<head>
<script>
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
	<form class="form-horizontal">
<div class="form-group">
 <label class="col-md-4 control-label" for="list">List</label>  
  <div class="col-md-4">
   <input type="text" id="list" name="list" class="form-control input-md" onKeyPress="isInputNumber(event)">
 </div>
</div>
 
<div class="form-group">
   <label class="col-md-4 control-label" for="search">Search</label>  
  <div class="col-md-4">
   <input id="search" name="search" type="search" class="form-control input-md" onKeyPress="isInputNumber(event)">
  </div>
</div>
<div class="form-group">
 <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
      <button id="submit" name="submit" class="btn btn-primary" onClick="searchBtn()">Search</button>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="radius">Search radius</label>
  <div class="col-md-4">
    <select id="search_opt" name="search_opt" class="form-control">
      <option value="1">Linear Search</option>
      <option value="2">Binary Search</option>
      <option value="3">Bubble Search</option>
    </select>
  </div>
</div>
 
<div id="result"></div>

<script>
var output = ""
function isInputNumber(evt) { 
	var ch = String.fromCharCode(evt.which);
 		if(!(/[0-9/,/ ]/.test(ch)))
  			evt.preventDefault();
}

function searchBtn(evt) {
	//evt.preventDefault();
	document.getElementById("result").innerHTML = ''
	output = "<p>"
	var list = document.getElementById("list").value
	var search = document.getElementById("search").value
	var opt = document.getElementById("search_opt").value
	var v = parseInt(opt)
	output += "List : [" + list + "]<br/>"
	output += "Search : " + search + "<br/>"
	output += "Method : " + getOptionName(v) + "<br/>"
	var result = null
	switch(v) {
		case 1:
			var result = linearSearch((list.split(",")), search)
			break;
		case 2:
			var result = binarySearch((list.split(",")), search)
			break;
		case 3:
			//What is bubble search
			break;
	}

	//if (result != null) {
		output += "</p>"
		var child = document.createElement('div');
		child.innerHTML = output;
		child = child.firstChild;
		document.getElementById("result").appendChild(child)
	//}
}

function getOptionName(opt) {

	switch (opt) {
		case 1:
			return "Linear Search"
		case 2:
			return "Binary Search"
		case 3:
			return "Bubble Search"
		default:
			return "Something wrong"
	}
}

function linearSearch(arr, search) {
  	for (var i=0; i < arr.length; i++) {
    	if (arr[i] == search) {
    		output += ("Round : " + (i + 1) + " ==> " + search + " = " + arr[i] + " found!!<br/>")
     	 	return i;
    	}
    	output += ("Round : " + (i + 1) + " ==> " + search + " != " + arr[i] + "<br/>")
  	}
  	output += search + " is not in the list<br>"
  	return null;
}

function binarySearch(arr, search) {
	var temp = arr.sort()
	console.log(temp)
	output += "sorting...<br>"
  	var l = 0;
  	var h = temp.length - 1;
  	var i = 0;
  	
  	while (l <= h) {
    	var m = Math.floor((l + h) / 2);
	    if (temp[m] == search) {
	    	output += ("Round : " + (i + 1) + " ==> " + search + " = " + temp[m] + " found!!<br/>")
	      	return m;
	    } else if (temp[m] < search) {
	      	l = m + 1;
	    } else {
	      	h = m - 1;
	    }
	    output += ("Round : " + (i + 1) + " ==> " + search + " != " + temp[m] + "<br/>")
  	}
  	output += search + " is not in the list<br>"
  	return null;
}
</script>
	</form>
	</body>
</html>
```
[File](https://github.com/retrouvez/shippop-exam/blob/master/answer-2/php-1.html)

## PDF Exam 2

### 1. (ทดสอบ Loop) จงเขียนโปรแกรมให้ แสดงดังภาพต่อไปนี้ (ใช้ภาษา PHP และวงกลมคือตัวอักษร o)

1.1
```bash
<?php
function print_pattern($num)
{
	for ($a = 0; $a < $num; $a++)
	{
		for($b = $num; $b > $a+1; $b-- )
		{
			echo "&nbsp;&nbsp;&nbsp;";
		}
		for($c = 0; $c <= $a; $c++ )
			{
			echo "o ";
			}
			echo "<br>";
	}
}
$num = 5;
print_pattern($num);
?>
```

1.2
```bash
<?php
function print_pattern($num)
{
	for ($a = 0; $a < $num; $a++)
		{
		for($b = $num; $b > $a+1; $b-- )
			{
			echo "&nbsp;";
			}
		for($c = 0; $c <= $a; $c++ )
		{
			echo "o ";
		}
		echo "<br>";
	}
}
$num = 5;
print_pattern($num);
?>
```

### 2. (ทดสอบความเข้าใจ if, else)

2.1 มีเงินเดือน 10,000 บาท เดือนนี้จะได้เงินเท่าไหร่ หากมีเงื่อนไขดังนี้
```bash
10,200
```

2.2 (ทดสอบ short if) จากข้อมูลที่ให้มาข้างล่าง Outpout คืออะไร

2.2.1
```bash
200
```

2.2.2
```bash
Average
```

### 3. (ทดสอบ foreach)

3.1 หากวนลูป echo เฉพาะ Value และใช้เงื่อนไขข้อ 2.1 โดยใช้ Value แทน Salary จะได้ค่าอะไรบ้าง
```bash
15000, 20000, 30000
```

3.2 (ทดสอบ Multidimensional array)

```bash
<?php
$marks =array(
"mohammad"=>array(
"physics"=>35,
"maths"=>30,
"chemistry"=>39
),
"qadir"=>array(
"physics"=>30,
"maths"=>32,
"chemistry"=>29
),
"zara"=>array(
"physics"=>31,
"maths"=>22,
"chemistry"=>39
)
);
  
echo $marks['mohammad']['physics'];
?>
```

3.2.1 Output 35 มาแสดง จะต้องเขียน Code อย่างไร (เขียนได้หลายวิธี)

```bash
<?php
$marks =array(
"mohammad"=>array(
"physics"=>35,
"maths"=>30,
"chemistry"=>39
),
"qadir"=>array(
"physics"=>30,
"maths"=>32,
"chemistry"=>29
),
"zara"=>array(
"physics"=>31,
"maths"=>22,
"chemistry"=>39
)
);

foreach($marks as $i) { 
	$a = array_values($i);
	foreach ($a as $b) {
		echo $b . " ";
	}
}
?>
```

### 4. (ทดาอบ html และ css) เขียน html และ css ดังภาพต่อไปนี้ (วางโครงสร้างให้ดีที่สุด)

```bash
<html>
<head>
<style>
.rectangle {
	height: 200px;
	width: 240px;
	background-color: #6495ed;
	margin: 0 0 0 10px;
	display: inline-block;
}
</style>
</head>
<body>
	<div class="rectangle"></div>
	<div class="rectangle"></div>
	<div class="rectangle"></div>
	<div class="rectangle"></div>
</body>
</html>
```

### 5. (ทดสอบการออกแบบฐานข้อมูลด้วย ER Diagram และเขียน sql) เครือบริษัท Master-programmer มีพนักงานทั้งหมด 400 คน มีตำแหน่งหลายตำแหน่งและมีสาขาอยู่ที่จังหวัดกรุงเทพ ระยอง เลย และปัตตานี

5.1. ออกแบบฐานข้อมูลให้เหมาะสมกับโจทย์ข้างต้นโดยแสดงในรูปแบบ ER Diagram
<img src="https://github.com/retrouvez/shippop-exam/blob/master/answer-2/php-5-diagram.jpg" width="500">

5.2 (ทดสอบ sql) ต้องการเพิ่มสาขาที่จังหวัด เชียงใหม่ เชียงราย และภูเก็ต
```bash
INSERT INTO BRANCH (BR_ID, BR_NAME, BR_PRV)
VALUE ('05', 'Chiang Mai', 'Chiang Mai'), ('06', 'Chiang Rai', 'Chiang Rai'), ('07', 'Phuket', 'Phuket');
```

5.3 (ทดสอบ sql) ต้องการลบตำแหน่ง sale
```bash
DELETE FROM Employee WHERE EMP_JOB='Sales';
```

5.4 (ทดสอบ sql) ต้องการแก้ไข สาขาปัตตานี เป็น นราธิวาส
```bash
UPDATE Branch
SET BR_NAME = 'Narathiwat'
WHERE BR_NAME = 'Pattani';
```

5.5 (ทดสอบ sql) ต้องการแสดงข้อมูลพนักงานบริษัท Master-programmer
ทั้งหมด 400 คน
```bash
SELECT * FROM Employee;
```

5.6 (ทดสอบ sql) ต้องการแสดงข้อมูลพนักงานบริษัท master-programmer ที่ อยู่ ในสาขา ระยอง และกรุงเทพ
```bash
SELECT * FROM Employee
WHERE BR_NAME = 'Rayong'
OR BR_NAME = 'Bangkok';
```

5.7 (ทดสอบ sql) ต้อองการแสดงข้อมูลพนักงานบริษัท master-programmer ที่ อยู่ ในสาขาเลย และมีตำแหน่งเป็น programmer
```bash
SELECT * FROM Employee
WHERE BR_NAME = 'Loei'
AND EMP_JOB = 'Programmer';
```

5.8 (ทดสอบ sql) ต้องการแสดงข้อมูลพนักงาน โดยมีข้อมูล สาขา และตำแหน่ง ของพนักงานแต่ละคน ในบริษัท master-programmer ทั้งหมด
```bash
SELECT EMP_FNAME, EMP_LNAME, EMP_JOB, BR_NAME FROM Employee;
```

### 6. ทำไมถึงอยากเป็นโปรแกรมเมอร์
```bash
เป็นอาชีพที่ฝันไว้ตั้งแต่วัยเด็ก
```

### 7. ถ้ามีปัญหาติดขัดในการเขียนโปรแกรม จะทำอย่างไร
```bash
หาข้อผิดพลาด และศึกษาหาข้อมูลจากแหล่งต่างๆเพิ่มเติมด้วยตัวเองทุกช่องทาง จนกว่าจะได้คำตอบที่ต้องการ รับผิดชอบหน้าที่ของตัวเองให้ดีที่สุด
```

### 8. อธิบายการทำงาน ในรูปแบบ MVC มาพอสังเขป 
```bash
เป็นสถาปัตย์ซอฟแวร์ที่แยกส่วน Model, View และ Control ออกจากกัน แต่ทั้ง 3 ตัวจะทำงานประสานกัน
```

### 9. อธิบายการทำงาน Git ยกตัวอย่าง GIT มา 3 เว็บ 
```bash
Git คือ Version Control ที่คอยเก็บรักษาไฟล์และคุมการเปลี่ยนแปลงที่เกิดขึ้นกับไฟล์ได้ / Github, GitLab, Azure DevOps
```

### 10 อธิบายการทำงาน Docker
```bash
Docker คือ Engine จำลองสภาพแวดล้อมเพื่อการ Run Service ที่ต้องการ
```

### 11 อธิบายการทำงานของ Composer
```bash
Composer เป็นเครื่องมือของ PHP ที่ใช้จัดการ Library ที่ต้องการใช้ใน Project โดยระบุใส่ composer.json
```

### 12 อธิบายการทำงานของ Prepros (Scss)
```bash
Prepros เป็นโปรแกรมที่ช่วย Compile SASS, LESS ฯลฯ โดยอัตโนมัติ
```

### 13 ในเวลาที่เราเรียนอยู่มหาลัย จะมีคนเก่งอยู ในห้อง มีทั้งหมดกี่คน
```bash
ทุกคนมีความเก่งในคนละด้าน ไม่มีใครที่ไม่เก่ง
```

### 14 เคยทำงาน Freelance มาก่อนหรือไม่ (ถ้ามี แนบไฟล์ หรือ เว็บงานที่เคยทำ)
```bash
เคยครับ แต่ส่วนมากเป็นงานสายอื่น งานเว็บไซต์ที่ทำตอน Freelance จะมี [SECCOM](https://www.seccom.co.th/), [Chapa](http://www.chapa.co.th/) ที่เหลือเป็นเว็บจากที่ทำงานประจำครับ
```

### 15 เคยใช้ Framework อะไรมาบ้างและบอกเหตุผลที่เลือกใช้ 
```bash
ยังไม่เคยใช้จริงจัง ตอนนี้กำลังอยู่ในช่วงศึกษา Bootstrap ครับ
```

### 16 Google Page speed คืออะไร เคยใช้หรือไม่
```bash
เคยใช้ครับ เป็นเว็บไซต์ที่ใช้วัดความเร็วในการโหลดหน้าเว็บไซต์ต่างๆ
```

### 17 การทำ On page Seo ทาอย่างไร
```basg
เป็นการทำให้เว็บไซต์ติดอันดับการค้นหาสูงๆ โดยมีหลายปัจจัยที่ส่งผล เช่น ความเร็วในการโหลดหน้าเว็บไซต์, ใช้ Tag Headline, Title Tag, Keyword ฯลฯ เป็นต้น
```
