<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
    .highlight {
        position: absolute;
        top: 0;
        left: 0;
    }

    .highlight span {
        width: 100%;
    }

    .skill-tag {
        background-color: #e4ebe4;
        display: inline-flex;
        align-items: center;
    }

    .details {
        display: inline-block;
        border-radius: 0 3px 3px 0;
        padding: 5px 13px;
        color: #000;
        font-size: 16px;
        font-weight: 700;
        background: rgba(212, 172, 13, 0.8);
    }

    .project-card:hover .card-title {
        color: #00008b !important;
    }

    .bg-green {
        background-color: #E9F7EF !important;
    }

    .project-card:hover p {
        color: #000 !important;
    }

    .project-card:hover img {
        transition: .4s ease-in-out;
    }

    .project-card:hover {
        border: 1px solid #ccc;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
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


    .modal-dialog-sidebar-right {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 480px;
        margin-right: -480px;
        right: 0;
        z-index: 1050;
        transition: margin-right 0.3s ease-in-out;
    }

    .modal.show .modal-dialog-sidebar-right {
        margin-right: 0;
    }
</style>