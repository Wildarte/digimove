<?php include('./header.php'); ?>

<main>
    <section class=" container-full section_intro_pages" style="background-image: url('./img/intro-imovel-page.jpg')">
        <div class="section_intro_pages_over">
            <header class="section_intro_pages_header" style="background-color: #077DBA">
                <h1>Casa em bairro nobre</h1>
            </header>
        </div>
    </section>

    <section class="container section_imovel">
        <div class="social_share_imovel">
            <div>
                <h3>Compartilhar</h3>
            </div>
            <ul>
                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                <li><a href="#"><i class="bi bi-link"></i></a></li>
            </ul>
        </div>

        <div class="section_imovel_content">


            <div class="imovel_content_principal">


                <div class="imovel_content_principal_midia">
                    
                    <div class="container_gallery_photos">

                        <div class="gallery_photos_palco">
                            
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-1.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-2.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Cozinha
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-3.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Slide 3 jardim dos fundos
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-4.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Quintal da frente
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-7.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Banheiro
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-8.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-9.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" src="img/gallery/image-imovel-10.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                            </div>


                            <a class="prev_gallery" onclick="plusSlidesGallery(-1)">&#10094;</a>
                            <a class="next_gallery" onclick="plusSlidesGallery(1)">&#10095;</a>

                            <div class="modal_full_screen"><i class="bi bi-arrows-fullscreen"></i></div>
                            <div class="btn_close_modal_photos"><i class="bi bi-x-lg"></i></div>
                        </div>
                        <div class="gallery_imovel_thumb">
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(1)" src="img/gallery/image-imovel-1.jpg" alt="imagem do imóvel">
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(2)" src="img/gallery/image-imovel-2.jpg" alt="imagem do imóvel">
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(3)" src="img/gallery/image-imovel-3.jpg" alt="imagem do imóvel">
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(4)" src="img/gallery/image-imovel-4.jpg" alt="imagem do imóvel">
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(5)" src="img/gallery/image-imovel-7.jpg" alt="imagem do imóvel">
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(6)" src="img/gallery/image-imovel-8.jpg" alt="imagem do imóvel">
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(7)" src="img/gallery/image-imovel-9.jpg" alt="imagem do imóvel">
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(8)" src="img/gallery/image-imovel-10.jpg" alt="imagem do imóvel">
                            </div>
                        </div>

                        <!-- 
                        <div class="modal_photos_gallery">
                            <div class="btn_close_modal_photos">
                                <i class="bi bi-x-lg"></i>
                            </div>
                            <div class="modal_photo_img">
                                <img src="img/gallery/image-imovel-4.jpg" alt="">
                            </div>
                            <div class="modal_photo_img">
                                <img src="img/gallery/image-imovel-1.jpg" alt="">
                            </div>
                            <div class="modal_photo_img">
                                <img src="img/gallery/image-imovel-2.jpg" alt="">
                            </div>
                            <div class="modal_photo_img">
                                <img src="img/gallery/image-imovel-7.jpg" alt="">
                            </div>
                                
                            <a class="prev_gallery_modal" onclick="passPhotoModal(-1)">&#10094;</a>
                            <a class="next_gallery_modal" onclick="passPhotoModal(1)">&#10095;</a>
                        </div>
                        -->
                    </div>

                    <div class="container_video_imovel" style="display: none;">
                        <video width="320" height="240" controls style="width: 100%; height: auto">
                            <source src="./video/Water - 3967.mp4" type="video/mp4">
                        </video>
                    </div>


                    <!-- ==================== panoramic image ======================== -->
                    <link rel="stylesheet" href="css/pannellum.css">
                    <script src="./js/pannellum.js"></script>
                    <style>
                        .pnlm-container{
                            height: 100%;
                        }
                    </style>
                    <div id="panorama" class="container_imovel_3d .view-3d" style="display: none;">
                        
                    </div>

                    
                    <script>
                        pannellum.viewer('panorama', {
                            "type": "equirectangular",
                            "panorama": "./texturas/pan.jpg",
                            "preview": "./texturas/pan.jpg"
                        });
                    </script>
                    <!-- ======================== panoramic image ====================== -->



                </div>

                <div class="imovel_content_principal_info">

                </div>

            </div>

            <div class="controllers_media_imovel">
                <button onclick="controlToggles(1)" class="btn_media_imagem controlMedia btn_media_selected">imagem</button>
                <button onclick="controlToggles(2)" class="btn_media_video controlMedia">vídeo</button>
                <button onclick="controlToggles(3)" class="btn_media_3d controlMedia">3D</button>
            </div>

            <div class="imovel_content_detalhes">
                
            </div>
            <div class="imovel_content_location">

            </div>
            <div class="imovel_content_indication">

            </div>
        </div>
    </section>
</main>
<?php include('./inc/maps.php') ?>
<?php include('./footer.php'); ?>