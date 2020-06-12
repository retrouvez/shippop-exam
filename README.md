# shippop-exam

## PDF 1

```bash
```
[File](https://www.google.com)

## PDF 2

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