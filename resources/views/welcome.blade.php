@extends('layouts.user')
@section('css')
<style>
    .clamp{
        display:block;
        width:200px;
        text-overflow:ellipsis;
        overflow:hidden;
        max-height:120px;

        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
    }
    .hr-primary{
        background-image: -webkit-linear-gradient(left, rgba(66,133,244,.8), rgba(66, 133, 244,.6), rgba(0,0,0,0));
    }
    .hr-primary2{
        background-image: -webkit-linear-gradient(right, rgba(66,133,244,.8), rgba(66, 133, 244,.6), rgba(0,0,0,0));
    }

    .hr {
    height: 4px;
    margin-left: 15px;
    margin-bottom:-3px;
    }

    /* MODAL */
    #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal-img {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 150px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 110%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-img-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    }

    /* Add Animation */
    .modal-img-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }
    /* #container-slider{
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
        grid-gap:1em;
    } */

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-img-content {
        width: 100%;
    }
    }
    .wrapper         {width:80%;height:100%;margin:0 auto;background:#CCC}
    .h_iframe        {position:static;}
    .h_iframe .ratio {display:block;width:auto;height:auto;}
    .h_iframe iframe {position:absolute;top:0;left:0;width:100%; height:100%;}

    #ytplayer {
        /* display:none; */
        position: absolute;
    }

    .custom-module p40l{
        text-align:justify;
    }
</style>
@endsection

@section('content')
<section id="home" class="video-section js-height-full" style="background-color:black;">
    <div class="home-text-wrapper relative container">
        <div class="home-message">
            <p>Selamat Datang di <br> Portal Riset Inovasi Dalam Angka</p>
            <small>Universitas Sebelas Maret</small>
        </div>
    </div>
</section>



<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="custom-module">
                    <h2><mark>BIRO RISET DAN INOVASI UNS</mark></h2>
                </div>
                <hr class="hr-primary">
            </div>
            
            <div class="col-md-12 justify-center">
                <div class="custom-module p40l">
                    <p style="text-align:justify; 
                        margin: 4rem 0px 0px 0px;
                        width: 100%;
                        padding: 10px;">Bidang Riset dan Inovasi UNS (RISNOV UNS)
                        menyampaikan terima kasih yang sebesar-besarnya atas kegigihan kepada para
                        inventor yang telah menghilirkan hasil risetnya dan para inovator yang telah menghasilkan produk inovasinya. RISNOV mendorong
                        para peneliti dan inovator UNS untuk
                        melakukan riset dan inovasi secara berkelanjutan hingga produknya dimanfaatkan
                        masyarakat. Mari bersama-sama majukan
                        Riset dan Inovasi UNS untuk masyarakat.
                    </p>
                    <a href="#" title="" style="text-align: right;" >
                        <h4><span>Prof. Dr. Kuncoro Diharjo, S.T., M.T.</span></h4>
                    </a>
                    <p style="text-align: right;">Wakil Rektor Riset dan Inovasi</p>
                    
                </div><!-- end module -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-module p40l">
                    <a href="#">
                        <h3><mark>Dokumentasi Riset Inovasi Dalam Angka</mark></h3>
                    </a>
                    <hr class="hr-primary2">
                </div>
            </div>
            <div class="col-md-6">
                <div class="custom-module">
                </div>
                <div class="custom-module">
                    <img style="height:500px;object-fit:cover;margin-top: 1rem;" src="{{asset('images/penelitian.jpg')}}" alt="download-ebook" class="img-responsive wow slideInLeft">
                </div><!-- end module -->
            </div><!-- end col -->
            <div class="col-md-6">
                <div class="custom-module p40l">
                    <p style="text-align:justify; 
                        margin: 3rem 0px 0px 0px;
                        width: 100%;
                        padding: 10px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis beatae eius provident magni asperiores, dolore eos vitae facere optio saepe architecto, quod earum rerum dolores cum vero rem repellendus tempora. 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo id neque numquam exercitationem fugiat. Distinctio totam rerum fuga quis repudiandae quas sequi sint, placeat possimus dignissimos error facere reprehenderit obcaecati. 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, cupiditate repudiandae? Aut, voluptatum inventore? Numquam neque voluptatum officia, quaerat illum consequuntur distinctio, quae eius suscipit modi sapiente pariatur consequatur vel?
                    </p>
                    <hr class="invis">

                </div><!-- end module -->
                
            </div><!-- end col -->
            
            <div class="col-md-12 text-center">
                <div class="btn-wrapper">
                    <a href="#" class="readmore btn btn-primary">Buka Aplikasi</a>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>


<!--you can copy the above code to your htm 
page-----------------------------end--->  


@endsection

@section('js')


@endsection