<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
    <?php
    echo "
    <form method='post' action='Loginformconnector.php'>
    <div class='flex items-center justify-center h-screen'>
        <div class='bg-white p-10 rounded-lg shadow-lg w-96 h-[400px] text-center flex flex-col justify-center'>
        <h1 class='text-4xl text-center text-gray-800 font-bold'>Log<span class='text-4xl text-center text-gray-800 font-bold text-orange-500'>in</span></h1>
        <div class='mb-6 text-left'>

        <label id='user' class='block text-red-400 mb-1'>Username:</label>
        <input type='text' name='user' required class='w-full p-3 border border-gray-300 rounded mt-1 hover:bg-gray-200' placeholder='Enter your username'>
        </div>

        <div class='mb-6 text-left'>
        <label id='user' class='block text-red-400 mb-1'>Password:</label>
        <input type='password' name='password' required class='w-full p-3 border border-gray-300 rounded mt-1 hover:bg-gray-200' placeholder='Enter your Password'>
        </div>
       
            <button type='submit' class='w-full bg-orange-500 text-white py-3 rounded hover:bg-orange-400'>Login</button>
    </div>
</div>
</form>";

?>
</body>
</html>