<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
          <a href="#" class="text-white font-bold text-xl">KurazTech</a>
      
          <ul class="flex space-x-4">
            
            <li><a href="/jobs" class="text-white hover:text-gray-400 px-3 py-2 rounded">Jobs</a></li>
            
          </ul>
        </div>
      </nav>
      <section class="hero min-h-screen bg-cover bg-center" style="background-image: url('path/to/your/hero.jpg')">
        <div class="container mx-auto px-4 py-24 text-center">
          <h1 class="text-4xl font-bold text-white">Welcome to {{$slot}}</h1>
         
        </div>
        
      </section>
</body>
</html>