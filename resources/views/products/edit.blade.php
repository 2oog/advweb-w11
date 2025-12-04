<html>

<body>
    <div class="container">
        <h2>Edit Produk</h2>
        <form action="/advweb-w11/update/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk" value="{{ $product->nama }}">
            </div>

            <div class="form-group">
                <label for="satuan">Satuan:</label>
                <input type="text" name="satuan" class="form-control" placeholder="pcs, kg, liter" value="{{ $product->satuan }}">
            </div>

            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" step="0.01" name="harga" class="form-control" placeholder="Contoh: 10000.50" value="{{ $product->harga }}">
            </div>

            <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
            <a href="/index" class="btn btn-secondary mt-3">Batal</a>
        </form>
    </div>
</body>

</html>
