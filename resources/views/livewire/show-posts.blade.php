<div>
    <div class="contact-form-wrap">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="submit">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-grp">
                        <input type="text" placeholder="Nama" wire:model="name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <input type="email" placeholder="Email" wire:model="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="form-grp">
                <textarea name="message" placeholder="Pesan yang ingin disampaikan" wire:model="body"></textarea>
                @error('body') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn">Kirim <span></span></button>
        </form>
    </div>
</div>
