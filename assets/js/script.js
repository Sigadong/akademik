
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Data Berhasil '+ flashData,
		text: '',
		icon: 'success'
	});
}

// tombol-hapus di index
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Yakin?',
		text: 'Data anda akan dihapus.',
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#1e49eb',
		cancelButtonColor: '#f12727',
		confirmButtonText: '<i class="fas fa-user-times"></i> Hapus!',
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});


});