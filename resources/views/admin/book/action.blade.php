<a href="{{ route('admin.book.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{ route('admin.book.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  $('button#delete').on('click', function(e) {
    e.preventDefault();

    let href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah kamu yakin hapus data ini?',
      text: "Data yang sudah dihapus tidak bisa deikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus saja!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById('deleteForm').action = href;
        document.getElementById('deleteForm').submit();
      }
    });
  });

</script>
