<?php
include "Connict.php";
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:AdmenPage.php");
    exit(); 
}
$userId = $_SESSION['user_id'];
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
     <div class="w-[30%] h-full bg-linear to-white from-green-950/75 flex flex-col gap-6 pt-6">
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
           <a href="َAbouta.php"><h1 class="font-bold text-2xl">درباره</h1></a>
        </div>
       
     </div>
      <!-- div 1 -->
       <div dir="rtl" class=" h-full flex w-[100%] flex-col bg-green-950/80">
            <div  class="w-full h-20 shadow-md font-bold shadow-gray-600 flex space-x-7 justify-start items-center text-white px-4">
                <a href="home.php" class="ml-6">صفحه اصلی</a>
                <a href="Dashbord.php">داشبورد</a>
                <a href="Abouta.php">درباره</a>
                <a href="logout.php">خروج</a>
            </div>
            <div class="h-full w-full flex justify-center items-center flex-col gap-6">
    <div class="h-[60vh] w-[70%]  text-center font-bold text-xl  rounded-md bg-gradient-to-l flex-col gap-6 from-green-950/80 to-white/40 text-white flex justify-center items-center border py-3">
        <h1 class="text-3xl">در باره ما</h1>
        <p class="w-[70%]">این بخش مدریت رستورانت است شما میتوانید غذا های  مد نظر خود را از این بخش اضافه کنید.</p>
   </div>
    </div>
        </div>
    </div>
</body>
</html>