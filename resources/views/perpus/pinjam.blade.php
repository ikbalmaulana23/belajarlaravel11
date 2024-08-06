<x-layout>

        <div class="container">
            <h1 class="mt-5">Pinjam Buku</h1>
            
            <h3 class="mt-3">Form Peminjaman</h3>
           
            <div class="content-center">
            <form class="col-5" action="{{ route('pinjambukuperpus') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="judulbuku" name="judulbuku">
                  
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Batas Peminjaman</label>
                    <input type="date" class="form-control" id="bataspinjam" name="bataspinjam">
                    
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                    <input type="text" class="form-control" id="peminjam" name="peminjam">
                    
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim">
                    
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
        
        </div>
        


</x-layout>
