<x-layout>
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="max-w-3xl mx-auto mt-24 bg-white py-8 px-12 bg-gray-100">
                <div class="flex gap-5">
                    <form method="POST" action="/recruitements" enctype="multipart/form-data" class="grid rounded grow">
                        @csrf
                        <div class="border-b bg-white px-10 py-5">
                            <p class="text-lg font-bold">Applicant Information</p>
                            <span class="text-xs text-gray-500">Personal Details and Appllication</span>
                        </div>
                        <div class="grid gap-6 mb-6 lg:grid-cols-2 bg-white p-10">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                                <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="First Name">
                                @error('first_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                                <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Name">
                                @error('last_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="position" class="block mb-2 text-sm font-medium text-gray-900">Position</label>
                                <input type="text" id="position" name="position" value="{{old('position')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Positon">
                                @error('position')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                                <input type="text" id="email" name="email" value="{{old('email')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="E-mail">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="experience" class="block mb-2 text-sm font-medium text-gray-900">Experience</label>
                                <input type="text" id="experience" name="experience" value="{{old('experience')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Experience">
                            </div>
                            <div>
                                <label for="mobilenumber" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
                                <input type="text" id="mobilenumber" name="mobilenumber" value="{{old('mobilenumber')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Mobile Number">
                            </div>
                            <div>
                                <label for="linkedin" class="block mb-2 text-sm font-medium text-gray-900">Linkedin URL</label>
                                <input type="url" id="linkedin" name="linkedin_url" value="{{old('linkedin_url')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Linkedin URL">
                            </div>
                            <div>
                                <label for="salary" class="block mb-2 text-sm font-medium text-gray-900">Salary Range</label>
                                <div class="flex gap-3">
                                    <input type="text" name="min_salary" id="salary" value="{{old('min_salary')}}" class="inline-block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Min"> 
                                    <input type="text" name="max_salary" id="salary" value="{{old('max_salary')}}" class="inline-block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Max">
                                </div>
                            </div>
                            <div>
                                <label for="skills" class="block mb-2 text-sm font-medium text-gray-900">Skills (Add commas after each tag)</label>
                                
                                <input type="text" id="skills" name="skills" value="{{old('skills')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Skills (Example: Html,Css,Laravel)">
                            </div>
                            
                            <div>
                                <label for="cv" class="block mb-2 text-sm font-medium text-gray-900">CV</label>
                                <div class="flex items-center bg-grey-lighter">
                                    <label class="flex flex-col items-center px-4 py-2  bg-gray-50 text-blue rounded border cursor-pointer">
                                        <span class="text-sm"><svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg> Upload CV</span>
                                        <input id="cv" name="cv" type='file' class="hidden" />
                                    </label>
                                </div>
                                @error('cv')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <input type="hidden" name="status_id" value="1">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save</button>
                        </div>
                    </form>
                </div>
                

            
            </div>
            
    </div>
</x-layout>