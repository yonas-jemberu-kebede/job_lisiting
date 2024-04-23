<x-product>
    <section class="hero min-h-screen bg-cover bg-center" style="background-image: url('path/to/hero-image.jpg')">
        <div class="container mx-auto px-4 py-16 flex flex-col items-center justify-center space-y-8 text-center">
          <h1 class="text-4xl font-bold text-white">Find Your Dream Job</h1>
          <p class="text-xl text-gray-200">Thousands of exciting opportunities waiting for you.</p>
          <div class="flex flex-wrap justify-center gap-4">
            <a href="{{route('jobs.show')}}" class="inline-flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              
              <button >Browse Jobs</button>
            </a>
            <a href="{{route('jobs.create')}}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.66l4.14 4.14a1 1 0 11-1.41 1.41L12 7.97l-4.14 4.14a1 1 0 01-1.41-1.41L12 6.66z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v-2m0 0l4-4m0 0l-4-4m4 4v2" />
              </svg>
              <button>Post a Job</button>
            </a>
          </div>
          <form class="flex flex-wrap justify-center w-full mt-4">
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" placeholder="Job Title or Keyword">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-2l10.5-10.5a1 1 0 0 0-1.414-1.414L12 16.586l-4.586-4.58

</x-product>