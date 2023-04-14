<x-app-layout>

    <div class="p-2 pt-10" style="width: 100vw;">
        <div class="input-group">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1">Search</label>
            </div>
            {{-- <button type="button" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button> --}}
          </div>
        <table class="border-collapse table-auto w-full text-sm table-bordered">
            <thead>
              <tr>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left" >#</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">name</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">abbreviation</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">description</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">location_desc</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">number_of_beds</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">number_of_cots</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">open_whole_day</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">open_whole_week</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">facility_type</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">operation_status</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ward</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">owner</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">officer_in_charge</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">physical_address</th>
                  <th class="border-b dark:border-slate-600 font-medium p-2 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">parent</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-slate-800">
              @foreach ($facilities as $data)
              <tr>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400">{{ $data->id }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->name }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->abbreviation }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->description }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->location_desc }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->number_of_beds }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->number_of_cots }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->open_whole_day }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->open_whole_week }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->facility_type }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->operation_status }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->ward }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->owner }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->officer_in_charge }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->physical_address }}</td>
                  <td class="border-b border-slate-100 dark:border-slate-700 p-2 pl-8 text-slate-500 dark:text-slate-400" >{{ $data->parent }}</td>
                </tr>
                @endforeach
            </tbody>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
      </table>
    </div>
</x-app-layout>
