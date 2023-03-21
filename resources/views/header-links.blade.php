<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{url('assets/vendor/bootstrap/css/bootstrap-5.2.3.min.css')}}" rel="stylesheet">
<link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
<!-- <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> -->
<link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link href="{{url('assets/vendor/select2/css/select2-4.0.3.min.css')}}" rel="stylesheet" />
<link href="{{url('assets/vendor/animate/css/animate-3.7.0.min.css')}}" rel="stylesheet">
<link href="{{url('assets/css/style.css')}}" rel="stylesheet">
   
<style>
    .skill-tag {
        background-color: #e4ebe4;
        display: inline-flex;
        align-items: center;
    }

    .card {
        border: none;
    }

    a,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    li,
    i,
    p {
        text-decoration: none;
    }

        .modal-dialog-slideout {
            min-height: 100%;
            margin: 0 0 0 auto;
            background: #fff;
        }

        .modal.fade .modal-dialog.modal-dialog-slideout {
            -webkit-transform: translate(100%, 0)scale(1);
            transform: translate(100%, 0)scale(1);
        }

        .modal.fade.show .modal-dialog.modal-dialog-slideout {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
            display: flex;
            align-items: stretch;
            -webkit-box-align: stretch;
            height: 100%;
        }

        .modal.fade.show .modal-dialog.modal-dialog-slideout .modal-body {
            overflow-y: auto;
            overflow-x: hidden;
        }

        .modal-dialog-slideout .modal-content {
            border: 0;
        }

        .modal-dialog-slideout .modal-header,
        .modal-dialog-slideout .modal-footer {
            height: 69px;
            display: block;
        }

        .modal-dialog-slideout .modal-header h5 {
            float: left;
        }
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>