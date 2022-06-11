<x-layout>
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="max-w-6xl mx-auto mt-5 bg-white py-8 px-12 bg-gray-100">
                <div class="flex justify-between">
                    <div class="flex items-center gap-3 mb-10">
                        <img class="w-7 h-7" src="https://www.freepnglogos.com/uploads/rocket-png/rocket-transport-icons-29.png" alt="">
                        <div>
                            <p class="text-2xl font-bold">{{ $recruitement->first_name}} {{ $recruitement->last_name }}</p>
                            <span class="text-xs text-gray-500">Added to Pipeline: {{ $recruitement->created_at->format('j F Y')}}</span>
                        </div>
                    </div>
                    <div>
                        <span class="bg-indigo-100 text-base text-indigo-800 inline-block  font-medium inline-flex items-center px-2.5 py-0.5 rounded-full">
                            First Contact
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            
                        </span>
                        <a class="inline-block align-middle ml-4">
                            <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="flex gap-5">
                    <form method="POST" action="/recruitements/{{ $recruitement->id }}" enctype="multipart/form-data" class="grid rounded grow">
                        @csrf
                        @method('PUT')
                        <div class="border-b bg-white px-10 py-5">
                            <p class="text-lg font-bold">Applicant Information</p>
                            <span class="text-xs text-gray-500">Personal Details and Appllication</span>
                        </div>
                        <div class="grid gap-6 mb-6 lg:grid-cols-2 bg-white p-10">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First Name</label>
                                <input type="text" id="first_name" name="first_name" value="{{ $recruitement->first_name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="First Name">
                                @error('first_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last Name</label>
                                <input type="text" id="last_name" name="last_name" value="{{ $recruitement->last_name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Last Name">
                                @error('last_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="position" class="block mb-2 text-sm font-medium text-gray-900 ">Position</label>
                                <input type="text" id="position" name="position" value="{{ $recruitement->position }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Positon">
                                @error('position')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">E-mail</label>
                                <input type="text" id="email" name="email" value="{{ $recruitement->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="E-mail">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="experience" class="block mb-2 text-sm font-medium text-gray-900 ">Experience</label>
                                <input type="text" id="experience" name="experience" value="{{ $recruitement->experience }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Experience">
                            </div>
                            <div>
                                <label for="mobilenumber" class="block mb-2 text-sm font-medium text-gray-900 ">Phone</label>
                                <input type="text" id="mobilenumber" name="mobilenumber" value="{{ $recruitement->mobilenumber }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Mobile Number">
                            </div>
                            <div>
                                <label for="linkedin" class="block mb-2 text-sm font-medium text-gray-900 ">Linkedin URL</label>
                                <input type="url" id="linkedin" name="linkedin_url" value="{{ $recruitement->linkedin_url }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Linkedin URL">
                            </div>
                            <div>
                                <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 ">Salary Range</label>
                                <div class="flex gap-3">
                                    <input type="text" name="min_salary" id="salary" value="{{ $recruitement->min_salary }}" class="inline-block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Min"> 
                                    <input type="text" name="max_salary" id="salary" value="{{ $recruitement->max_salary }}" class="inline-block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Max">
                                </div>
                            </div>
                            <div>
                                <label for="skills" class="block mb-2 text-sm font-medium text-gray-900 ">Skills (Add commas after each tag)</label>
                                
                                <input type="text" id="skills" name="skills" value="{{ $recruitement->skills }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Skills (Example: Html,Css,Laravel)">
                            </div>

                            <div>
                                <label for="status_id" class="block mb-2 text-sm font-medium text-gray-900">Status of Candidate</label>
                                <select id="status_id" name="status_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="">Choose a Status</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}" {{ $status->id==$recruitement->status_id ? 'selected' : '' }}>{{ $status->status }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="cv" class="block mb-2 text-sm font-medium text-gray-900 ">CV</label>
                                <div class="flex items-center bg-grey-lighter">
                                    <label class="flex flex-col items-center px-4 py-2  bg-gray-50 text-blue rounded border cursor-pointer">
                                        <span class="text-sm"><svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg> Upload CV</span>
                                        <input id="cv" name="cv" type='file' class="hidden" />
                                    </label>
                                    @if(!empty($recruitement->cv))
                                    <p class="text-gray-900 whitespace-no-wrap ml-5">
                                        <span class="text-gray-600 text-xs font-medium inline-flex items-center py-0.5 rounded">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                            <a href="{{ asset('storage/' . $recruitement->cv) }}" download="cv">View Uploaded CV</a>
                                          </span>
                                    </p>
                                    @endif
                                </div>
                                @error('cv')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save</button>
                        </div>
                    </form>

                    <form method="POST" action="/comment">
                        @csrf
                        <div class="bg-white px-10 py-5">
                            <p class="text-lg font-bold">Timeline</p>
                        </div>
                        <div class="bg-white p-10">
                            @foreach($timeline as $comment)
                            <div class="mb-4 flex justify-end gap-2 border-l">
                                <p class="text-sm text-gray-400 w-3/4">{{ $comment->comment }}<span class="font-bold text-gray-700"> {{ $comment->status }}</span></p> 
                                <span class="text-sm text-gray-400">{{ $comment->created_at->format('F j')}}</span>
                            </div> 
                            @endforeach
                            <div class="mb-6">
                                <textarea name="comment"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " rows="4">Leave a Comment</textarea>
                            </div> 
                            <input type="hidden" name="status_id" value="{{ $recruitement->status_id }}">
                            <input type="hidden" name="candidate_id" value="{{ $recruitement->id }}">
                            <div class="flex justify-end">
                                <button type="submit" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Comment</button>
                            </div>
                        
                        </div>
                    </form>
                </div>
                

            
            </div>
        </div>
</x-layout>