<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup MySQL Database Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.3/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn {
            background-color: #3490dc;
            color: white;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 card w-full max-w-md mx-auto">
        <h1 class="text-2xl text-blue-800 font-semibold mb-6">Backup MySQL Database using PHP</h1>
        <h2 class="text-xl mb-4">Database Credential and Name</h2>
       <form method="POST" action="backup.php">
       <div class="mb-4">
            <label for="server" class="block text-sm font-bold mb-2">Server</label>
            <input type="text" id="server" name="server" placeholder="localhost" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="username" class="block text-sm font-bold mb-2">Username</label>
            <input type="text" id="username" name="username" placeholder="root" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-bold mb-2">Password</label>
            <input type="password" id="password" name="password" placeholder="Database password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="database" class="block text-sm font-bold mb-2">Database</label>
            <input type="text" id="dbname" name="database" placeholder="Database Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button class="btn hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Backup</button>
    </div>
       </form>
</body>
</html>
