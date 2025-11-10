<?php
    include "connict.php";
    $q = "SELECT * FROM foods order by created_at DESC";
    $result = $connict->query($q);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/input.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
</head>
<body dir="rtl">
    <?php include "Nahar.php" ?>
    <div class="h-[60vh] w-full bg-no-repeat bg-cover bg-center bg-[url(../images/Hero2.webp)]">
    <div class="h-full w-full flex flex-col gap-6 justify-center items-center text-green-950/80 bg-black/25">
        <h1 class="text-3xl font-bold">مواد غذایی  با کیفیت در درب شما</h1>
        <p class="font-bold text-xl">ما کیفت را تحویل میدهیم و سالهاست که این کار را  انجام میدهیم!</p>
    </div>
    <!-- hero endded -->
     <div class="h-fit w-[80%] grid grid-cols-3  my-12 mx-auto text-green-950/80 gap-6 items-center justify-center">
        <!-- کباب شروع -->
         <?php while($row=$result->fetch_assoc()){ ?>
            <div class="h-fit w-[330px] shadow-md shadow-gray-500 flex-col justify-center">
            <img src="image/<?php echo $row["img"] ?>" class="w-full h-[35vh]" alt="">
            <div class="flex justify-between items-center px-5 w-full">
                <h2  class="text-2xl px-3"><?php echo $row["FoodName"] ?></h2>
                <i class="fas fa-utensils text-2xl"></i>
            </div>
            <p class="p-3"><?php echo $row["Description"] ?></p>
            <button class="p-3 text-white bg-green-950/80 w-[80%] mx-4 shadow-md shadow-gray-500 hover:shdaow-sm my-3">سفاریش دهید</button>
        </div>
            <?php } ?>
     </div> 
 <!-- endded -->
  <div class=" w-full h-[40vh] bg-green-950/80 flex flex-col justify-center items-center ">
        <div class="w-full h-[80%] border-b border-white flex justify-between items-center px-12">
            <div class="flex flex-col gap-4">
            <h1 class="font-bold text-2xl text-white">شبکه های اجتاعی</h1>
            <div class="flex space-x-5">
                <button class="p-3 rounded-full bg-white text-green-950/80">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button class="p-3 rounded-full bg-white text-green-950/80">
                    <i class="fab fa-instagram"></i>
                </button>
                <button class="p-3 rounded-full bg-white text-green-950/80">
                    <i class="fab fa-twitter"></i>
                </button>
                <button class="p-3 rounded-full bg-white text-green-950/80">
                    <i class="fab fa-telegram-plane"></i>
                </button>
                <button class="p-3 rounded-full bg-white text-green-950/80">
                    <i class="fab fa-whatsapp"></i>
                </button>
                <button class="p-3 rounded-full bg-white text-green-950/80">
                    <i class="fab fa-linkedin-in"></i>
                </button>
                </div>
                <!-- div 1 endded -->
                 
            </div>
            <div class="flex flex-col text-white gap-4">
                    <h1 class="text-2xl " >درباره ما</h1>
                  <span class="text-xl">   مکان: جاغوری بازار حوتقول</span>
                  <span class="text-xl">تلفن: +93 795064649</span>
                  <span class="text-xl">سرویس:  همه روزه در طول ایام هفته</span>
                 </div>
        </div>
        <h1 class="text-xl text-center text-white my-2">با ما همراه باشید!</h1>
      </div>
</body>
</html>