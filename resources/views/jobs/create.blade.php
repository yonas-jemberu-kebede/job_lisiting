<x-product>
    <form method="POST"class="flex flex-col space-y-4 w-full max-w-sm mx-auto mt-8"  action="{{route('jobs.store')}}">
          @csrf
          @method('POST')
            <div class="flex flex-col">
              <label for="title" class="text-sm font-medium text-gray-700">Job Title</label>
              <input type="text" id="title" name="title" class="px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 bg-black
              " placeholder="Job Title" required>
            </div>
            <div class="flex flex-col">
              <label for="salary" class="text-sm font-medium text-gray-700">salary</label>
              <input type="text" id="salary" name="salary" class="px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 bg-black" placeholder="salary" required>
            </div>
            <div class="flex justify-between">
              <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">create</button>
              <a  href="/jobs" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                
                  Cancel
              
              </a>
            </div>
      </form>
      
</x-product>