@extends('ApplicationView.AppViewLayout.AppViewLayout')
@section('appContent')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .container {
        margin-top: 50px;
    }

    .field-group {
        margin-bottom: 10px;
    }

    .remove {
        margin-left: 10px;
    }

    .icon {
        cursor: pointer;
        margin-left: 10px;
        font-size: 1.5em;
    }

    .swal2-actions {
        gap: 10px;
    }
</style>
<div class="col-xl-9 col-lg-9 col-md-12">
    <div class="dashboard__content__wraper">
        <div class="dashboard__section__title">
            <h4>News & Notices</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="success-message" class="alert alert-success" style="display:none;">
                    Data saved successfully.
                </div>
                <form id="dynamicForm" action="/submitNewsNotice" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">News</h4>
                        </div>
                        <div class="card-body">
                            <div id="newsSection">
                                <div class="row field-group">
                                    <div class="col-lg-1">
                                        <label for="">News :</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <textarea class="form-control" name="newsFields[]"></textarea>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="">Publish/Unpublish :</label>
                                    </div>
                                    <div class="col-lg-1">
                                        <input type="checkbox" name="newsPublish[]" class="publish-checkbox">
                                    </div>
                                    <div class="col-lg-2">
                                        <i class="fas fa-plus-circle icon addMoreNews text-success"></i>
                                        <i class="fas fa-minus-circle icon removeNews text-danger"></i>
                
                                    </div>
                
                
                                </div>
                            </div>
                
                        </div>
                    </div>
                
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4 class="mb-0">Notices</h4>
                        </div>
                        <div class="card-body">
                            <div id="noticeSection">
                                <div class="row field-group">
                                    <div class="col-lg-1">
                                        <label for="">Notice :</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <textarea class="form-control" name="noticeFields[]"></textarea>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="">Publish/Unpublish :</label>
                                    </div>
                                    <div class="col-lg-1">
                                        <input type="checkbox" name="noticePublish[]" class="publish-checkbox">
                                    </div>
                                    <div class="col-lg-2">
                                        <i class="fas fa-plus-circle icon addMoreNotice text-success"></i>
                                        <i class="fas fa-minus-circle icon removeNotice text-danger"></i>
                                    </div>
                
                
                                </div>
                            </div>
                
                        </div>
                    </div>
                    <!-- <div class="field-group input-group">
                        <input type="text" class="form-control" name="fields[]" placeholder="Enter a value" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <input type="checkbox" name="publish[]" class="publish-checkbox">
                                <label class="ml-2">Publish/Unpublish</label>
                            </div>
                            <button type="button" class="btn btn-success addMore">Add More</button>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  
    $(document).ready(function() {
        // Hide remove buttons initially
        $('.removeNews, .removeNotice').hide();
        getEditData();
        // Function to add more fields for news
        $(document).on('click', '.addMoreNews', function() {
            var fieldHTML = ' <div class="row field-groupNews mt-2" ><div class="col-lg-1"><label for="">News :</label></div><div class="col-lg-5"><textarea class="form-control" name="newsFields[]"></textarea> </div><div class="col-lg-2"><label for="">Publish/Unpublish :</label> </div> <div class="col-lg-1"><input type="checkbox" name="newsPublish[]" class="publish-checkbox"> </div><div class="col-lg-auto">  <i class="fas fa-plus-circle icon addMoreNews text-success"></i> <i class="fas fa-minus-circle icon removeNews text-danger"></i></div> </div>';
            $('#newsSection').append(fieldHTML);
            $(this).closest('.field-groupNews').find('.removeNews').show();
        });

        // Function to add more fields for notices
        $(document).on('click', '.addMoreNotice', function() {
            var fieldHTML = ' <div class="row field-groupNotice mt-2" ><div class="col-lg-1"><label for="">Notice :</label></div><div class="col-lg-5"><textarea class="form-control" name="noticeFields[]"></textarea> </div><div class="col-lg-2"><label for="">Publish/Unpublish :</label> </div> <div class="col-lg-1"><input type="checkbox" name="noticePublish[]" class="publish-checkbox"> </div><div class="col-lg-auto">  <i class="fas fa-plus-circle icon addMoreNotice text-success"></i> <i class="fas fa-minus-circle icon removeNotice text-danger"></i></div> </div>';
            $('#noticeSection').append(fieldHTML);
            $(this).closest('.field-groupNotice').find('.removeNotice').show();
        });

        // Function to remove news fields
        $(document).on('click', '.removeNews', function() {
            $(this).closest('.field-groupNews').remove();
        });

        // Function to remove notice fields
        $(document).on('click', '.removeNotice', function() {
            $(this).closest('.field-groupNotice').remove();
        });




        // AJAX form submission
        $('#dynamicForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You want to save the record!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Save it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: $(this).attr('action'),
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            swalWithBootstrapButtons.fire({
                                title: "Saved!",
                                text: "Your records saved Successfully.",
                                icon: "success"
                            }).then((thn)=>{
                                getEditData();
                            });
                        },
                        error: function(xhr) {
                            // Handle error
                            console.log(xhr);
                        }
                    });

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your imaginary records is safe :)",
                        icon: "error"
                    });
                }
            });

        });

        // Function to pre-fill form for editing
        function preFillForm(data) {
            // Pre-fill news fields
            if (data.news && data.news.length > 0) {
                data.news.forEach(function(item) {
                    var fieldHTML = ' <div class="row field-groupNews mt-2" ><div class="col-lg-1"><label for="">News :</label></div><div class="col-lg-5"><textarea class="form-control" name="newsFields[]">' + item.newsField + '</textarea> </div><div class="col-lg-2"><label for="">Publish/Unpublish :</label> </div> <div class="col-lg-1"><input type="checkbox" name="newsPublish[]" class="publish-checkbox" ' + (item.isPublished ? 'checked' : '') + '> </div><div class="col-lg-auto">  <i class="fas fa-plus-circle icon addMoreNews text-success"></i> <i class="fas fa-minus-circle icon removeNews text-danger"></i></div> </div>';
                    $('#newsSection').append(fieldHTML);
                });
            }

            // Pre-fill notice fields
            if (data.notices && data.notices.length > 0) {
                data.notices.forEach(function(item) {
                    var fieldHTML = ' <div class="row field-groupNotice mt-2" ><div class="col-lg-1"><label for="">Notice :</label></div><div class="col-lg-5"><textarea class="form-control" name="noticeFields[]">' + item.noticeField + '</textarea> </div><div class="col-lg-2"><label for="">Publish/Unpublish :</label> </div> <div class="col-lg-1"><input type="checkbox" name="noticePublish[]" class="publish-checkbox" ' + (item.isPublished ? 'checked' : '') + '> </div><div class="col-lg-auto">  <i class="fas fa-plus-circle icon addMoreNotice text-success"></i> <i class="fas fa-minus-circle icon removeNotice text-danger"></i></div> </div>';
                    $('#noticeSection').append(fieldHTML);
                });
            }
        }

        function getEditData(){
            $.ajax({
            url: '/getNewsNoticeData', // Adjust the route URL as per your application
            method: 'GET',
            success: function(data) {
                console.log(data);
                // Pre-fill form with existing data
                preFillForm(data.news, data.notice);
            },
            error: function(xhr) {
                // Handle error
                console.log(xhr);
            }
        });
        }

       


        // Example usage of preFillForm function
        // var exampleData = {
        //     news: [{
        //             newsField: "",
        //             isPublished: false
        //         }
        //        
        //     ],
        //     notices: [{
        //             noticeField: "",
        //             isPublished: false
        //         },

        //     ]
        // };
        // preFillForm(exampleData);

        // Function to pre-fill form for editing
        function preFillForm(news, notices) {
            // Clear existing content in news and notices sections
            $('#newsSection').empty();
            $('#noticeSection').empty();

            // Pre-fill news fields
            if (news && news.length > 0) {
                news.forEach(function(item) {
                    var fieldHTML = ' <div class="row field-groupNews mt-2" ><div class="col-lg-1"><label for="">News :</label></div><div class="col-lg-5"><textarea class="form-control" name="newsFields[]">' + item.newsField + '</textarea> </div><div class="col-lg-2"><label for="">Publish/Unpublish :</label> </div> <div class="col-lg-1"><input type="checkbox" name="newsPublish[]" class="publish-checkbox" ' + (item.isPublished ? 'checked' : '') + '> </div><div class="col-lg-auto">  <i class="fas fa-plus-circle icon addMoreNews text-success"></i> <i class="fas fa-minus-circle icon removeNews text-danger"></i></div> </div>';
                    $('#newsSection').append(fieldHTML);
                });
            }

            // Pre-fill notice fields
            if (notices && notices.length > 0) {
                notices.forEach(function(item) {
                    var fieldHTML = ' <div class="row field-groupNotice mt-2" ><div class="col-lg-1"><label for="">Notice :</label></div><div class="col-lg-5"><textarea class="form-control" name="noticeFields[]">' + item.noticeField + '</textarea> </div><div class="col-lg-2"><label for="">Publish/Unpublish :</label> </div> <div class="col-lg-1"><input type="checkbox" name="noticePublish[]" class="publish-checkbox" ' + (item.isPublished ? 'checked' : '') + '> </div><div class="col-lg-auto">  <i class="fas fa-plus-circle icon addMoreNotice text-success"></i> <i class="fas fa-minus-circle icon removeNotice text-danger"></i></div> </div>';
                    $('#noticeSection').append(fieldHTML);
                });
            }
        }

    });
</script>
@endsection