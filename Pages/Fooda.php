<?php
include "Connict.php";

$numberof_student_parpage = 3;
$start = 0;
$page = 1;
// اگر شماره صفحه از URL آمده باشد، $start را محاسبه کن
if(isset($_GET["page_nr"])){
    $nr_page = $_GET["page_nr"] - 1;
    $page = $_GET["page_nr"];
    $start = $nr_page * $numberof_student_parpage; 
}

// حالا کوئری اصلی را با $start صحیح اجرا کن
$q = "SELECT f.id as FoodId, f.FoodName, f.Description, f.price, f.CatagoriId, f.img, f.created_at,
      c.id, c.CatagoriName
      FROM foods as f
      INNER JOIN catagori as c ON f.catagoriId = c.id
      ORDER BY f.created_at DESC
      LIMIT $start, $numberof_student_parpage";

$result = $connict->query($q);

// برای pagination تعداد کل ردیف‌ها را محاسبه کن
$newQuery = "SELECT * FROM foods";
$resutpage = $connict->query($newQuery);
$numb_row = $resutpage->num_rows;
$pages = ceil($numb_row / $numberof_student_parpage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="../src/output.css"> -->
</head>
<body>
    <div class="w-full h-screen flex ">
     <div class="w-[30%] h-full bg-green-950/75 flex flex-col gap-6 pt-6">
        <h1 class="text-3xl font-bold text-center p-4 text-white">رستورانت آنلاین</h1>
        <div class="py-2 text-white bg-black/25 flex justify-center items-center ">
            <a href="Fooda.php"><h1 class="font-bold text-2xl">غذا ها</h1></a>
        </div>
        <div class="py-2 text-white bg-black/25 flex justify-center items-center ">
            <a href="Catagoria.php"><h1 class="font-bold text-2xl">دسته بندی ها</h1></a>
        </div>
        <div class="py-2 text-white bg-black/25 flex justify-center items-center ">
            <a href="Order.php"><h1 class="font-bold text-2xl">سفارشات </h1></a>
        </div>
        <div class="py-2 text-white bg-black/25 flex justify-center items-center ">
           <a href="Abouta.php"><h1 class="font-bold text-2xl">درباره</h1></a>
        </div>
       
     </div>
      <!-- div 1 -->
       <div dir="rtl" class=" h-full flex w-[100%] flex-col bg-green-950/80">
            <div  class="w-full h-20 shadow-md font-bold shadow-gray-600 flex space-x-7 justify-start items-center text-white px-4">
                <a href="home.php" class="ml-6">صفحه اصلی</a>
                <a href="Dashbord.php">داشبورد</a>
                <a href="Abouta.php">درباره</a>
                <a href="home.php">خروج</a>
            </div>
            <div class="h-full w-full flex justify-center items-center flex-col gap-6">
    <div class="h-[90vh] w-[98%]  text-center  text-xl p-2 rounded-md bg-gradient-to-l flex-col items-end gap-4 from-green-950/80 to-white/40 text-white flex justify-center border py-3">
        <h1 class="font-bold text-3xl mx-auto">مینوی غذاها</h1>
        <button class="px-3 py-2 bg-green-950/80 text-white rounded-md w-fit "><a href="InsertFood.php" >اضافه کردن غذا جدید</a></button>
        <table class="w-full p-3">
            <tr class="border-b border-green-950 px-2">
            <th class="py-3 text-start">نام غذا</th>
            <th class="py-3 text-start">دسته بندی</th>
            <th class="py-3 text-start">توصیف</th>
            <th class="py-3 text-start">قیمت</th>
            <th class="py-3 text-start">عملیات</th>
            <th class="py-3 text-start">عملیات</th>
            </tr>
            <?php while($row=$result->fetch_assoc()){ ?>
                <tr class="py-4 border-b border-green-950">
                    <td class="p-2 text-start"><?php echo $row["FoodName"] ?></td>
                    <td class="p-2 text-start"><?php echo $row["CatagoriName"] ?></td>
                    <td class="p-2 text-start"><?php echo $row["Description"] ?></td>
                    <td class="p-2 text-start"><?php echo $row["price"] ?></td>
                    <td class="p-2 text-start" ><a href="Delete.php?id=<?php echo $row['FoodId']; ?>" class="px-3 py-1 rounded-md bg-green-950/80">حذف</a></td>
                    <td class="p-2 text-start" ><a href="update.php?id=<?php echo $row['FoodId']; ?>" class="px-2 py-1 rounded-md bg-green-950/80">ویرایش</a></td>
                </tr>
                <?php } ?>
        </table>
            <div class="w-full text-center flex justify-center items-center font-black text-3xl">صفحه <?php echo $page ?>از  <?php echo $pages ?> هستید</div>
             <div class="flex justify-between items-center w-full">
                <div>
                <a href="?page_nr=1" class="px-7 py-3 rounded-full shadow-md shadow-gray-500 text-white bg-green-950/80">اولین</a>
                </div> 
                <div class="flex gap-4 items-center bg-green-950/80 p-2 rounded-full text-green-950/80">
                  <?php 
// تعیین صفحه جاری با مقدار پیش‌فرض 1
$page_nr = isset($_GET['page_nr']) ? (int)$_GET['page_nr'] : 1;
?>

<?php if($page_nr > 1){ ?>
    <a href="?page_nr=<?php echo $page_nr - 1 ?>"><i class="fa-solid fa-chevron-right bg-white p-2 rounded-r-full shadow-md shadow-gray-500"></i></a>
<?php } else { ?>
    <i class="fa-solid fa-chevron-right bg-white p-2 rounded-r-full shadow-md shadow-gray-500"></i>
<?php } ?>

<?php for($i = 1 ; $i <= $pages; $i++){ ?>               
    <a href="?page_nr=<?php echo $i ?>"><span class="py-1 rounded-md bg-white shadow-md shadow-gray-500 px-3"><?php echo $i ?></span></a>
<?php } ?>

<?php if($page_nr < $pages){ ?>
    <a href="?page_nr=<?php echo $page_nr + 1 ?>"><i class="fa-solid fa-chevron-left bg-white p-2 rounded-l-full shadow-md shadow-gray-500"></i></a>
<?php } else { ?>
    <i class="fa-solid fa-chevron-left bg-white p-2 rounded-l-full shadow-md shadow-gray-500"></i>
<?php } ?>

                </div>
                <div>
                <a href="?page_nr=<?php echo $pages ?>" class="px-7 py-3 rounded-full shadow-md shadow-gray-500 text-white bg-green-950/80">آخرین</a>
             </div> 
             </div>
   </div>
    </div>
        </div>
    </div>
</body>
</html>