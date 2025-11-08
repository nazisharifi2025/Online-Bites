<?php
include "Connict.php";
$q = "SELECT f.id,f.FoodName,f.Description,f.price,f.CatagoriId,c.id,c.CatagoriName FROM foods as f inner join catagori as c on f.catagoriId = c.id";
$result = $connict->query($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
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
            <a href=""><h1 class="font-bold text-2xl">سفارشات </h1></a>
        </div>
        <div class="py-2 text-white bg-black/25 flex justify-center items-center ">
           <a href="Abouta.php"><h1 class="font-bold text-2xl">درباره</h1></a>
        </div>
       
     </div>
      <!-- div 1 -->
       <div dir="rtl" class=" h-full flex w-[100%] flex-col bg-green-950/80">
            <div  class="w-full h-20 shadow-md font-bold shadow-gray-600 flex space-x-7 justify-start items-center text-white px-4">
                <a href="home.php">صفحه اصلی</a>
                <a href="Dashbord.php">داشبورد</a>
                <a href="Abouta.php">درباره</a>
                <a href="home.php">خروج</a>
            </div>
            <div class="h-full w-full flex justify-center items-center flex-col gap-6">
    <div class="h-[80vh] w-[98%]  text-center font-bold text-xl p-2 rounded-md bg-gradient-to-l flex-col items-end gap-6 from-green-950/80 to-white/40 text-white flex justify-center border py-3">
        <h1 class="font-bold text-3xl mx-auto">مینوی غذاها</h1>
        <button class="px-3 py-2 bg-green-950/80 text-white rounded-md w-fit "><a href="InsertFood.php" >اضافه کردن غذا جدید</a></button>
        <table class="w-full p-3">
            <tr class="border-b border-green-950 px-2">
            <th class="py-3 text-start">نام غذا</th>
            <th class="py-3 text-start">دسته بندی</th>
            <th class="py-3 text-start">توصیف</th>
            <th class="py-3 text-start">قیمت</th>
            <th class="py-3 text-start">عملیات</th>
            </tr>
            <?php while($row=$result->fetch_assoc()){ ?>
                <tr class="py-4 border-b border-green-950">
                    <td class="p-2 text-start"><?php echo $row["FoodName"] ?></td>
                    <td class="p-2 text-start"><?php echo $row["CatagoriName"] ?></td>
                    <td class="p-2 text-start"><?php echo $row["Description"] ?></td>
                    <td class="p-2 text-start"><?php echo $row["price"] ?></td>
                    <td class="p-2 text-start" ><a href="Delete.php?id=<?php echo $row['id']; ?>" class="px-5 py-1 rounded-md bg-green-950/80">حذف</a></td>
                </tr>
                <?php } ?>
        </table>
   </div>
    </div>
        </div>
    </div>
</body>
</html>