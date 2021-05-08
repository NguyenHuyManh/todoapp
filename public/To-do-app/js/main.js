$(document).ready(function() {
    // Show info user login
    $('.user-info-name').click(function() {
        $('.dropdown-menu-user-info').toggle();
        $('.user-info-name i').toggleClass('down-icon');
    });

    // Add / remove class active icon bar menu responsive
    $('.nav-bar-btn').click(function() {
        $('.nav-bar-btn i').addClass('active');
    });

    $('.nav-bar-mobile__close').click(function() {
        $('.nav-bar-btn i').removeClass('active');
    });

    $('.nav-overlay').click(function() {
        $('.nav-bar-btn i').removeClass('active');
    });

    // Date time picker
    flatpickr("#date-time", {
        dateFormat: "Y/m/d ",
    });

    // Show - hidden Modal
    $('.main-content-head__right--btn-add').click(function() {
        $('.modal ').css({ "visibility": "visible", "opacity": "1" });
    });

    $('.modal-close-icon').click(function() {
        $('.modal ').css("visibility", "hidden");
    });

    $('.modal-overlay').click(function() {
        $('.modal ').css("visibility", "hidden");
    });

    // Show image before upload
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.imgOutput').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".imgInput").change(function() {
        readURL(this);
    });

    // Delete Task
    $(document).on('click', '.delete-task', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var _this = $(this);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    success: function(result) {
                        _this.parent().parent().parent().hide(500);
                        Swal.fire(
                            'Deleted!',
                            'Your item has been deleted.',
                            'success'
                        )
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        });
    });

    // Change Status Task
    $(document).on('click', '.change-status', function() {
        var id = $(this).attr('data-id');
        var status_current = $(this).attr('data-status');
        var url = "http://127.0.0.1:8000/" + "update-task/" + id;
        console.log(url);
        var _this = $(this);

        $.ajax({
            url: url,
            data: { status_current: status_current },
            success: function(result) {
                _this.parent().html(result.html);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Cập nhật trạng thái thành công!',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});