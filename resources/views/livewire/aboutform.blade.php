<div>
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $pages[$currentPage]['heading'] }}</h3>
        <p class="mt-1 text-sm text-gray-600">{{ $pages[$currentPage]['subheading'] }}</p>
    </div>
    @if ($success)
        <div class="text-sm bg-green border border-green text-white px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ $success }}</span>
            <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </span>
        </div>
    @endif
    <form wire:submit.prevent="submit">
        <div class="container">
            @if ($currentPage === 1)
                <div class="row mt-4">
                    <div class="col form-floating ">
                        <input wire:model.lazy='name' type="text" class="form-control" placeholder="dawit" name="name"
                            value="{{ old('') }}">
                        <label for="floatingInput" class="text-center">First Name</label>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col form-floating ">
                        <input wire:model.lazy='lastname' type="text" class="form-control" placeholder="mekonnen"
                            name="lastname">
                        <label for="floatingInput" class="text-center">Last Name</label>
                        @error('lastname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col form-floating ">
                        <input wire:model.lazy='email' type="text" class="form-control" placeholder="mekonnen"
                            name="email">
                        <label for="floatingInput" class="text-center">Email</label>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col form-floating ">
                        <input wire:model.lazy='username' type="text" class="form-control" placeholder="mekonnen"
                            name="username">
                        <label for="floatingInput" class="text-center">UserName</label>
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col form-floating ">
                        <input wire:model.lazy='phone' type="text" class="form-control" placeholder="mekonnen"
                            name="phone">
                        <label for="floatingInput" class="text-center">Phone</label>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col form-floating ">
                        <input wire:model.lazy='fax' type="text" class="form-control" placeholder="mekonnen"
                            name="fax">
                        <label for="floatingInput" class="text-center">Fax<small>(optinal)</small></label></label>
                        @error('fax')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col form-floating">
                        <select wire:model.lazy='usersex' class="form-select" id="floatingSelect" name="usersex">
                            <option selected>select sex</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>

                        </select>
                        <label for="floatingSelect">your sex</label>

                    </div>

                    <div class="col">
                        Marital Status
                        <div class="form-check">
                            <input wire:model.lazy='Mstatus' class="form-check-input" type="radio" name="Mstatus"
                                id="Mstatus" value="single">
                            <label class="form-check-label" for="Mstatus">
                                single
                            </label>
                        </div>
                        <div class="form-check">
                            <input wire:model.lazy='Mstatus' class="form-check-input" type="radio" name="Mstatus"
                                id="Mstatus" checked value="married">
                            <label class="form-check-label" for="Mstatus">
                                Married
                            </label>
                        </div>
                    </div>

                </div>
        </div>
    @elseif ($currentPage === 2)
        <div class="container">
            <h3>Your Emergency Contact Address</h3>
            <div class="row mt-4">
                <div class="col form-floating ">
                    <input wire:model.lazy='fullname' type="text" class="form-control" placeholder="dawit"
                        name="fullname">
                    <label for="floatingInput" class="text-center">Fullname</label>
                    @error('fullname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col form-floating ">
                    <input wire:model.lazy='rel' type="text" class="form-control" placeholder="mekonnen" name="rel">
                    <label for="floatingInput" class="text-center">Relationship</label>
                    @error('rel')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col form-floating ">
                    <input wire:model.lazy='relphone' type="text" class="form-control" placeholder="mekonnen"
                        name="relphone">
                    <label for="floatingInput" class="text-center">Phone</label>
                    @error('relphone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    @elseif ($currentPage === 3)
        <div class="container">
            <h3>adress</h3>
            <div class="row mt-4">
                <div class="col form-floating ">
                    <input wire:model.lazy='natinality' type="text" class="form-control" placeholder="dawit"
                        name="natinality">
                    <label for="floatingInput" class="text-center">Natinality</label>
                    @error('natinality')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col form-floating ">
                    <input wire:model.lazy='region' type="text" class="form-control" placeholder="mekonnen"
                        name="region">
                    <label for="floatingInput" class="text-center">Region</label>
                    @error('region')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="row mt-4">

                <div class="col form-floating ">
                    <input wire:model.lazy='sub_city' type="text" class="form-control" placeholder="mekonnen"
                        name="sub_city">
                    <label for="floatingInput" class="text-center">sub City</label>
                    @error('sub_city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col form-floating ">
                    <input wire:model.lazy='house_no' type="text" class="form-control" placeholder="mekonnen"
                        name="house_no">
                    <label for="floatingInput" class="text-center">House No</label>
                    @error('house_no')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>
        @endif
        <div class="d-flex items-center justify-content-between px-4 py-3 bg-gray text-right sm:px-6">
            @if ($currentPage === 1)
                <div></div>
            @else
                <button wire:click="goToPreviousPage" type="button"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                    Back
                </button>
            @endif
            @if ($currentPage === count($pages))
                <button type="submit"
                    class="d-inline-flex justify-content-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            @else
                <button wire:click="goToNextPage" type="button"
                    class="d-inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Next
                </button>
            @endif
        </div>
    </form>
</div>
