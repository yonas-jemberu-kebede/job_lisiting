<x-product>

    <div class="rounded-lg shadow-md overflow-hidden hover:shadow-lg-hover bg-white transition duration-300 p-4 group cursor-pointer">  <div class="card-header"> 
         <p class="text-xl font-bold text-gray-800">{{$job->title}}</p>
    </div>
    <div class="card-body hidden group-hover:block"> 
         <p class="text-gray-600 text-sm">
        {{$job->salary}}
         </p></div>
      <div class="flex justify-end">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400" form="form-todelete">Delete</button>
        <a href="/jobs/{{$job->id}}/edit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full ml-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-400">Edit</a>
        <a href="/jobs/show" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full ml-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-200">cancel</a>
      </div>
    </div>
  </div>
  <form class="hidden" id="form-todelete" method="POST" action="/jobs/{{$job->id}}">
     @method('DELETE')
     @csrf
  </form>
  
</x-product>