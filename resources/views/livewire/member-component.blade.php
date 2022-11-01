<div>
    <div class="row">
        <div class="col-md-12">
            @include('layouts.messages')
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Upload Members</div>

                    <div class="form-body">
                        <form wire:submit.prevent="upload">
                            <div class="form-group">
                                <label>Select File</label>
                                <input type="file" wire:model="file" class="form-control" />
                                @error('file')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm btn-primary btn-block" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
