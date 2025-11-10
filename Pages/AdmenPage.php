<?php
SESSION_start();
include "Connict.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
    if($connict->query($sql)){
         $result =  $connict->query($sql);
        while($row = $result->fetch_assoc()){
            $_SESSION['user_id'] = $row['id'];
        }
        header("Location: Dashbord.php?login=success");
    }else{
        echo "ایمیل یا رمز عبور اشتباه است";
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
</head>
<body dir="rtl">
      <div class="flex relative justify-between px-4 shadow-md shadow-black items-center w-full h-20 text-white bg-green-950/80">
        <h1 class="text-2xl font-bold">رستورانت آنلاین</h1>
        <ul class="flex space-x-6 justify-center  items-center font-bold text-white">
            <li><a href="home.php">صفحه اصلی</a></li>
        </ul>
</div>
    <!-- navbar endded -->
     <div class="w-full mx-auto h-[87vh] gap-5 bg-green-950/80 flex flex-col justify-center items-center">
       <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" class="w-[500px] h-[40vh] bg-white gap-4 flex flex-col justify-center   p-3 shadow-lg shadow-gray-400">
        <h1 class="text-2xl font-bold">ورود به بخش مدریت</h1>
        <div>
            <label for="Email" class="font-bold">ایمیل</label>
            <input type="email" name="email" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <div>
            <label for="Email" class="font-bold">رمز عبور</label>
            <input type="password" name="password" class="border-b w-full py-1 border-gray-500 outline-0">
        </div>
        <button type="submit" class=" bg-green-950/80 text-white py-3 px-4 w-full">ورود</button>
       </form>
     </div>
 <!-- endded -->
</body>
</html>