$("#btn-decline").on("click", function () {
  Swal.fire({
    title: "Are you sure you want to decline?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, contiue!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        "Application Declined!",
        "The application has been declined.",
        "danger"
      );
    }
  });
});
