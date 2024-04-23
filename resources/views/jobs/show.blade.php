<x-product>
  @if (count($jobs) > 0)
  
  <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
    <h2 class="text-xl font-bold text-gray-800 col-span-full">Hot Off the Press: Latest Jobs</h2>
    @foreach ($jobs as $job)
      <a href="/jobs/display/{{$job->id}}">
        <div class="bg-gray-100 shadow-md rounded-lg hover:shadow-lg-hover p-4 flex items-center space-x-4">
          <div class="flex flex-col">
            <h3 class="text-lg font-medium text-gray-800">{{ $job->title }}</h3>
            <p class="text-gray-600 text-sm">{{ number_format($job->salary, 2, '.', '') }}</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </a> 
    @endforeach
  </div>
 
@else
  <div class="mt-8 text-gray-700">
    No jobs found. Time to get hiring!
  </div>
@endif


</x-product>