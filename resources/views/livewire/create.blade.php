<form id="login">
    <div class="bg-white dark:bg-gray-800">
        <div class="mx-auto pt-4">
            <div class="container mx-auto">
                <div class="my-6 mx-auto xl:w-full xl:mx-0">
                    <div class="mb-6">
                        <label for="FirstName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">First Name</label>
                        <input tabindex="0" type="text" id="FirstName" name="firstName" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="" />
                        @error('firstName') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-6">
                        <label for="LastName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Last Name</label>
                        <input tabindex="0" type="text" id="LastName" name="lastName" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="" />
                    </div>
                    <div class="mb-6">
                        <label for="Email" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                        <div class="border shadow-sm rounded flex">
                            <div tabindex="0" class="focus:outline-none px-4 py-3 dark:text-gray-100 flex items-center border-r">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2.svg" alt="mail">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2dark.svg" alt="mail">
                            </div>
                            <input tabindex="0" type="text" id="Email" name="email" required class="pl-3 py-3 w-full text-sm focus:outline-none placeholder-gray-500 rounded bg-transparent text-gray-600 dark:text-gray-400" placeholder="example@gmail.com" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Identification type:</label>
                    <label>
                        <input type="radio" wire:model="identificationType" value="ID" />
                        ID
                    </label>    
                    <label>
                        <input type="radio" wire:model="identificationType" value="Passport" />
                        Passport
                    </label>    
                    <label>
                        <input type="radio" wire:model="identificationType" value="Asylum" />
                        Asylum
                    </label>    
                    @error('identificationType') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-6">
                    <label for="FirstName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Identification number</label>
                    <input tabindex="0" type="text" id="FirstName" name="firstName" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="" />
                    @error('identifictionNumber') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>
</form>
