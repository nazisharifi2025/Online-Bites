<?php
include "connict.php";
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
    <div class="w-full h-screen flex  ">
     <div class="w-[30%] h-full bg-green-950/75 flex flex-col gap-6 pt-6">
        <h1 class="text-3xl font-bold text-center p-4 text-white">رستورانت آنلاین</h1>
        <div class="py-2 text-white bg-black/25 flex justify-center items-center ">
            <a href="Fooda.php"><h1 class="font-bold text-2xl">غذا ها</h1></a>
        </div>
        <div class="py-2 text-white bg-black/25 flex justify-center items-center ">
            <a href=""><h1 class="font-bold text-2xl">دسته بندی ها</h1></a>
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
            <div  class="w-full h-20 shadow-xl font-bold shadow-black-600 flex space-x-7 justify-start items-center text-white px-4">
                <a href="home.php">صفحه اصلی</a>
                <a href="Dashbord.php">داشبورد</a>
                <a href="Abouta.php">درباره</a>
                <a href="home.php">خروج</a>
            </div>
            <div class="h-full w-full flex justify-center items-center flex-col gap-6">
    <div class="h-16 w-[70%] bg-black/25 text-center font-bold text-xl relative text-white py-3">
           <?php
    if(isset($_GET['login'])){
  if($_GET["login"]=== "success"){
    echo "<h1 class='absolute top-2 left-60 text-white text-2xl '>ورود شما با موفقیت انجام شد</h1>";
  }
}
    ?>
    </div>
    <div class="bg-black/25 w-[70%] h-[60vh] flex flex-col justify-center gap-8 items-center p-12">
        <div class="h-14 rounded-md border w-[85%] border-white bg-gradient-to-l from-green-950/80 to-white/40 text-2xl  flex justify-center items-center text-white text-center">
           <a href="Fooda.php"><h1>غذا ها</h1></a> 
        </div>
        <div class="h-14 rounded-md border w-[85%] border-white bg-gradient-to-l from-green-950/80 to-white/40 text-2xl  flex justify-center items-center text-white text-center">
           <a href=""><h1>دسته بندی ها </h1></a> 
        </div>
        <div class="h-14 rounded-md border w-[85%] border-white bg-gradient-to-l from-green-950/80 to-white/40 text-2xl  flex justify-center items-center text-white text-center">
           <a href=""><h1>سفارشات</h1></a> 
        </div>
    </div>
</div>
        </div>
    </div>
</body>
</html>