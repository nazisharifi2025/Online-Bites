<?php
include "Connict.php";
$Users = "SELECT * FROM customer";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Password = $_POST["password"];
    $q = "INSERT INTO customer(name,lastName,email)VALUES('$Name','$Email','$Password')";
     if( $connict->query($q)){
      echo "<script>alert('خوش آمدی " . htmlspecialchars($Name) . "');</script>";
     }else{
        echo "Error: " . $q . "<br>" . $connict->error;
     }
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <script src="nav.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex relative justify-between px-4 items-center w-full h-20 text-white bg-green-950/80">
        <h1 class="text-2xl font-bold">رستورانت آنلاین</h1>
        <ul class="flex space-x-6 justify-center  items-center font-bold text-white">
            <li><a href="home.php">صفحه اصلی</a></li>
            <li><a href="Catagori.php">دسته بندی ها </a></li>
            <li><a href="foods.php">غذا ها</a></li>
            <li><a href="About.php">درباره ما</a></li>
            <li><a href="contuct.php">تماس با ما </a></li>
            <li><a href="AdmenPage.php">بخش مدریت</a></li>
            <li id="a">عضویت</li>
        </ul>        
        <!-- one dev added -->
              <div id="open" class="h-screen w-full  justify-center hidden absolute top-0 right-0 items-start py-12 bg-black/45">
            <i id="times" class="fas fa-times text-4xl absolute top-5 right-6"></i>
                <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" class="w-[700px] h-[60vh] text-gray-500 bg-white gap-4 flex flex-col justify-center   p-3 shadow-lg shadow-gray-400">
        <h1 class="text-2xl font-bold">عضویت در رستورانت</h1>
        <div>
            <label for="Email" class="font-bold">نام :</label>
            <input type="text" name="Name" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <div>
            <label for="Email" class="font-bold">ایمیل:</label>
            <input type="text" name="Email" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <div class="w-full gap-3">
             <div>
            <label for="Email" class="font-bold">کلمه عبور:</label>
            <input type="text" name="password" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        </div>
        <button class=" bg-cyan-700 text-white py-3 px-6 rounded-md mx-auto w-fit">ثبت نام</button>
       </form>
        </div>
    </div>
</body>
</html>