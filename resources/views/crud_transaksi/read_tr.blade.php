@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<hr />
<center>

    @if(session('pesan'))
    <div class='alert alert-success'>
        {{ session('pesan') }}
    </div>
    @endif

    <h2> TABEL TRANSAKSI </h2>
<hr />


    <table class="table table-striped w-auto">
        <thead class=thead-dark>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>ID BUKU</th>
                <th>ID PELANGGAN</th>
                <th>JUMLAH</th>
                <th>TOTAL HARGA</th>
                <th> CREATED AT </th>
                <th> UPDATED AT </th>
                <th> ACTION </th>
            </tr>
        </thead>

        <tbody>

            <?php
            
    $num=1;
    foreach($dataAll as $data) {

        if(($num%2)==1) {echo "<tr class='table-info'>";} else echo "<tr class='table-success'>";
            echo "<th scope='row'> $num </th>";
                echo "<td>";
                    echo $data->id;
                echo "</td>";
                echo "<td>";
                    echo $data->id_buku;
                echo "</td>";
                echo "<td>";
                    echo $data->id_pelanggan;
                echo "</td>";
                echo "<td>";
                    echo $data->jumlah;
                echo "</td>";
                echo "<td>";
                    echo $data->total_harga;
                echo "</td>";
                echo "<td>";
                    echo $data->created_at;
                echo "</td>";
                echo "<td>";
                    echo $data->updated_at;
                echo "</td>";

            echo "<td>";
            echo "<a href=/update_tr/".$data->id." onclick=\"return confirm('Yakin data mau diedit/diupdate ?');\" class='btn btn-success'><i class='fas fa-pen'></i> Edit</a>";
            echo "<a href=/delete_tr/".$data->id." onclick=\"return confirm('Yakin mau dihapus ?');\" class='btn btn-danger'><i class='fas fa-trash'></i> Hapus</a>";
            
            echo "</td>";

                echo "</tr>";
            $num++;
            }
?>
        </tbody>
    </table>
</section>
<a href=/create_tr class='btn btn-info'> <i class='fas fa-file'></i> Tambah Data </a>
</center>
<hr />
@endsection