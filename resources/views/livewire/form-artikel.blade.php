<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul" type="text" name="judul" placeholder="Masukan Judul" class="form-control">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model="deskripsi" name="" id="" cols="30" rows="10" class="form-control" placeholder="Masukan Deskripsi"></textarea>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
