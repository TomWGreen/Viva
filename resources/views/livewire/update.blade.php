<form>
    <input type="hidden" wire:model="student_id">
    <div class="form-group">
        <label for="exampleFormControlInput1">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" wire:model="name">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email:</label>
        <input type="text" class="form-control" placeholder="Enter email" wire:model="email">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Identification type:</label>
        <label>
            <input type="radio" class="form-control" wire:model="identification_type" value="ID" />
            ID
        </label>    
        <label>
            <input type="radio" class="form-control" wire:model="identification_type" value="Passport" />
            Passport
        </label>    
        <label>
            <input type="radio" class="form-control" wire:model="identification_type" value="Asylum" />
            Asylum
        </label>    
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Identification number:</label>
        <textarea type="text" class="form-control" wire:model="identificationNumber" placeholder="Enter Body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>