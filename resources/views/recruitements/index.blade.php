<x-layout>
        
        <div class="bg-white p-8 rounded-md container m-auto">
            <div class=" flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 text-xl font-semibold">Recruitement Pipeline</h2>
                </div>
                <div class="flex items-center justify-between">
                        <div class="lg:ml-40 ml-10 space-x-8"  id="button">
                            <a href="/recruitements/create"><button class="bg-orange-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Add New Candidate</button></a>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    @include('partials._search')

                    
                </div>
                
                <div class="flex gap-12 py-5 border-b w-fit">
                    <div>
                        <a href="/?status">
                        All
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium mx-2 px-2.5 py-0.5 rounded-full">{{ $recruitementscount}}</span></a>
                    </div>
                    @foreach ($statuses as $status)
                            <x-candidate-status :status="$status" />
                    @endforeach
                </div>

                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                @unless(count($recruitements) == 0)
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Candidate
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Contact
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Experience
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Skills
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Salary Range
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($recruitements as $recruitement)
                                        <x-candidate-row :recruitement="$recruitement" />
                                    @endforeach
                                    @else
                                        <p>No Candidate Found</p>
                                    @endunless
                                </tbody>
                                
                            </table>
                            <div class="mt-6 p-4">
                                {{ $recruitements->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-layout>