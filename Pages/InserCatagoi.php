<?php
include "Connict.php";
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:AdmenPage.php");
    exit(); 
}
$userId = $_SESSION['user_id'];
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $Name = $_POST["Name"];
    $Des = $_POST["Des"];
    $IF=$connict->query("SELECT * FROM catagori WHERE catagoriName='$Name'");
    if($IF->num_rows > 0){
        echo "<script>alert('Sorry Already Exists')</script>";
    }
    else{
    $q = "INSERT INTO catagori(catagoriName,Discription)VALUES('$Name','$Des')";
    if($connict->query($q) === true){
        header("location: Catagoria.php");
    }
    else{
         header("location: InserCatagoi.php");
    }
}
}
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
                <a href="logout.php">خروج</a>
            </div>
            <div class="h-full w-full flex justify-center items-center flex-col gap-6">
                <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST" class="h-[60vh] w-[50%]  text-center items-center font-bold text-xl  bg-black/40 rounded-md  flex-col gap-6  text-white flex justify-center  py-3">
                    <h1 >اضافه کردن دسته بندی</h1>
                    <div class="w-[80%] flex flex-col items-start mx-auto">
                    <label for="">نام دسته بندی:</label>
                    <input type="text" name="Name" class="border-white bg-gradient-to-l w-full outline-0 from-green-950/80 to-white/40 border rounded-md py-2 px-5">
                    </div>
                    <div class="w-[80%] flex flex-col items-start mx-auto">
                    <label for="">توصیف:</label>
                    <input type="text" name="Des" class="border-white bg-gradient-to-l w-full outline-0 from-green-950/80 to-white/40 border rounded-md py-2 px-5">
                    </div>
                    <button class="border-white bg-gradient-to-l w-fit outline-0 from-green-950/80 to-white/40 border rounded-md py-2 px-9">ارسال</button>
                </form>
    </div>
        </div>
    </div>
</body>
</html>