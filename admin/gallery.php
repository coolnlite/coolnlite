<?php
    ob_start();
    session_start();
    require_once('./modules/permision.php');
    require_once('../config/config.php');
    require_once('../config/dbhelper.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư Viện</title>
    <link rel="icon" sizes="32x32" href="../shared/img/icon.png">
    <!-- fontawesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-admin">
    <!-- Sidebar -->
    <?php
        require_once('./pages/sidebar.php');
    ?>

       <!-- Main -->
        <div class="main">
           <?php
            require_once('./pages/topbar.php');
            if($permission != 2){
              require_once('./pages/main_premision.php');
            }else{
              require_once('./pages/main_gallery.php');
            }
           ?>
        </div>
    </div>

   <!-- Script -->
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            $('#gallery').DataTable({
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData[0]);
            },
            language: {
                lengthMenu: 'Hiện _MENU_ mẫu tin trên trang',
                zeroRecords: 'Không tìm thấy mẫu tin nào',
                info: 'Hiện trang _PAGE_ trên _PAGES_ trang',
                infoEmpty: 'Không có mẫu tin nào',
                infoFiltered:'',
                search : "Tìm kiếm:",
                paginate: {
                    next:       ">>",
                    previous:   "<<"
                    },
            },
            'serverSide': 'true',
            'processing': 'true',
            'paging': 'true',
            'order': [],
            'ajax': {
                'url': '<?php echo ''.$DOMAIN.'modules/fetch_data.php'?>',
                'data': {
                    gallery : true
                },
                
                'type': 'post',
            },
            "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [3]
                },

            ]
            });
            //Thêm dòng xe
            $("#fAddAgency").on('submit', function(e){
                    e.preventDefault();
                        $.ajax({
                        type: 'POST',
                        url: '<?php print $DOMAIN.'modules/add_data.php'?>',
                        data: new FormData(this),
                        dataType : 'json',
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(response){ 
                            if(response.status == 1){
                                alert(response.message);
                                window.location.reload();
                            }else{
                                alert(response.message);
                            }
                            
                        }
                    })
                });
            // Xóa mẫu tin thư viện
            $(document).on('click', '.deleteGallery', function(event) {
            var table = $('#gallery').DataTable();
            event.preventDefault();
            var id_gallery = $(this).data('id');
                if (confirm("Bạn chắc chắc có muốn xóa dòng xe này")) {
                $.ajax({
                    url: '<?php echo ''.$DOMAIN.'modules/delete_data.php'?>',
                    data: {
                    delete_gallery : true,
                    id_gallery: id_gallery
                    },
                    type: "post",
                    success: function(data) {
                    var json = JSON.parse(data);
                    status = json.status;
                    if (status == 'success') {
                        $("#" + id_gallery).closest('tr').remove();
                    } else {
                        alert('Có lỗi gì đó');
                        return;
                    }
                    }
                });
                } else {
                return null;
                }
            })

        });
    </script>
 
</body>

</html>